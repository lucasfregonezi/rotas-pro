<?php

namespace app\library;

use app\database\models\User;
use stdClass;

class Auth
{
    public static function loginAs(User $user)
    {
        if(!isset($_SESSION['auth'])) {
            $stdclass = new stdClass();
            $stdclass->id = $user->id;
            $stdclass->firstName = $user->firstName;
            $stdclass->lastName = $user->lastName;
            $stdclass->fullName = $user->firstName . ' ' . $user->lastName;
            $_SESSION['auth'] = $stdclass;
        }
    }

    public static function auth()
    {
        return $_SESSION['auth'] ?? null;
    }

    public static function logout()
    {
        if(isset($_SESSION['auth'])) {
            unset($_SESSION['auth']);
        }
    }
}
