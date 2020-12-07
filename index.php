<?php

require_once "./Speedometer.php";

echo Speedometer::convertKmToMiles(10)."<br />";
echo Speedometer::convertMilesToKm(10)."<br />";
require_once './Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle->switchOn());
var_dump($bicycle->switchOff());
var_dump($bicycle);

require_once './Car.php';

try{
    $car = new Car('green', 4, 'electric', true);
    $car->setParkBrake(false);
    $car->start();
    echo $car->forward();
    var_dump($car->switchOn());
    var_dump($car->switchOff());
} catch(Exception $e) {
    var_dump($e);
    $car->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}
var_dump($car);

require_once './Truck.php';
$truck = new Truck('red', 3, 'fuel', 3000);
echo $truck->forward();
var_dump($truck);
var_dump($truck->switchOn());
var_dump($truck->switchOff());
echo $truck->brake();
echo $truck->getStockStatus();
