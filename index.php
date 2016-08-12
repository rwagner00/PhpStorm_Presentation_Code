<?php
/**
 * Created by PhpStorm.
 * User: ryan
 * Date: 8/7/16
 * Time: 5:48 PM
 */

include_once 'Car.php';
include_once 'RaceCar.php';
include_once 'GoCart.php';


$vehicle = new Car('engine', 'seats', 'engine_size', 'top_speed', 'car_doors', 'car_wheel_size', 'tire_size', 'fuel_mileage', 'drive_train', 400.4);

$raceCar = new RaceCar('engine', 'seats', 'engine_size', 'top_speed', 'car_doors', 'car_wheel_size', 'tire_size', 'fuel_mileage', 'drive_train', 400.4);

$goCart = new GoCart('engine', 'seats', 'engine_size', 'top_speed', 'car_doors', 'car_wheel_size', 'tire_size', 'fuel_mileage', 'drive_train', 400.4);

print_r($vehicle);
print_r($raceCar);
print_r($goCart);

print 'foobar';
