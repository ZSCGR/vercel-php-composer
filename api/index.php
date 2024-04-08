<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;

printf("Right now is %s", Carbon::now()->tz('Asia/Shanghai')->toDateTimeString());
