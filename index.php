<?php
require_once('config.php');

/*$connecte = false;
if (empty($_SESSION['utilisateur'])) {
    $connecte = true;
    header('location:connexion.php');
}*/
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

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
            

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="categorie" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                    <span>Categories</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Les categories:</h6>
                        <a class="collapse-item" href="livre.php">Livres scolaires</a>
                        <a class="collapse-item" href="Fournitures_scol.php">Fournitures scolaires</a>
                    </div>
                </div>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
           

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="service_info.php" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-clipboard-list "></i>
                    <span>Services informatiques</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Les services informatiques</h6>
                        <a class="collapse-item" href="#">Réparation matérielle</a>
                        <a class="collapse-item" href="#">Assistance logicielle</a>
                       
                </div>
            </li>
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="personne.php">
                <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Personnes</span></a>
            </li>
            <hr class="sidebar-divider">
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-user fa-fw"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <li class="nav-item">
                <a class="nav-link" href="deconnexion.php">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw "></i>
                    <span>Déconnecter</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
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
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa fa-book fa-2x text-gray " aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-4">Biblio<span >clic</span></div>
            </a>                   
                  
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
                        

                      

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/R.png">
                            </a>
                            <!-- Dropdown - User Information -->
                           
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Categories </div>
                                                
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
            $stmt = $dbco->query("SELECT COUNT(*) AS nbr_cat FROM categorie");
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            echo $row['nbr_cat'];            
            ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-bookmark fa-2x text-gray-300" aria-hidden="true"></i>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            services informatiques</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                            $stmt = $dbco->query("SELECT COUNT(*) AS nbr_serinfo FROM services_informatiques");
                                                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                                            echo $row['nbr_serinfo'];            
                                                            ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Livres
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php
                                                            $stmt = $dbco->query("SELECT COUNT(*) AS nbr_livre FROM livres");
                                                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                                            echo $row['nbr_livre'];            
                                                            ?></div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-book fa-2x text-gray-300" aria-hidden="true"></i>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Fournitures scolaires</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                            $stmt = $dbco->query("SELECT COUNT(*) AS nbr_sf FROM fournitures_scolaires");
                                                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                                            echo $row['nbr_sf'];            
                                                            ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-paperclip fa-2x text-gray-300" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Produits les plus vendus</h6>
                                    <div class="dropdown no-arrow">
                                       
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="chartProduits"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Etat des problémes</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-8">
                                        <canvas id="chartEtatProblemes"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                      

                 

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; DEV201 </span>
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

<?php

//les produit le plus vendus
$result = $dbco->query("SELECT titre AS Nom, nbrLivrevend AS NbrVendu FROM livres UNION ALL (SELECT label AS Nom,nbrfournitures AS NbrVendu FROM fournitures_scolaires);");

$produits = array();
$ventes = array();

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $produits[] = $row['Nom'];
    $ventes[] = $row['NbrVendu'];
}
// les etats de probleme
$res = $dbco->query("SELECT etat_demande, COUNT(*) AS nombre FROM    demandes_service GROUP BY  etat_demande");

$etats = array();
$nombres = array();

while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
    $etats[] = $row['etat_demande'];
    $nombres[] = $row['nombre'];
}

?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
  // Récupérez le contexte des canvas
  var ctxProduits = document.getElementById('chartProduits').getContext('2d');
  var ctxEtatProblemes = document.getElementById('chartEtatProblemes').getContext('2d');

  // Définissez les données pour les deux graphiques (à personnaliser selon vos besoins)
  var dataProduits = {
    labels: <?php echo json_encode($produits); ?>,
    datasets: [
      {
        label: 'Produits les plus vendus',
        data: <?php echo json_encode($ventes); ?>,
        backgroundColor: '#36b9cc',
        borderColor: '#36b9cc',
        borderWidth: 1,
      },
    ],
  };

  var dataEtatProblemes = {
    labels: <?php echo json_encode($etats); ?>,
    datasets: [
      {
        label: 'État des problèmes',
        data: <?php echo json_encode($nombres); ?>,
        backgroundColor: ['#e74a3b', '#f6c23e', '#1cc88a'], // Personnalisez les couleurs
      },
    ],
  };

  // Créez les graphiques
  var chartProduits = new Chart(ctxProduits, {
    type: 'bar',
    data: dataProduits,
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  });

  var chartEtatProblemes = new Chart(ctxEtatProblemes, {
    type: 'pie', // Vous pouvez utiliser d'autres types de graphiques si vous le souhaitez
    data: dataEtatProblemes,
    options: {
      responsive: true,
    },
  });
</script>


</body>

</html>