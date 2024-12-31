<?php
namespace App\Core;

use PDO;
use PDOException;

class Database {
    private static $instance = null;
    private $connection;

    public function __construct($host, $username, $password, $dbname) {
        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $err) {
            die("Database connection error: " . $err->getMessage());
        }
    }
    public static function get_instance($host, $username, $password, $dbname) {
        if (self::$instance == null) {
            self::$instance = new Database($host, $username, $password, $dbname);
        }
        return self::$instance->connection;
    }
}
?>