<?php
	$title = "Editar pais";
	$h2 = $title;
	include("../includes/header.php");
	include("../bd/conexioni.php");
?>
	<p class="text-left">
		<button class="btn btn-info" onclick="history.back()"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;&nbsp;Ir atras</button>
	</p>
	<?php
		if (strlen($_POST["nombre"]) > 0 && strlen($_POST["pais"]) > 0 && is_numeric($_POST["pais"])) {
			$sql = "update pais set nombre = '" . $_POST["nombre"] . "' where pais = ".$_POST["pais"];
			$result = mysql_query($sql);
	?>
			<div class="alert alert-success" role="alert">
	    		<strong>Listo!</strong> Se ha <strong>modificado</strong> el registro de forma correcta.
	    	</div>
	<?php
		} else {

	?>
			<div class="alert alert-danger" role="alert">
	      		<strong>Duh!</strong> Ha ocurrido un error, intentelo mas tarde.
	    	</div>
	<?php			
		}
	?>
<?php
	include("../bd/conexionf.php");
	include("../includes/footer.php");
?>