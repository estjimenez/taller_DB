<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Persona</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <h2>Agregar Persona</h2>
    <form action="../controller/procesar_crear.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" required>
        <br>
        <label>Edad:</label>
        <input type="number" name="edad" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="listar.php">Volver</a>
</body>
</html>
