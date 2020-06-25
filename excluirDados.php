<?php
include 'conecta.php';
include 'dadosAcesso.php';

if (mysqli_connect_errno())
{
    printf("Connecção faliu: %s\n", mysqli_connect_error());
    exit();
}

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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.1.1/sweetalert2.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.1.1/sweetalert2.min.css">
       
      
       <script>

        	function AlertErroExcluir()
        	{
        		swal(
              		  'Houve um erro!',
              		  'error'
              		  
              		)	
        	}	
        	
        	function AlertSucessoExcluir()
        	{
        		swal(
        		  'Sucesso!',
        		  'Dados Excluido!',
        		  'success'
        		  
        		)	
        	}			
     </script>
    
     
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

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

     

     <!-- Menu Principal-->
       <hr class="sidebar-divider my-0">
        <?php include "menuPrincipal.php";?>
   
      <!-- Menu Principal -->
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
               <a class="list-group-item"><i class="fas fa-fw fa-chart-area" aria-hidden="true"  style="color:#F36557"></i>&nbsp;<font  style="color:#484C51">Teste Marcus Paulo</font></a>
               <a class="list-group-item" href="#"><i class="fa fa-pencil fa-fw" aria-hidden="true">
              <i class="fa fa-user-circle" aria-hidden="true" style="color:#F36557"></i>
              </i>
               <font  style="color:#484C51">Excluir  | Produtos </font>
             
              </a>
          </div>
          
            
          </form>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <!-- Dropdown - Messages -->
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
          
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Dados do usuário -->
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
                          <font style="color:black"></font>
                      </li>
                     
                     <?php

                            
                             //Excluir
                                 $id = $_GET['id'];
                                 
                                 
                                 // sql to delete a record
                                 $sql = "DELETE FROM produto WHERE id=$id";
                                 
                                 if ($mysqli->query($sql) === TRUE) {
                                     mysqli_close($mysqli);
                                     echo "<script language='javascript' type='text/javascript'>
                                                                         AlertSucessoExcluir();
                                                                         setTimeout(function() {
                                                                          window.location.href = 'https://localhost/teste_bleez/cadProduto.php';
                                                                         }, 1700);
      
                                                                      </script>";
                                 } else {
                                     mysqli_close($mysqli);
                                     echo "<script language='javascript' type='text/javascript'>
                                                                         AlertErroExcluir();
                                                                         setTimeout(function() {
                                                                           window.location.href = 'https://localhost/teste_bleez/cadProduto.php';
                                                                         }, 1700);
      
                                                                      </script>";
                                 }
                                 
                                                              
                             
                           
?>

</body>

</html>

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
 
  

  
</body>

</html>


