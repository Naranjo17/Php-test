<?php
session_start();
error_reporting(0);
	$varsesion = $_SESSION['nombre'];

	if($varsesion== null || $varsesion= ''){

	    header("Location: ../includes/login.php");
		die();
	}


?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">

    <link rel="stylesheet" href="css/de">
    <title>Usuarios</title>
</head>

				<?php

$conexion=mysqli_connect("localhost","root","","r_user");               
$SQL="SELECT *FROM user ";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>




<h1><?php echo $fila['nombre']; ?></h1>

<div class="reser">
  <h2>total reserves:</h2>
</div>

<h1>My</h1>


<div class="col-xs-12">
    <div class="log_out">
       <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Log Out <i class="fa fa-power-off" aria-hidden="true"></i></a>
		</div>


<?php
}
}else{

    ?>


    
    <?php
    
}

?>


	</body>


</html>