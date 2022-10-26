<?php
$conexion= mysqli_connect("localhost", "root", "", "r_user");

if(isset($_POST['registrar'])){

    if(strlen($_POST['nombre']) >=1 && strlen($_POST['correo'])  >=1 && strlen($_POST['telefono'])  >=1 
    && strlen($_POST['password'])  >=1 ){

    $nombre = trim($_POST['nombre']);
    $password = trim($_POST['password']);

    $consulta= "INSERT INTO user (nombre, password)
    VALUES ('$nombre','$password' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: ../views/user.php');
  }
}









?>