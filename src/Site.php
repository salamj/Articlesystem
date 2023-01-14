<?php

namespace Jsalam\Articlesystem;

class Site{

    public static function run()
    {
        $router = new \Bramus\Router\Router();

        $router->get("/home", "\Jsalam\Articlesystem\Home@index");
        $router->get("/article", "\Jsalam\Articlesystem\Home@article");

        $router->run();
    }
}