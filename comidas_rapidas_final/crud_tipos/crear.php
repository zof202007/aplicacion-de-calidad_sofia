<?php

use App\Database\Conexion;

$pdo = Conexion::conectar();

if ($_POST) {
    $nombre = $_POST["nombre"];

    if (!empty($nombre)) {
        $sql = $pdo->prepare("INSERT INTO tipos (nombre_tipo) VALUES (?)");
        $sql->execute([$nombre]);
        header("Location: index.php");
        exit();
    }
}
?>

<link rel="stylesheet" href="/comidas_rapidas_final/css/tipos.css">

<div class="container">

<h2>Agregar Tipo</h2>

<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre del tipo" required>
    <br><br>
    <button type="submit">Guardar</button>
</form>

<br>
<a href="index.php">⬅ Volver</a>

</div>

