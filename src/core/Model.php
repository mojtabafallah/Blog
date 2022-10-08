<?php
namespace src\core;
abstract class Model
{
    protected static $table_name;

    public static function all()
    {
        DB::all(self::$table_name);
    }

    public static function delete()
    {

    }


    public static function find()
    {

    }

}