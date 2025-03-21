<?php
include 'db/conexion.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = $conexion->prepare("DELETE FROM personas WHERE id = ?");
    $query->execute([$id]);
}

header("Location: views/listar.php");
exit;
?>
