<?php
include_once "Hero.php";
include_once "Heel.php";
include_once "RedBeanPasteBreadMan.php";
include_once "PoisonedMan.php";

$an = new RedBeanPasteBreadMan();
$baikin = new PoisonedMan();

$an->hello();
$baikin->catcall();

$an->finish();
$baikin->finish();

?>
