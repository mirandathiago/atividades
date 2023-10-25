<?php
require_once "./vendor/autoload.php";

$config = [];
$config["controller"] = "\\Ifba\\Controller\\";


$url = $_GET["url"] ?? "/";

$rotas = [
    "/" => ["IndexController","index"], 
    "__erro404" => ["ErroController","erro404"]   
];


if( key_exists($url,$rotas) ){
    [$controller,$metodo] = $rotas[$url];
    
    carregarController($controller,$metodo);

}else{
    [$controller,$metodo] = $rotas["__erro404"];
    carregarController($controller,$metodo);
}


function carregarController(string $controller,string $metodo){
    global $config;
    $controller =  $config["controller"].$controller;
    $c = new $controller();
    call_user_func_array([$c,$metodo],[]);
}
