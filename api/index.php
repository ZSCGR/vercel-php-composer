<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Carbon\Carbon;

printf("现在时间是： %s", Carbon::now()->tz('Asia/Shanghai')->toDateTimeString());
