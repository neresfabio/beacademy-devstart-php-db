<?php

declare(strict_types = 1);

namespace App\Connection;

abstract class Connection
{
    public static function getConnction():\PDO
    {
        $database = 'db_store';
        $username = '';
        $password = 'livre';

        return new \PDO('mysql:host=localhost;dbname='.$database,$username,$password);
    }
}

//Connection::getConnction();