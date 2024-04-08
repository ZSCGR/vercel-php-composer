<?php

require_once __DIR__ . '/../vendor/autoload.php';

use zjkal/time-helper\TimeHelper;

/*Tracy\Debugger::enable(Tracy\Debugger::DEVELOPMENT);*/
$weekDay = TimeHelper::getWeekDay();
echo "当前星期几：$weekDay\n";

/*throw new RuntimeException('Hello Tracy!');*/
