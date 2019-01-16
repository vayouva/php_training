<?php

//$xmas2019 = strtotime("Dec 25, 2019");
//echo $xmas2019 . '<br>';
//echo date('l, F j, Y', $xmas2019);

$date1 = new DateTime();
$date2 = new DateTime();

$west_coast = new DateTimeZone('America/Los_Angeles');

$date2 -> setTimezone($west_coast);

echo $date1 -> format('g:ia, l, F j, Y') . '<br>';
echo $date2 -> format('g:ia, l, F j, Y') . '<br>';