<?php
require_once __DIR__ . '/../config/dbConstants.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\WebApplication;

session_start();

$app = new WebApplication();
$app->run();
