<?php
	$title = "Creacion de pais";
	$h2 = $title;
	include("../includes/header.php");
	include("../bd/conexioni.php");
?>
	<p class="text-left">
		<button class="btn btn-info" onclick="history.back()"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;&nbsp;Ir atras</button>
	</p>
	<?php
		if (strlen($_POST["nombre"]) > 0) {
			$sql = "insert into pais (nombre) values('" . $_POST["nombre"] . "');";
			$result - mysql_query($sql);
	?>
		<div class="alert alert-success" role="alert">
    		<strong>Listo!</strong> Se ha almacenado el registro de forma correcta.
    	</div>
	<?php
		} else {

	?>
		<div class="alert alert-danger" role="alert">
      		<strong>Duh!</strong> Usted debe especificar un valor aceptable.
    	</div>
	<?php			
		}
	?>
<?php
	include("../bd/conexionf.php");
	include("../includes/footer.php");
?>