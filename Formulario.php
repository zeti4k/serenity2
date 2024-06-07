<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="EstiloFormulario.css">
    <title>Document</title>
</head>
<body>





  <div class="container pt-5"> <!-- Añade 'pt-5' para agregar relleno en la parte superior -->
    <div class="row align-items-center">
        <!-- Columna de la imagen del logo -->
        <div class="col-md-6 d-flex justify-content-center">
            <img src="serenity.jpg" alt="Logo" class="img-fluid">
        </div>
        <!-- Columna del formulario de registro -->
        <div class="col-md-6">
          <form  name = "form" action="insertar_paciente.php" method="POST">
    
            <h4> Formulario de regristro </h4>
            <br>
            <input class="controles" type="text" name="Nombres" placeholder="ingrese sus nombres"> 
            <br> 
          <input class="controles" type="text" name="Apellidos" placeholder="ingrese sus apellidos"> 
          <br> 
          
          <input class="controles" type="text" name="Telefono"  placeholder="ingrese su numero telefonico">

          <input class="controles" type="text" name="Correo"  placeholder="ingrese su correo electronico">
            <br>  <br>
            <center>
            <button type="submit"  value= "registrar" class="btn-success">registrar</button>
          </center>
            <br> <br> 
            <p><a href="index.php"  class="btn-return">Regresar al inicio</a></p> 
            </form>
                <!-- Aquí va tu formulario de registro -->

                <br> <br> <br>
            
        </div>
    </div>
</div>

    
   
</body>
</html>