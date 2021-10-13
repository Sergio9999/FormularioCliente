<?php
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];
$conficlave = $_POST['conficlave'];


$nombre1 =$_POST['nombre1'];
$apellido =$_POST['apellido'];
$email =$_POST['email'];

?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    
    <form action="php3.php" method="POST">
     

      
    Intereses, elige uno o varios:<br>

    <input type="checkbox" name="coches" value="coches"> Coches<br>
    <input type="checkbox" name="deportes" value="deportes"> Deportes<br>
    <input type="checkbox" name="videojuegos" value="videojuegos"> Videojuegos<br>
    <input type="checkbox" name="comer" value="comer"> Comer<br>

 
     

       <input hidden type="text" name="nombre" size="20" id="nombre" value="<?php echo $nombre?>">
       <input hidden type="password" name="clave" size="12" id="clave" value="<?php echo $clave?>">
       <input hidden type="password" name="conficlave" size="12" id="conficlave" value="<?php echo $conficlave?>">
       
       
       <input hidden type="text" name="nombre1" size="20" id="nombre1" value="<?php echo $nombre1?>">>
       <input hidden type="password" name="apellido" size="12" id="apellido" value="<?php echo $apellido?>">>
       <input hidden type="password" name="email" size="12" id="email" value="<?php echo $email?>">>
       
       
      
       <input type="submit" value="Enviar">
    </form>
        
</body>
</html>
