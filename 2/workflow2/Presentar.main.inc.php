<?php
session_start();
echo "".$_SESSION["id"]; 
echo "<br>";

$sql="select * from frente.persona where id=".$_SESSION["id"];
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$nombre=$fila["nombre"];
$ci=$fila["ci"];
$frente=$fila["frente"];

//$sql2="select numerotramite from flujoprocesoseguimiento where usuario=".$nombre;
//$resultado2=mysqli_query($con, $sql2);
//$fila=mysqli_fetch_array($resultado2);
//$numerotramite=$fila["numerotramite"];

?>