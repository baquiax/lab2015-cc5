<?php
	$title = "Agregar pais";
	$h2 = $title;
	include("../includes/header.php");
?>	
	<form class="form-horizontal" name="datos" method="POST" action="insert-pais.php">
		<div class="form-group">
    		<label for="nombre" class="col-sm-2 control-label">Nombre del pais</label>
    		<div class="col-sm-10">
      			<input type="text" class="form-control" id="nombre" placeholder="Guatemala, Inglaterra..." name="nombre">
    		</div>
  		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
		  		<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</div>
	</form>
<?php
	include("../includes/footer.php");
?>