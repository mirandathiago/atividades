<?php
require_once "./vendor/autoload.php";
require_once "./config.php";
require_once "./app/Core/Helpers.php";


use Ifba\Core\Router;

$url = $_GET["url"] ?? "/";


require_once "./app/routes.php";
Router::run($url);




