<?php
namespace App\Controller;

use App\Models\User;
use App\Core\View;

class HomeController {
    public function index() {
        $users = new User();
        // print_r($users->all());
        // View::render("home", [
        //     "users" => $users->all()
        // ]);
        View::render("home");
    }
}