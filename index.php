<?php
require_once "./vendor/autoload.php";

use Ifba\Controller\ErroController;
use Ifba\Controller\IndexController;




$url = $_GET["url"] ?? "/";



switch($url){
    case "/":
      $controller = new IndexController();
      $controller->index();
    break;
    default:
      $controller = new ErroController();
      $controller->erro404();
    
}