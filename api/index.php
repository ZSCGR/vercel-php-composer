<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;
use zjkal/time-helper

printf("Right now is %s", Carbon::now()->toDateTimeString());
printf("Right now is %s", TimeHelper::secondEndToday(); );


