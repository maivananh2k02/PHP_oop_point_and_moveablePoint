<?php
include 'Point.php';
include 'MoveablePoint.php';
$point  = new Point(4,5);
$movePoint = new MoveAblePoint(6,7,4,4);

echo $point;
echo "<br>";
echo $movePoint;
echo "<br>";
$movePoint->move();
echo "<br>";
$movePoint->move();