<?php
echo 'hello php!';

$a = 3;
$b = 7;
echo $a + $b;

$array_month = ['1月', '2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $array_month[7];

$hello = "Hello,";
$name = "Hiroko";
$world = "'s World!";
echo $hello , $name , $world;

$teac_boost = "tech";
echo $teac_boost . "boost";

$calender2018_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calender2018_calendar["December"];