# WeatherUnderground-API-CRON-job-in-PHP
### As we know Weather Underground API is limited or costs so you want to Cron it out to cut down on your calls. This simple script creates a flat file for the public to access while you create it once an hour.

##Install
- Drop this cron file in your /etc/cron.hourly
- Check permissions and make sure it is executable by chmod +x cron.php
- Add the path to your web server public folder
- Add zip code
- Create weather.txt (or if you change it of course) in your public folder and make sure the permissions are correct or you'll get "Unable to open file"
- After an hour you should be able to call weather.txt

# Troubleshooting

- Place cron.php in your public folder and call it.
- Should bounce back and give you feedback.

