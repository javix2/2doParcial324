<html>
<link rel="stylesheet" href="CSS/estilos.css">
<h4 class="form__titulo">Recepcionado</h4>
<div class="contenedor-inputs">
<div>
<input type="hidden" name="id" value=""/> <br>
<label>Nombre: </label>
<input type="text" name="nombre" value="<?php echo $nombre;?>"/> <br>
<label>Numero Tramite:</label>
<input type="text" name="numerotramite" value=""/> <br>
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