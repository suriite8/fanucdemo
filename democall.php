<?php
// Example usage in your PHP project

require 'vendor/autoload.php';

//use CentralStage\Fanuc\FanucService;
use CentralStage\Fanuc\FanucDemo;

$object = new FanucDemo();
$result = $object->add(2, 3);

echo "The result is: " . $result;
