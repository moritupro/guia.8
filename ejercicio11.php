<?php
// Definir las fechas en formato 'YYYY-MM-DD'
$fecha1 = "2024-10-01";
$fecha2 = "2024-10-15";

// Convertir las fechas a timestamps con strtotime()
$timestamp1 = strtotime($fecha1);
$timestamp2 = strtotime($fecha2);

// Calcular la diferencia en segundos entre las dos fechas
$diferenciaSegundos = abs($timestamp2 - $timestamp1);

// Convertir la diferencia de segundos a días (1 día = 86400 segundos)
$diferenciaDias = $diferenciaSegundos / 86400;

echo "La diferencia entre las dos fechas es de $diferenciaDias días.";
?>
