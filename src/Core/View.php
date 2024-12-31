<?php
namespace App\Core;

class View {
    public static function render($view, $args = []) {
        extract($args, EXTR_SKIP);
        
        $file = __DIR__ . "/../Views/$view.php";
        
        if (file_exists($file)) {
            require $file;
        } else {
            throw new \Exception("View file not found: " . $file);
        }
    }
}
?>