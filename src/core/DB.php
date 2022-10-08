<?php

namespace src\core;

use PDO;
use PDOException;

class DB
{
    private string $serverName = "localhost";
    private string $userName = "root";
    private string $password = "";
    private string $dbname = "blog";

    public function __construct()
    {
        try {
            $connect = new PDO("mysql:host=$this->serverName;dbname=$this->dbname", $this->userName, $this->password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit();
        }

    }

    public static function all($table_name)
    {

    }

    public function connection()
    {

    }
}