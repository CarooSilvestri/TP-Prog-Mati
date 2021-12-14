<!--
	***Organizador de peliculas***

    Creador: María Carolina Silvestri
    Fecha: 3/3/2018
    Version: 2.0
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Sinicio.css">
	<title>Bienvenido!</title>
	</head>

<body>

<?php
	// conexión
	$enlace = mysqli_connect("localhost", "root", "");
	$db_seleccionada = mysqli_select_db($enlace, "peliculas2");
	
	$datos = mysqli_query($enlace, "SELECT * FROM users");

	if (isset($_POST["log"])) {
		$usuario = $_POST['user'];
		$pass = $_POST['password'];
		if (!empty($usuario) && !empty($pass)) {
			while($row = mysqli_fetch_assoc($datos)){
			  $dbusername = $row["Usuario"];
  			  $dbpassword = $row["Pass"];
			}
			if ($usuario != $dbusername || $pass != $dbpassword){
				echo "<script laguaje='javascript'>alert('Ricky: SACA LA MANO DE AHI CARAJO!');</script>";
			}else{
				header("Location: pelis.php");
			}
		}
	}
?>

<div class="container">
	<div class="row align-items-center">
	   	<div class="col-sm"></div>
    	<div class="col-sm">
    		<form method="POST" action="" id="log">
	  			<div class="form-group">
	    			<label><b>Usuario</b></label>
		    		<input type="user" class="form-control" placeholder="Usuario" name="user"/>
				</div>
  				<div class="form-group">
    				<label><b>Password</b></label>
    				<input type="password" class="form-control" placeholder="Password" name="password"/>
  				</div>
 	 			<center><button type="submit" class="btn btn-primary" name="log">Enviar</button></center>
 	 		</form>
	    </div>
    	<div class="col-sm"></div>
     </div>
</div>


</body>
</html>
