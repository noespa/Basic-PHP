<?php

namespace Core\Middleware;

class Quest {
    public function handle() {
        if ($_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
    }    
}