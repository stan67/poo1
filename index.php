<?php

// Connexions
require_once 'Bicycle.php';
require_once 'Car.php';


// Car
$mustang = new Car("black", 4, "essence");
$mustang->setEnergyLevel(20);
$mustang->setCurrentSpeed(12);
echo "<br>" .$mustang->start() .'<br> Vitesse de la voiture : ' . $mustang->getCurrentSpeed() . ' km/h' . '<br>';
echo $mustang->brake();
echo '<br> Vitesse de la voiture : ' . $mustang->getCurrentSpeed() . ' km/h' . '<br>';
echo $mustang->brake();
echo "<br/>";


// Bicycle
$bike = new Bicycle("red", 10);
echo "<br/>" .$bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();







