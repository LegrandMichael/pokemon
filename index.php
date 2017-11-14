<?php

require_once('Pokemon.php');

$marisson = new Pokemon;
$grenousse = new Pokemon;
$feunnec = new Pokemon;

$marisson->estMort(0,true);
$grenousse->estMort(0,true);
$feunnec->estMort(47,false);
?>