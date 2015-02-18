<?php 
// Simple CRON php file written by Crimm github.com/crimm - Edit as you please, but retain fork/branch info back to github.com/crimm
$zip_code = ""; //This is the zip code of the area you want to have the weather for
$api_key = ""; //This is the API key given to you by weather underground
$path_to_weather_display = ""; //Path to your file, make sure it exists and make sure you use / at the end.
$weather_display_file = "weather.txt"; //File name, can be anything you want to include or require on your page
echo write_data($path_to_weather_display,$weather_display_file,$zip_code);


function write_data ($path_to_weather_display,$weather_display_file,$zip_code) {

	$file = fopen($path_to_weather_display.$weather_display_file, "w") or die("Unable to open file!");
	$contents = weather_cron($zip_code);
	fwrite($file, $contents);
	fclose($file);
	return "success!";
}   
    
function weather_cron ($zip_code) {    
	$json_string = file_get_contents("http://api.wunderground.com/api/".$api_key."/geolookup/conditions/q/".$zip_code.".json"); 
    $zip_code = "";
	$json_string = file_get_contents("http://api.wunderground.com/api/a771ee038ec5bef7/geolookup/q/".$zip_code.".json"); 
	$parsed_json = json_decode($json_string); 
	$location = $parsed_json->{'location'}->{'city'}; 
	$temp_f = $parsed_json->{'current_observation'}->{'temp_f'}; 
	echo "Current temperature in ${location} is: ${temp_f}\n"; 
?>