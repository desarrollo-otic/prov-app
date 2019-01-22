<?php

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "prueba";

// conexión a la base de datos
$link = new mysqli($localhost, $username, $password, $dbname);
// comprobar conexión
if($link->connect_error) {
  die("Conexión fallida : " . $link->connect_error);
} else {
  // echo "Conectado exitosamente";
}

//Recibimos las dos variables
$usuario=$_POST["user"];
$password=$_POST["pass"];
 
/* Realizamos una consulta por cada tabla para buscar en que tabla se encuentra 
el usuario que está intentando acceder */
$admin = mysqli_query($link,"SELECT * FROM administradores WHERE usu_admin = '$usuario' AND pass_admin = '$password'");
$trans = mysqli_query($link,"SELECT * FROM transcriptores WHERE usu_trans = '$usuario' AND pass_trans = '$password'");
 
/* Sabemos que en el caso que exista el usuario se encontrará en una de estas 
tablas, por lo tanto se guardará en alguno de nuestras variables 
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
   //$loginerror = "El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.";
   //echo $loginerror;
   
   echo('
   <html>
   <head>
   <meta http-equiv="Refresh" content="1;url=index.php">
   <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">
   </head>
   <body>

   <section>

      <!-- Page Loader-->
      <div class="page-loader-wrapper">
          <div class="loader">
              <div class="preloader">
                 <div class="spinner-layer pl-red">
                      <div class="circle-clipper left">
                         <div class="circle"></div>
                 </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
              </div>
          </div>
            <h3>El usuario o la contraseña son incorrectos, por favor vuelva a introducirlos.</h3>
            <h4>Redireccionando...</h4>
        </div>

    </section>
   
   </body>
   </html>');
}

?>