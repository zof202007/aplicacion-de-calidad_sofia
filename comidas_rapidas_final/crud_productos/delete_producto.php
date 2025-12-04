<?php

use App\Database\Conexion;

$pdo = Conexion::conectar();

$id = $_GET["id"];

$pdo->prepare("DELETE FROM productos WHERE id=?")->execute([$id]);

header("Location: admin_productos.php");


