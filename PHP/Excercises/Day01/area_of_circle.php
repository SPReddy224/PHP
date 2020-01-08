<?php
$r = 0.5;
$circumference = 2 * M_PI * $r;
$area = M_PI * $r * $r;
$volume = 4/3 * M_PI * $r * $r * $r;
echo 'The Circumference of the circle of radius 0.5 is', ' ' , round($circumference,4), PHP_EOL;
echo 'The area of the disk of radius 0.5 is', ' ' , round($area,4),  PHP_EOL;
echo 'The sphere of the circle of radius 0.5 is', ' ' , round($volume,4),  PHP_EOL;