<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Kiana");
$person->hello("Elaina");

$person->name = "Gusti";
var_dump($person);

$person->run();