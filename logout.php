<?php 
session_start();

// Destruye la información de la sesión
session_destroy();
 
//volvemos a la página principal
header("location: index.php"); ?>