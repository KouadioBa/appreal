<?php

  //include our connection
	include 'connect.php';
    
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $sql = "SELECT id, * FROM eleves WHERE id = $id";
	$query = $db->query($sql);
	$row = $query->fetchArray();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Classe de CP2</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            

           

            <!-- Nav Item - administrateur Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdministrateur"
                    aria-expanded="true" aria-controls="collapseAdministrateur">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Administrateur</span>
                </a>
                <div id="collapseAdministrateur" class="collapse" aria-labelledby="headingAdministrateur" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Profile:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">S'enregistrer</a>
                        <a class="collapse-item" href="forgot-password.html">Mot de passe oublier</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - classes Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClasses"
                    aria-expanded="true" aria-controls="collapseClasses">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Classes</span>
                </a>
                <div id="collapseClasses" class="collapse" aria-labelledby="headingClasses" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded"><h6 class="collapse-header">Toutes les classes:</h6>
                        <a class="collapse-item" href="classe_CP1.html">Classe de CP1</a>
                        <a class="collapse-item" href="classe_CP2.html">Classe de CP2</a>
                        <a class="collapse-item" href="classe_CE1.html">Classe de CE1</a>
                        <a class="collapse-item" href="classe_CE2.html">Classe de CE2</a>
                        <a class="collapse-item" href="classe_CM1.html">Classe de CM1</a>
                        <a class="collapse-item" href="classe_CM2.html">Classe de CM2</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Admin Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin"
                    aria-expanded="true" aria-controls="collapseAdmin">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Systèmes Admin</span>
                </a>
                <div id="collapseAdmin" class="collapse" aria-labelledby="headingAdmin" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded"><h6 class="collapse-header">Admins:</h6>
                        <a class="collapse-item" href="classe_admin.html">Classes Admin</a>
                        <a class="collapse-item" href="eleve_admin.html">Élèves Admin</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Compo Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCompo"
                    aria-expanded="true" aria-controls="collapseCompo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Compositions</span>
                </a>
                <div id="collapseCompo" class="collapse" aria-labelledby="headingCompo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded"><h6 class="collapse-header">Compos:</h6>
                        <a class="collapse-item" href="compositon_one.html">compositon 1</a>
                        <a class="collapse-item" href="compositon_two.html">compositon 2</a>
                        <a class="collapse-item" href="compositon_three.html">compositon 3</a>
                        <a class="collapse-item" href="compositon_for.html">compositon 4</a>
                        <a class="collapse-item" href="five.html">Passage</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Charts -->
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center  
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Cédric Kouadio</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Coordonnées de l'élève </h1>
                    </div>

                    <div class="container">
                        <div class="card">
                            <div class="card-header" style="font-size: 30px;text-align:center">
                                Certificat de scolarité
                              </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php
                                            echo "
                                            <img style='height:300px;width: 100%;' class='card-img-top img-thumbnail' src='images/".$row['image']."' alt='Card image cap'>                       
                                            ";
                                        ?>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <div class="card-body">
                                            <h5 class="card-title" style="color: black;">Nom :    <strong style="margin-left: 25px;color: black;"><?php echo $row['firstname'];  ?></strong></h5>
                                            <h5 class="card-title" style="color: black;">Prénom : <strong style="color: black;"><?php echo $row['name'];  ?></strong></h5>
                                            <h5 class="card-title" style="color: black;">Äge : <strong style="margin-left: 34px;color: black;"><?php echo $row['age'];  ?></strong></h5>
                                            <h5 class="card-title" style="color: black;">Classe : <strong style="margin-left: 13px;color: black;">A gérer</strong></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="titre pt-5">
                                    <h1 style="text-align:center;border:1px solid #4e73df;padding: 10px;border-radius: 20px;background-color: #4e73df;color: white;">GROUPE SCOLAIRE L'ÉCOLE DE MONSIEUR</h1>
                                </div>
                                <div class="titre pt-5">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi animi soluta atque
                                    molestiae vel. Cum ab in dignissimos numquam. Sapiente cum voluptatum facere beatae
                                    perferendis? Enim, animi. Minus molestiae consequatur nobis error eum quam, dolorum
                                    sequi? Soluta amet repellendus similique a incidunt voluptatibus, vel voluptates sed
                                    quia impedit ratione, illo magni quidem veritatis voluptas optio, velit aut ea? Quidem 
                                    et itaque quaerat provident facilis doloribus nobis dignissimos rerum laborum, distinctio
                                    consectetur dolorem ad eligendi modi quisquam tempora, dolor voluptatum. Nobis praesentium
                                    incidunt cupiditate commodi quis earum dicta blanditiis non, illo optio? Quis repellendus
                                    debitis officiis eaque qui accusamus eius suscipit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi animi soluta atque
                                    molestiae vel. Cum ab in dignissimos numquam. Sapiente cum voluptatum facere beatae
                                    perferendis? Enim, animi. Minus molestiae consequatur nobis error eum quam, dolorum
                                    sequi? Soluta amet repellendus similique a incidunt voluptatibus, vel voluptates sed
                                    quia impedit ratione, illo magni quidem veritatis voluptas optio, velit aut ea? Quidem 
                                    et itaque quaerat provident facilis doloribus nobis dignissimos rerum laborum, distinctio
                                    consectetur dolorem ad eligendi modi quisquam tempora, dolor voluptatum. Nobis praesentium
                                    incidunt cupiditate commodi quis earum dicta blanditiis non, illo optio? Quis repellendus
                                    debitis officiis eaque qui accusamus eius suscipit.</p>
                                </div>
                                <div class="titre pt-5">
                                    <div class="d-flex justify-content-between">
                                        <div class="p-2">Sous signez le 00/00/0000<br> <img src="./img/signature.png" width="50%" alt=""></div>
                                        <!-- <div class="p-2">Flex item 2</div> -->
                                        <div class="p-2">
                                            <img src="./img/logo.jpg" width="50%" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-info" style="margin-bottom:30px;margin-top:30px"><a href="eleve.php" style="text-decoration:none;color: white;">Liste des Élèves</a></button>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button style="margin-bottom:30px;margin-top:30px;margin-left: 218px;" class="btn btn-info"><a href="eleve_admin.php" style="text-decoration:none;color: white">System admin</a></button>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; by Cedric Kouadio Design 2022-2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>