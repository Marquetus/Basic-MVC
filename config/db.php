<?php


class database
{

    public static function connect()
    {     
        $connectionString = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";.DB_CHARSET."; 
        try {
            $connect = new PDO($connectionString, DB_USER, DB_PASSWORD);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $connect = 'Error de conexión';
            echo "ERROR: " . $e->getMessage();
        }
        return $connect;
    }
}
