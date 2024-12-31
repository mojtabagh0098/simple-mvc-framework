<?php
namespace App\Core;

use App\Core\Database;

abstract class Model {
    protected $table;

    public function __construct() {
        if ($this->table == null) {
            $this->table = strtolower((new \ReflectionClass($this))->getShortName() . 's');
        }
    }
    public function all() {
        $pdo = Database::get_instance("localhost", "root", "", "mvc");
        $stmt = $pdo->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll();  
    }
}
?>