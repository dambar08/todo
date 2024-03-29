<?php
class Route
{
    protected $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        throw new Exception('No route defined');
    }


    public static function get()
    { }

    public static function post()
    { }
}
