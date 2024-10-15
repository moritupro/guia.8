<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reemplazar Palabra en una Cadena</title>
</head>
<body>
    <h1>Ejemplo de uso de str_replace()</h1>

    <?php
    $cadena = "Hola mundo, este es un mundo maravilloso."; // Cadena original
    $palabra_a_reemplazar = "mundo"; // Palabra a reemplazar
    $nueva_palabra = "universo"; // Nueva palabra
    $cadena_modificada = str_replace($palabra_a_reemplazar, $nueva_palabra, $cadena); // Reemplazar la palabra
    ?>

    <p>Cadena original: <?php echo $cadena; ?></p>
    <p>Cadena modificada: <?php echo $cadena_modificada; ?></p>
</body>
</html>
