<?php
require 'conexion.php';

//Query para traer los datos de la tabla region de la base de datos
$queryRegion = "SELECT id_region, nombre_region FROM REGION ORDER BY id_region asc";
//Se utiliza la función pg_query para realizar la conexión y la query
$resultadoRegion = pg_query($conexiondb, $queryRegion);


echo '<option value="0">SELECCIONE UNA REGIÓN </option>';

while ( $filaR=pg_fetch_array($resultadoRegion))
{
	echo '<option value="' . $filaR['id_region']. '">' . $filaR['nombre_region'] . '</option>' . "\n";
}
