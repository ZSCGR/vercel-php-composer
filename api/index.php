<?php

require_once __DIR__ . '/../vendor/autoload.php';

/* 获取当前秒级的时间戳 */
TimeHelper::getTimestamp();
/*
/* 获取当前毫秒级的时间戳 */
$milliTimestamp = TimeHelper::getMilliTimestamp();
echo "当前毫秒级时间戳：$milliTimestamp\n";

/* 获取今天的秒级时间戳结束时间 */
$secondEndToday = TimeHelper::secondEndToday();
echo "今天的秒级时间戳结束时间：$secondEndToday\n";

/* 获取当前星期几 */
$weekDay = TimeHelper::getWeekDay();
echo "当前星期几：$weekDay\n";

/* 检查今年是否是闰年 */
$isLeapYear = TimeHelper::isLeapYear();
echo "今年是否是闰年：$isLeapYear\n";*/

