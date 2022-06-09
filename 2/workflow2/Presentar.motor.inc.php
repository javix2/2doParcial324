<?php
session_start();

$ci=$_GET["ci"];
$frente=$_GET["frente"];

$sql="update frente.persona set ";
$sql.="frente='$frente', ci='$ci' ";
$sql.="where id=".$_SESSION["id"];

$nombre=$_GET["nombre"];
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
//$numerotramite=$_GET["numerotramite"];
$fechainicio=$_GET["fechainicio"];
$horainicio=$_GET["horainicio"];
$fechafin=$_GET["fechafin"];
$horafin=$_GET["horafin"];
$sql = "INSERT INTO flujoprocesoseguimiento (flujo, proceso,fechainicio,usuario,horainicio,fechafin,horafin) VALUES ('$flujo', '$proceso','$fechainicio','$nombre','$horainicio','$fechafin','$horafin')";

$resultado=mysqli_query($con, $sql);

?>