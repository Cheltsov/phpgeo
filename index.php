<?php

include("src/Coordinate.php");
include("src/Distance/Vincenty.php");

use Location\Coordinate;
use Location\Distance\Vincenty;

//37.587093,55.733969
//37.592869 55.735302


$coordinate1 = new Coordinate( 37.587093, 55.733969); // Mauna Kea Summit
$coordinate2 = new Coordinate(37.592869, 55.735302); // Haleakala Summit

$calculator = new Vincenty();

echo $calculator->getDistance($coordinate1, $coordinate2); // returns 128130.850 (meters; ≈128 kilometers)
