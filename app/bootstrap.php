<?php 


# requiring composer dependencies
require_once '../vendor/autoload.php';

$container = new \Slim\Container;

$app = new \App\App($container);

require_once 'routes.php';