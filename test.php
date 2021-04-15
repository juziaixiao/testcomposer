<?php
require_once __DIR__ . '/vendor/autoload.php';

use Two\Tservice;

$obj=new Tservice();

$time=$obj->getDate();
echo $time;
