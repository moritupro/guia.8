<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir a Minúsculas</title>
</head>
<body>
    <h1>Ejemplo de uso de strtolower()</h1>

    <?php
    $cadena = "HOLA MUNDO"; // Cadena original
    $cadena_minusculas = strtolower($cadena); // Convertir a minúsculas
    ?>

    <p>Cadena original: <?php echo $cadena; ?></p>
    <p>Cadena en minúsculas: <?php echo $cadena_minusculas; ?></p>
</body>
</html>
