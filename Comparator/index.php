<?php
include "CircleComparator.php";
include "Circle.php";
$one = new Circle("01",6);
$two = new Circle("02", 4);
$circleComarator = new CircleComparator();
var_dump($circleComarator->compara($one,$two));