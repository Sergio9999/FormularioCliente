<?php

/*index.html*/
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];
$conficlave = $_POST['conficlave'];


/*php1.php*/
$nombre1 =$_POST['nombre1'];
$apellido =$_POST['apellido'];
$email =$_POST['email'];


/*php2.php*/

$comer= $_POST['comer'];





echo 'Nombre: ' . $_POST[nombre] . "<br>";
echo 'La clave es: '. $_POST[clave] . "<br>";
echo 'La confirmacion de la clave es: '. $_POST[conficlave]. "<br>";
echo 'Nombre: '. $_POST[nombre1]. "<br>";
echo 'Clave: '. $_POST[apellido]. "<br>";
echo 'Email: '. $_POST[email]. "<br>";

echo $_POST[comer]. "<br>";
echo $_POST[videojuegos]. "<br>";
echo $_POST[deportes]. "<br>";
echo $_POST[coches]. "<br>";
?>
