<?php

$matches = [];
$result = preg_match_all("/gus|alif|akb/i", "Gusti Alifiraqsha Akbar", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Gusti Alifiraqsha Akbar,Siswa,Zaman-Now");

var_dump($result);