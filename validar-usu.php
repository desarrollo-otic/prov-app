<?php

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "prueba";

// db connection
$link = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($link->connect_error) {
  die("Conexión fallida : " . $link->connect_error);
} else {
  // echo "Successfully connected";
}

//Recibimos las dos variables
$usuario=$_POST["user"];
$password=$_POST["pass"];
 
/* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra 
el usuario que está intentando acceder */
$admin = mysqli_query($link,"SELECT * FROM administradores WHERE usu_admin = '$usuario' AND pass_admin = '$password'");
$trans = mysqli_query($link,"SELECT * FROM transcriptores WHERE usu_trans = '$usuario' AND pass_trans = '$password'");
 
/* Sabemos que en el caso que exista el usuario se encontrará en una de estas 
tres tablas, por lo tanto se guardará en alguno de nuestras tres variables 
que guardan nuestra consulta */
 
/* Ahora comprobamos que variable contiene al usuario*/
if(mysqli_num_rows($admin) > 0) 
{
    /* Si entra en este if significa que el que intenta acceder es administrador, 
    por lo tanto le creamos una sesión */
    session_start();
 
    $_SESSION['administrador']="$usuario";
 
    /* Nos dirigimos al header que nos 
    redireccionará a la página que le indiquemos */
    header("Location: dashboard.php");
 
    /* terminamos la ejecución ya que si redireccionamos, ya no nos interesa 
    seguir ejecutando código de este archivo */
    exit(); 
}
 
/* Ahora comprobamos si el que intenta acceder es un transcriptor */
else if(mysqli_num_rows($trans) > 0) 
{
    session_start();
    $_SESSION['transcriptor']="$usuario";
    header("Location: dashboard.php");
    exit(); 
}

else 
{
   /* Si no el usuario no se encuentra en ninguna de las tres tablas 
   imprime el siguiente mensaje */
   $mensajeaccesoincorrecto = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
   echo $mensajeaccesoincorrecto; 
}


?>