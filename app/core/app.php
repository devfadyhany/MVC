<?php

namespace MVC\core;

class app
{
    private $controller = 'home';
    private $method = 'index';
    private $params = [];

    public function __construct()
    {
        $this->url();
        $this->render();
    }

    private function url()
    {
        if (!empty($_SERVER['QUERY_STRING'])) {
            $url = explode("/", $_SERVER['QUERY_STRING']);

            //***************** This Controller **********************
            $this->controller = isset($url[0]) ? $url[0] . "controller" : "homecontroller";

            //***************** This Method **********************
            $this->method = isset($url[1]) ? $url[1] : "index";
            unset($url[0], $url[1]);

            //***************** This Params **********************
            $this->params = array_values($url);

        } else {
            $this->controller = "homecontroller";
            $this->method = "index";
        }
    }

    private function render()
    {
        $controller = "MVC\controllers\\" . $this->controller;

        if (class_exists($controller)) {
            $controller = new $controller; // you should create an object of the controller to start using it

            if (method_exists($controller, $this->method)) {
                call_user_func_array([$controller, $this->method], $this->params);

            } else {
                echo ' method not found';

            }
        } else {
            echo 'class doesn\'t exist';
        }
    }
}