<?php

namespace MVC;

class Router {
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn){
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn){
        $this->postRoutes[$url] = $fn;
    }
    public function validateRoutes(){
        $ocurrentURL = strtok($_SERVER['REQUEST_URI'], "?") ?? "/";
        $method = $_SERVER['REQUEST_METHOD'];
        if($method === "GET"){
            $fn = $this->getRoutes[$ocurrentURL] ?? null;
        }else{
            $fn = $this->postRoutes[$ocurrentURL] ?? null;
        }

        if ($fn){
            call_user_func($fn, $this);
        }else{
            echo "ERROR 404.";
        }
    }

    public function render($views, $data = []){
        foreach($data as $key => $value){
            $$key = $value;
        }
        ob_start(); // ALMACENAMIENTO EM MEMORIA
        include_once __DIR__ ."/views/$views.php";
        $content = ob_get_clean();
        include_once __DIR__ ."/views/layout.php";
    }
}