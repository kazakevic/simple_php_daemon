# simple_php_daemon
PHP daemon

to run daemon on Linux in background install - screen
> 5 - is sleep time, daemon reads sleep time as first argument

screen -S daemon_name -d -m php /var/www/html/daemon.php 5