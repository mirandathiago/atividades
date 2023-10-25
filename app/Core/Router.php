<?php

namespace Ifba\Core;

class Router{

    private static $routes = [];
   

    public static function add(string $url, string $controller, string $metodo)
    {
        static::$routes[$url] = [$controller,$metodo];
    }

   
    public static function run(string $url)
    {
        if( key_exists($url,static::$routes) ){
            [$controller,$metodo] = static::$routes[$url];
            static::executeController($controller,$metodo);
        
        }else{
            http_response_code(404);
            $controller = "ErroController";
            $metodo = "erro404";
            static::executeController($controller,$metodo);
        }
        
    }

    protected static function executeController(string $controller,string $metodo)
    {
        $controller =  CONFIG['controller'].$controller;
        $c = new $controller();
        call_user_func_array([$c,$metodo],[]);
    }


}