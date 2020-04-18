<?php

use Kaelynlayne\IPInfo\IPInfo;

require __DIR__ . "/../vendor/autoload.php";
//$ipAddress = $_SERVER['REMOTE_ADDR'];

$ipAddress = '75.45.54.53';

$ipInfo = new IPInfo();
$details = $ipInfo->fetchInfo($ipAddress);
print_r($details);