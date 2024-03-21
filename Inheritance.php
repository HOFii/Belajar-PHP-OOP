<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Elaina";
$manager->sayHello("Kiana");

$vp = new VicePresident();
$vp->name = "Kiana";
$vp->sayHello("Elaina");
