<?php


function view(string $view,array $dados = []){
    extract($dados);
    require CONFIG['view']."/{$view}.view.php";
}

function css(string $css)
{
    return urlBase("/public/css/{$css}.css");

}

function urlBase($url){
    return CONFIG['url_base'].$url;
}
