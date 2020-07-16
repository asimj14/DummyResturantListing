<?php

class Dbh{

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "restaurants_db";

    protected function connect(){
        $dsn = 'mysql:host = ' . $this->host . ';dbname=' . $this->dbName;

        $pdo = new PDO($dsn, $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); //I used FETCH_ASSOC here as it will make it hastle free for future use.
        return $pdo;


    }



}

?>