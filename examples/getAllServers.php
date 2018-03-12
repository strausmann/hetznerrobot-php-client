<?php

use ISPServerfarm\APIClients\HetznerRobot\RobotClient;
use ISPServerfarm\APIClients\HetznerRobot\RobotClientException;
use ISPServerfarm\APIClients\HetznerRobot\RobotRestClient;

require_once(__DIR__ . "/vendor/autoload.php");

$robot = new RobotClient('https://robot-ws.your-server.de', 'USERNAME', 'PASSWORD');
$results = $robot->serverGetAll();

var_dump($results);

try {
    
} catch (Exception $e) {
    echo $e->getMessage();
}