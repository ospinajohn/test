<?php

class Database {

    private $host = "localhost";
    private $dbName = "crud";
    private $user = "root";
    private $password = "";

    public function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        try {
            $pdo = new PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit();
        }
    }
}



?>