<?php
//session_start();

//$ci=$_GET["ci"];
//$frente=$_GET["frente"];
$nombre=$_GET["nombre"];
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$numerotramite=$_GET["numerotramite"];
$fechainicio=$_GET["fechainicio"];
$horainicio=$_GET["horainicio"];
$fechafin=$_GET["fechafin"];
$horafin=$_GET["horafin"];
//$stringfecha = $fechafin->format('Y-m-d');
//$stringhora = $horafin->format('H:i:s');
//if($stringfecha=='0000-00-00' || $stringhora=='00:00:00'){
//	$fechafin=NULL;
//	$horafin=NULL;	
//}
//$usuario=$_GET["nombre"];

//$sql="insert into flujoprocesoseguimiento";
//$sql.="values flujo='$flujo', proceso='$proceso', NumeroTramite='$NumeroTramite'"; //usuario='$nombre' ";
//$sql.="where id=".$_SESSION["id"];
$sql = "INSERT INTO flujoprocesoseguimiento (flujo, proceso, numerotramite,fechainicio,usuario,horainicio,fechafin,horafin) VALUES ('$flujo', '$proceso', '$numerotramite','$fechainicio','$nombre','$horainicio','$fechafin','$horafin')";
$resultado=mysqli_query($con, $sql);
?>