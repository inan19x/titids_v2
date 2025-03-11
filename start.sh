#!/bin/bash

# Run suricata NIDS
sudo /usr/local/bin/suricata -c /usr/local/etc/suricata.yaml -i eth0 -D

# Define the command to run the PHP script
PHP_COMMAND="/usr/bin/php /var/www/html/titids/cron/process-alert.php"

# Check if the cron job already exists. If not, add it.
(crontab -l 2>/dev/null | grep -v "$PHP_COMMAND"; echo "* * * * * $PHP_COMMAND") | crontab -

