
<?php

$usuario = "root";
$password = "PucZetin#01";  
$servidor = "localhost";
$basededatos ="serenity1"; 
 
$conn = mysqli_connect($servidor, $usuario, $password) or die ("Error con el servidor de la Base de datos");
$db = mysqli_select_db($conn, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


$nombre=$_POST['Nombres'];
$apellido=$_POST['Apellidos'];
$telefono=$_POST['Telefono'];
$correo = $_POST ['Correo'];

$sql="INSERT INTO paciente (nombres, apellidos,  telefono, correo) 
VALUES('$nombre', '$apellido',  '$telefono', '$correo')";



$consulta= mysqli_query($conn, $sql);

if(!$consulta)
{
    echo'<script> alert("Error al insertar datos"); </script>';
 
}

else{
    header("Location: index.php");
 
}
mysqli_close($conexion);


   ?>
