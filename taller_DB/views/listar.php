<?php
require_once "../db/conexion.php";

$query = $conexion->query("SELECT * FROM personas");
$personas = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h2>Listado de Personas</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Edad</th>
            <th>¿Mayor de edad?</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($personas as $persona): ?>
        <tr>
            <td><?= htmlspecialchars($persona["nombre"]) ?></td>
            <td><?= htmlspecialchars($persona["email"]) ?></td>
            <td><?= $persona["edad"] ?></td>
            <td><?= ($persona["edad"] >= 18) ? "Sí" : "No" ?></td>
            <td>
                <a href="modificar.php?id=<?= $persona['id'] ?>">Editar</a>
                <a href="../controller/eliminar.php?id=<?= $persona['id'] ?>" onclick="return confirm('¿Estás seguro?');">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="crear.php">Agregar Nueva Persona</a>
    <br>
    <a href="../index.php">Volver al Inicio</a>
</body>
</html>
