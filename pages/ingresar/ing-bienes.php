<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveeduría del Estado Zulia | Ingresar Bienes Nacionales</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../../assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../assets/css/themes/theme-blue.css" rel="stylesheet" />
</head>
<body class="theme-blue">
    <!-- Page Loader -->
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
            <p>Cargando...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Buscar...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="#">Ingresar Bienes Nacionales</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    
                    <!--<li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>-->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../assets/img/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario</div>
                    <div class="email">usuario@ejemplo.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                    <ul class="list">
                        <li class="header">OPCIONES</li>
                        <li>
                            <a href="../../dashboard.php">
                                <i class="material-icons">home</i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        
                        <li class="active">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">add_circle</i>
                                <span>Ingresar</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="../ingresar/ing-med.php">Artículos de farmacia</a>
                                </li>
                                <li class="active">
                                    <a href="../ingresar/ing-bienes.php">Bienes Nacionales</a>
                                </li>
                                <li>
                                    <a href="../ingresar/ing-otros.php">Otros</a>
                                </li>
                               
                            </ul>
                        </li>
    
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">local_shipping</i>
                                <span>Despacho</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="../despacho/desp-medphp">Artículos de Farmacia</a>
                                </li>
                                <li>
                                    <a href="../despacho/desp-bienesphp">Bienes Nacionales</a>
                                </li>
                                <li>
                                    <a href="../despacho/desp-otrosphp">Otros</a>
                                </li>
                               
                            </ul>
                        </li>
    
                        <li>
                            <a href="../devoluciones.php">
                                <i class="material-icons">refresh</i>
                                <span>Devoluciones</span>
                            </a>
                        </li>
    
                        <li>
                            <a href="../reportes.php">
                                <i class="material-icons">assignment</i>
                                <span>Reportes</span>
                            </a>
                        </li>
                        <li>
                            <a href="../consultas.php">
                                <i class="material-icons">assessment</i>
                                <span>Consultas</span>
                            </a>                      
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">build</i>
                                <span>Configuración</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="../conf/agr-usu.php">Agregar Usuarios</a>
                                </li>
                                <li>
                                    <a href="../conf/cam-cont.php">Cambiar Contraseña</a>
                                </li>
                                <li>
                                    <a href="../conf/carg-inv.php">Cargar Inventario Inicial</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../ayuda.php">
                                <i class="material-icons">help</i>
                                <span>Ayuda</span>
                            </a>                      
                        </li>
                        <li>
                        <a href="#" data-toggle="modal" data-target="#defaultModal2">
                            <i class="material-icons">input</i>
                            <span>Salir del Sistema</span>
                        </a>                      
                    </li>
                </div>
                <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - Secretaría de Salud del Estado Zulia.
                </div>
                <div class="version">
                    <b>R.I.F.: </b> G-200048492
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>EN CONSTRUCCIÓN</h2>
                </div>
                
        </div>
    </div>
</section>

<!-- Default Size -->
<div class="modal fade" id="defaultModal2" tabindex="-4" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="" id="defaultModalLabel">Salir del Sistema</h3>
                 </div>
                <div class="modal-body">
                       <h4>¿Está seguro de cerrar la sesión actual?</h4>
                </div>
                <div class="modal-footer">
                    <a href="../../logout.php"><button type="button" class="btn btn-lg btn-success waves-effect">Aceptar</button></a>
                    <button type="button" class="btn btn-lg btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

<!-- Jquery Core Js -->
<script src="../../assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../../assets/plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="../../assets/plugins/jquery-countto/jquery.countTo.js"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="../../assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

<!-- Custom Js -->
<script src="../../assets/js/admin.js"></script>
<script src="../../assets/js/pages/index.js"></script>

<!-- Demo Js -->
<script src="../../assets/js/demo.js"></script>
</body>
</html>