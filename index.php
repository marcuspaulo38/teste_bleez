<?php 
include 'dadosAcesso.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MARCUS PAULO - TESTE</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
      <br>
           <img src="img/fundoVermelho1.png" width="199" height="49">
      </a>

      <!-- Menu Principal-->
       <hr class="sidebar-divider my-0">
        <?php include "menuPrincipal.php";?>
   
      

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
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          <div class="sidebar-heading" align="left">
           
           <br> 
          </div> 
          <br> <br>
          <div class="list-group">
              <a class="list-group-item"><i class="fas fa-fw fa-chart-area" aria-hidden="true"  style="color:#F36557"></i>&nbsp;<font  style="color:#484C51">Marcus Paulo: Sistema de Teste</font></a>
              <a class="list-group-item" href="#"><i class="fa fa-pencil fa-fw" aria-hidden="true">
              <i class="fa fa-users" aria-hidden="true" style="color:#F36557"></i>
              </i>
             <font  style="color:#484C51">Seja bem vindo | <?php echo ucfirst($nome);?></font>
              </a>
          </div>
           
            <div class="input-group">
             
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

           
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Localizar..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li-->

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <!--a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <!--span class="badge badge-danger badge-counter">7</span-->
              </a-->
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <!--h6 class="dropdown-header">
                  Message Center
                </h6-->
                
                
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php  
                echo ucfirst($nome)."&nbsp";
                ?>
                <img class="img-profile rounded-circle"  width="60" height="60" src="img/photo-1520719627573-5e2c1a6610f0.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <?php  echo "<a class='dropdown-item' href=#>" ?>
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <!--a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a-->
          </div>

          <!-- Content Row -->
          <div class="row">

           

          <!-- Content Row -->

          

          <!-- Content Row -->
          <div class="row">

            <div class="col-lg-13 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                     
                      <ul class="fa-ul">
                      <li>
                        
                        &nbsp;&nbsp;&nbsp;<img alt="" src="img/euBanner.png" width="373" height="317">
                          <br><font style="color:#484C51">
                         <br>
                          <h6 align="center">
                            <p align="justify">&nbsp;Ol&aacute; sou Marus Paulo, agrade&ccedil;o a oportunidade de apresentar este pequeno teste para a vaga mencionada anteriormente.<br>
                            Acredito que este exemplo conforme o que pediu poder&aacute; avaliar o desempenho e o dom&iacute;nio.<br>
                            Alguns topicos que fiz quest&atilde;o de apresentar:</p>
                          </h6>
                          <ul>
                                <li>As cores no seu layout ( seu site da bleez ).</li>
                                <li>Usabilidade de Bootstrap ( padr&atilde;o para todas as plataformas).</li>
                                <li>PHP puro ( poderia usar MVC mas pediu PHP puro e sem Framework).</li>
                          </ul> 
                          
                          <h6 align="center">
                            <p align="justify">&nbsp;Espero que aprecie. Obrigado.&nbsp;<i class="fa fa-thumbs-up" aria-hidden="true"></i></p>
                          </h6>
                              
                           </font>
                          <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                          
                      </li>
                        
                     </ul>
               
               
               
                 
                </div>
              </div>

              <!-- Approach -->
             
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
                   

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  
</body>

</html>
