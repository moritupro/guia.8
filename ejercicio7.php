<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir a Mayúsculas</title>
</head>
<body>
    <h1>Ejemplo de uso de strtoupper()</h1>

    <?php
    $cadena = "hola mundo"; // Cadena original
    $cadena_mayusculas = strtoupper($cadena); // Convertir a mayúsculas
    ?>

    <p>Cadena original: <?php echo $cadena; ?></p>
    <p>Cadena en mayúsculas: <?php echo $cadena_mayusculas; ?></p>
</body>
</html>
