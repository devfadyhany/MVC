<?php

namespace MVC\models;

use MVC\core\model;
use PDO;

class user extends model
{
    public function GetAllUsers()
    {
        $data = model::db()->run("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function GetUser($email, $password)
    {
        $data = model::db()->run("SELECT * FROM user WHERE `email` = '$email' && `password` = '$password'")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function InsertUser($username, $email, $password){
        model::db()->run("INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$username','$email','$password')");
    }
}