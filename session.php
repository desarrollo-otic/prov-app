<?php

session_start();
header("Cache-control: private");
header("Cache-control: no-cache, must-revalidate");
header("Pragma: no-cache");
if(!isset($_SESSION['administrador']) && !isset($_SESSION['transcriptor']) !="0") {
header('Location: pages/errores.php');
}

?>