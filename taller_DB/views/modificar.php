<?php
require_once "../db/conexion.php";

if (!isset($_GET["id"])) {
    header("Location: listar.php");
    exit();
}

$id = $_GET["id"];
$stmt = $conexion->prepare("SELECT * FROM personas WHERE id = ?");
$stmt->execute([$id]);
$persona = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$persona) {
    header("Location: listar.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Persona</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h2>Modificar Persona</h2>
    <form action="../controller/procesar_modificar.php" method="POST">
        <input type="hidden" name="id" value="<?= $persona['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($persona['nombre']) ?>" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($persona['email']) ?>" required>
        <br>
        <label>Edad:</label>
        <input type="number" name="edad" value="<?= $persona['edad'] ?>" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <br>
    <a href="listar.php">Volver</a>
</body>
</html>
