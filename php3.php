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





echo 'Nombre: ' . $_POST[nombre];
echo 'La clave es: '. $_POST[clave];
echo 'La confirmacion de la clave es: '. $_POST[conficlave];
echo 'Nombre: '. $_POST[nombre1];
echo 'Clave: '. $_POST[apellido];
echo 'Email: '. $_POST[email];

echo $_POST[comer];
echo $_POST[videojuegos];
echo $_POST[deportes];
echo $_POST[coches];

 
 


/*foreach($_POST['checkbox'] as $seleccionado){
    echo $seleccionado;
}*/



?>
