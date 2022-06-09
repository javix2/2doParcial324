<html>
<link rel="stylesheet" href="CSS/estilos.css">
<h4 class="form__titulo">Presentación de documentos</h4>
<input type="hidden" name="id" value=""/> <br>
<div class="contenedor-inputs">
<div>
<label>Nombre </label><?php echo $nombre;?> <br>
<label>Cedula identidad </label><?php echo $ci;?><br>
<label>Frente:</label> <?php echo $frente;?><br>
<!--label>Nro Tramite:</label><--?php echo $numerotramite;?--><br>
</div>
</div>
<div class="contenedor-inputs3">
<div>
<input type="datetime" name="fechainicio"  value="<?php echo date("Y-m-d");
?>" class="input-45"><br>
<input type="time" name="horainicio"  value="<?php echo date("H:i:s");
?>" class="input-45"><br>
</div>
<div>
<input type="datetime" name="fechafin"  value="<?php echo date("Y-m-d");
?>" class="input-45"/><br>
<input type="time" name="horafin"  value="<?php echo date("H:i:s");
?>" class="input-45"/><br>
</div>
</div>
</html>