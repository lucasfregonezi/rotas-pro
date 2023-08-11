<?php

namespace app\controllers\admin;

class UserController
{
    public function index($user, $name)
    {
        var_dump($user, $name);
    }

    public function show($userName)
    {
        var_dump('Metodo show User');
    }

}
