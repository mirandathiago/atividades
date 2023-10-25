<?php

require_once "./vendor/autoload.php";


$url = $_GET["url"] ?? "/";


switch($url){
    case "/":
        echo "Inicial";
    break;
    default:
        echo "Página Não Encontrada";
    
}