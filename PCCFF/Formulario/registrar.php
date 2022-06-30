<?php 

include("con_db.php");

if (isset($_POST['Enviar'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Apellido']) >= 1 && strlen($_POST['Telefono']) >= 1) {
	    $name = trim($_POST['Nombre']);
	    $email = trim($_POST['Correo']);
		$Apellido = trim($_POST['Apellido']);
		$telefono = trim($_POST['Telefono']);
	    $consulta = "INSERT INTO `usuario_sitio_web`(`id_usuario_web`, `nombre_usuario`, `apellido_usuario`, `telefono_usuario`, `correo`) VALUES ('0','$name','$Apellido','$telefono','$email')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>