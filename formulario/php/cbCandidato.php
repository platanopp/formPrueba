<?php

require 'conexion.php';

$queryCandidato = "SELECT id_candidato, nombre_candidato 
                   FROM CANDIDATO ORDER BY nombre_candidato asc";
//Se utiliza la función pg_query para realizar la conexión y la query
$resultadoCandidato = pg_query($conexiondb, $queryCandidato);


echo '<option value="0">SELECCIONE UN CANDIDATO </option>';

while ( $filaCa=pg_fetch_array($resultadoCandidato))
{
	echo '<option value="' . $filaCa['id_candidato']. '">' . $filaCa['nombre_candidato'] . '</option>' . "\n";
}


?>