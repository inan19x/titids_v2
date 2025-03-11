#!/bin/bash

#Kill suricata NIDS and remove its PID
sudo pkill -9 -f /usr/local/bin/suricata
sudo rm -f /usr/local/var/run/suricata.pid

# Define the PHP command to search for in crontab
PHP_COMMAND="/usr/bin/php /var/www/html/titids/cron/process-alert.php"

# Remove the specific cron job by filtering out the line containing the command
(crontab -l 2>/dev/null | grep -v "$PHP_COMMAND") | crontab -

