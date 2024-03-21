<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Gusti");
var_dump($company);

$company->programmer = new BackendProgrammer("Gusti");
var_dump($company);

$company->programmer = new FrontendProgrammer("Gusti");
var_dump($company);

sayHelloProgrammer(new Programmer("Gusti"));
sayHelloProgrammer(new BackendProgrammer("Gusti"));
sayHelloProgrammer(new FrontendProgrammer("Gusti"));