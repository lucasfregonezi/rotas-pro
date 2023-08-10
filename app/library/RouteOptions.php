<?php

namespace app\library;

class RouteOptions
{
    public function __construct(private readonly array $routeOptions)
    {

    }

    public function optionsExist(string $index)
    {
        return !empty($this->routeOptions) && isset($this->routeOptions[$index]);
    }

    public function execution(string $index)
    {
        return $this->routeOptions[$index];
    }
}
