<?php
namespace App\Database;

use PDO;

class Conexion {
    public static function conectar() {
        return new PDO("mysql:host=localhost;dbname=fastfood", "root", "");
    }
}

