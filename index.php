<?php

// FRONT CONTROLLER

// 1. General settings
ini_set('display_errors',1);
error_reporting(E_ALL);

// 2. System files connection
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/sources/components/Router.php');

// 3. Database connection

// 4. Router call
$router = new Router();
$router->run();