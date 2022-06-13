<?php 
require 'conexion.php';

$idRegion = $_POST['id_region'];

$queryComuna = "SELECT * FROM COMUNA
WHERE id_region= '$idRegion'";
$resultadoComuna = pg_query($conexiondb, $queryComuna);

echo '<option value="0">SELECCIONE LA COMUNA </option>';

while ( $filaC=pg_fetch_array($resultadoComuna) )
{
	echo '<option value="' . $filaC['id_comuna']. '">' . $filaC['nombre_comuna'] . '</option>' . "\n";
}
