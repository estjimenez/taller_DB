<?php
include 'db/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $edad = $_POST["edad"];

    $query = $conexion->prepare("UPDATE personas SET nombre = ?, email = ?, edad = ? WHERE id = ?");
    $query->execute([$nombre, $email, $edad, $id]);

    header("Location: views/listar.php");
    exit;
}
?>
