<?php

require_once "data/Person.php";

$gusti = new Person("Gusti", "Bogor");
$gusti->name = "Gusti";
$gusti->sayHello("Kiana");

$kiana = new Person("Kiana", "Depok");
$kiana->name = "kiana";
$kiana->sayHello(null);

$gusti->info();
$kiana->info();