<?php

require 'conexion.php';

$nombre = $_POST['nombre'];
$alias = $_POST['alias'];
$rut = $_POST['rut'];
$email = $_POST['email'];
$region = $_POST['regionVotante'];
$comuna = $_POST['comunaVotante'];
$candidato = $_POST['candidato'];
$opciones=$_POST['opcion'];  

$opc="";  
foreach($opciones as $opc1)  
   {  
      $opc .= $opc1.",";  
   }  

$validarRut_Alias = "SELECT * FROM persona 
                     WHERE rut_persona = '$rut' 
                     OR alias_persona = '$alias'";
$resultadoValidar = pg_query($conexiondb, $validarRut_Alias);
$filasValidar = pg_num_rows($resultadoValidar);

if($filasValidar == 0){
         $queryInsert = "INSERT INTO persona (nombre_completo_persona, 
                        alias_persona, rut_persona,
                        email_persona, id_region, id_comuna,
                        id_candidato, opciones)
                        VALUES ('$nombre','$alias','$rut',
                        '$email','$region','$comuna',
                        '$candidato','$opc')";

         $resultadoInsert = pg_query($conexiondb, $queryInsert);
         echo 1;
}else {
   echo 0;
}
?>