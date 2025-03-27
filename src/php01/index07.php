<?php
function getSquareArea($base,$hight) {
    return $base * $hight;
}
function getTriangleArea($base,$hight) {
    return $base * $hight / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height) {
  return ($upperBase + $lowerBase) * $height / 2;
}

// echo getSquareArea(5, 5) . "\n";
// echo getTriangleArea(7, 8) . "\n";
// echo getTrapezoidArea(4, 5, 4);

echo getSquareArea(5, 5);
echo getTriangleArea(7, 8);
echo getTrapezoidArea(4, 5, 4);