<?php 
session_start();
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

        	
 function AlertErro()
	{
		swal({
		  title: 'Dados incorretos!',
		  text: 'Deseja tentar novamente?',
		  type: 'error',
		  confirmButtonText: 'Sim'
		  
		})		
	}
 function AlertSucess()
	{
	 swal({
		  title: 'Seja bem vindo(a)'
		  
		})		
	}
 
        				
     </script>
	

</head>


<body>

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
        <?php include "menuPrincipalLogin.php";?>
   
     
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
              <a class="list-group-item"><i class="fas fa-fw fa-chart-area" aria-hidden="true"  style="color:#F36557"></i>&nbsp;<font  style="color:#484C51">Teste de CRUD</font></a>
               <a class="list-group-item" href="#"><i class="fa fa-pencil fa-fw" aria-hidden="true">
              <i class="fa fa-user-circle" aria-hidden="true" style="color:#F36557"></i>
              </i>
             <font  style="color:#484C51">Acesso ao Sistema</font>
             
             
              </a>
          </div>
          
          
          
            <div class="input-group">
             
             
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

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
             
              </div-->
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
            
              </a-->
              <!-- Dropdown - Messages -->
              
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><font  style="color:#F36557"></font></span>
                <i class="fas fa-user"></i>
              </a>
              <!-- Dropdown - User Information -->
             
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
                          <font style="color:black"></font>
                      </li>
                          
                          
                      
                      <form>
                              <div class="form-row">
                               <?php 
                                include 'conecta.php';

                                $login  = $_POST['inputLogin'];
                                $senha  = $_POST['inputPassword'];
                                $entrar = $_POST['entrar'];
                                
                                 
                                  if (isset($entrar)) 
                                  {
                                       
                                      $verifica = "SELECT * FROM usuarios WHERE login ='$login' AND password = '$senha'";
                                      $result = mysqli_query($mysqli, $verifica) or die("Algum problema na query".mysql_Error());
                                      $num_rows = mysqli_num_rows($result);
                                      
                                      
                                      if(mysqli_num_rows ($result) > 0 )
                                      {
                                          $_SESSION['nome']  = $num_rows['nome'];
                                          $_SESSION['login'] = $login;
                                          $_SESSION['senha'] = $senha;
                                          
                                        
                                          echo "<script language='javascript' type='text/javascript'>
                                             AlertSucess();
                                             setTimeout(function() {
                                              window.location.href = 'https://localhost/teste_bleez';
                                             }, 1400);
		      
                                          </script>";
                                      }
                                      else{
                                          $_SESSION['nome']  = $num_rows['nome'];
                                          
                                          unset ($_SESSION['nome']);
                                          unset ($_SESSION['login']);
                                          unset ($_SESSION['senha']);
                                          
                                          echo "<script language='javascript' type='text/javascript'>
                                             AlertErro();
                                             setTimeout(function() {
                                              window.location.href = 'https://localhost/teste_bleez/acesso.php';
                                             }, 1400);
           
                                          </script>";
                                         
                                          
                                      }
                                   }
                                   
                                  
                                  mysqli_close($mysqli);
?>
                                </div>
                              
                              
					</form>      
                     </ul>
                      <ul class="fa-ul">
                         <div id="main" class="container-fluid" style="margin-top: 50px">
                             	<div id="top" class="row">
                            		
                            		
                            	</div> <!-- /#top -->
                             
                             <!-- /#main -->
                             <div id="list" class="row">
                            	<div class="table-responsive col-md-12">
                            		<table class="table table-striped" cellspacing="0" cellpadding="0">
                            			<thead>
                            				<tr>
                            					<th colspan="6"></th>
                            				</tr>
                            			</thead>
                            			<tbody>
                            				<tr>
                            				    <td> Sistema de Teste:  Marcus Paulo.
                            				    <br> Copyright &copy;<font color="F36557">Marcus Paulo </font> teste 1.0 <?php echo date('Y');?>
                            				    </td>
                            					
                            				</tr>
                            				
                            			</tbody>
                            		</table>
                            	</div>
                              </div> <!-- /#list -->
                           </div> <!-- /#main -->
                            
                            <!-- Modal -->
                            <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="modalLabel"><font style="color:black">Excluir Autoriza&ccedil;&atilde;o</font></h4>
                                      Listagem</font>
                                  </div>
                                  <div class="modal-body">
                                  <font style="color:black"> Deseja realmente excluir esta Autoriza&ccedil;&atilde;o?</font> 
                                   
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Sim</button>
                            	<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                                  </div>
                                </div>
                              </div>
                            </div>
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

  <!-- Logout Modal-->
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  
</body>

</html>
