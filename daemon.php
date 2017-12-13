<?php
function run($sleep_time) {
    echo "Started DAEMON".PHP_EOL;
    while (true){
        sleep($sleep_time);
       //do something here
    }
}

$sleep_time = $argv[1];
run($sleep_time);

