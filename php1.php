<?php
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];
$conficlave = $_POST['conficlave'];
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="php2.php" method="POST">
        Nombre:     
       <input type="text" name="nombre1" size="20" id="nombre">
       <br>
        Apellido
       <input type="password" name="apellido" size="12" id="apellido">
       <br>
       Email:
       <input type="password" name="email" size="12" id="email">
       <br>
       
       
       <input hidden type="text" name="nombre" size="20" id="nombre" value="<?php echo $nombre?>">
       <input hidden type="password" name="clave" size="12" id="clave" value="<?php echo $clave?>">
       <input hidden type="password" name="conficlave" size="12" id="conficlave" value="<?php echo $conficlave?>">
       
       
      
       <input type="submit" value="Enviar">
    </form>
        
</body>
</html>
