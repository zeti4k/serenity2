<?php

$usuario = "root";
$password = "PucZetin#01";  
$servidor = "localhost";
$basededatos ="serenity1"; 
  
$conn = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 

$db = mysqli_select_db($conn, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


mysqli_close($conn);


?>