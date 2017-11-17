<?php

require 'class/Autoloader.php';
Autoloader::register();

$marisson = new Pokemon;
$grenousse = new Pokemon;
$feunnec = new Pokemon;

$marisson->estMort(0);
$grenousse->estMort(0);
$feunnec->estMort(47);

