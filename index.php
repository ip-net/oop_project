<?php


//namespace oop_project;
use oop_project\Car;
use oop_project\Truck;
use oop_project\AutomaticGear;
use oop_project\MechanicGear;
use oop_project\DieselEngine;
use oop_project\GasolineEngine;
use oop_project\Vehicle;
require 'vendor/autoload.php';


//$t = new \oop_project\Car('car', 'red');
$car1 = new Car('Hyindai Tucson', 'red', 180);
$autoGear1 = new AutomaticGear();
$eng1 = new DieselEngine();

$veh = new Vehicle($car1, $autoGear1, $eng1);

$veh->modelInfo();
$veh->move();
$veh->stop();

echo "\n";
$car2 = new Truck('MAN', 'black', 140);
$autoGear2 = new MechanicGear();
$eng2 = new DieselEngine();

$veh2 = new Vehicle($car2, $autoGear2, $eng2);
$veh2->modelInfo();
$veh2->move();
$veh2->stop();
