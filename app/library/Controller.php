<?php

namespace app\library;

use Exception;
use app\library\Route;
use app\library\Middleware;

class Controller
{
    private function controllerPath($route, $controller)
    {
        return ($route->getRouteOptionsInstance() && $route->getRouteOptionsInstance()->optionsExist('controller')) ?
            "app\\controllers\\" . $route->getRouteOptionsInstance()->execution('controller') . '\\' . $controller :
            "app\\controllers\\" . $controller;
    }

    public function call(Route $route)
    {
        $controller = $route->controller;
        if(!str_contains($controller, ':')) {
            throw new Exception("Semi colon need to controller {$controller} in route");
        }
        [$controller, $action] = explode(':', $controller);
        $controllerInstance = $this->controllerPath($route, $controller);

        if(!class_exists($controllerInstance)) {
            throw new Exception("Controller {$controller} does not exist");
        }
        $controller = new $controllerInstance();

        if (!method_exists($controller, $action)) {
            throw new Exception("Action {$action} does not exist");
        }

        //middlewares
        if($route->getRouteOptionsInstance()?->optionsExist('middlewares')) {
            (new Middleware($route->getRouteOptionsInstance()->execution('middlewares')))->execute();
        }

        call_user_func_array([$controller, $action], $route->getRouteWildcardInstance()?->getParams() ?? []);
    }

}
