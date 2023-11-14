<?php
namespace Controllers;

use MVC\Router;

class LoginController{
    public static function login(Router $router){
        $router->render('auth/login', [
            'title' => 'Login',
            'message' => 'Te Damos La Bienvenida'
        ]);
    }
    public static function join(Router $router){
        $router->render('auth/join', [
            'title' => 'Unete a MyUnsplash',
            'message' => 'Ya tienes una cuenta <a href="/login"> Inicia Sesion</a>'
        ]);
    }
}