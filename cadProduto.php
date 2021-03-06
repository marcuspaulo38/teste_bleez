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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
  <script src="js/validator.js"></script>
  <style type="text/css">
   input {
      text-transform: uppercase;
    }
  </style>
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
              <a class="list-group-item"><i class="fas fa-fw fa-chart-area" aria-hidden="true"  style="color:#F36557"></i>&nbsp;<font  style="color:#484C51"> Marcus Paulo: Sistema de Teste</font></a>
               <a class="list-group-item" href="#"><i class="fa fa-pencil fa-fw" aria-hidden="true">
              <i class="fa fa-user-circle" aria-hidden="true" style="color:#F36557"></i>
              </i>
             <font  style="color:#484C51">Cadastro  | Produtos</font>
             
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

            <!-- Dados do usu�rio -->
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
                     
                        <form action="salvarEditaDados.php" method="post" enctype="multipart/form-data">
                              <div class="form-row">
                                <div class="form-group col-md-8">
                                  <label for="inputProduto">Produto</label>
                                  <input type="text" class="form-control" name="inputProduto" id="inputProduto" placeholder="Digite o nome..."  minlength="06"  maxlength="50" required="required" >
                                  <input type="hidden" class="form-control" name="formDadosProduto" value="01" >
                                  
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="inputPreco">Pre&ccedil;o</label>
                                  <input type="text" class="form-control" name="inputPreco" id="inputPreco"  minlength="06"  maxlength="06"  onKeyPress="return(moeda(this,'.',',',event))"  required="required" >
                                </div>
                                
                                <div class="form-group col-md-12">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Descri&ccedil;&atilde;o</span>
                                  </div>
                                    <textarea class="form-control" aria-label="Descri��o" id="inputDescricao" name="inputDescricao" required="required" ></textarea>
                                  <div class="help-block with-errors"></div>
                                </div>
                                 <div class="form-group col-md-4">
                                  <label for="inputPreco">Arquivo</label>
                                   <input class="form-control" type="file" name="inputImagem" id="inputImagem" required="required"/>
                                  
                                </div>
                               
                                
                              </div>
                             
                              <div class='input-group h2'>
                                  <span class='input-group-btn'>
                                               <button class='btn btn-dark' type="submit">
                                               
                                                  <span class='glyphicon glyphicon-search'></span>Salvar
                                                </button>
                                                <button class='btn btn-secondary' type='reset'>
                                                  <span class='glyphicon glyphicon-search'></span>Cancelar
                                               </button>
                                 </span>
                                 
                              </div>
					</form>      
                     </ul>
                      <ul class="fa-ul">
                         <div id="main" class="container-fluid" style="margin-top: 50px">
                             	<div id="top" class="row">
                            		
                            		<div class="col-sm-6" >
                            			
                            			
                            		</div>
                            		
                            	</div> <!-- /#top -->
                             
                             <!-- /#main -->
                             <div id="list" class="row">
                            	<div class="table-responsive col-md-14">
                            		<table class="table table-striped" cellspacing="0" cellpadding="0">
                            			<thead>
                            				<tr>
                            					<th>ID</th>
                            					<th>Produto</th>
                            					<th>Pre&ccedil;o</th>
                            					<th>Descri&ccedil;&atilde;o</th>
                            					<th>Imagem</th>
                            					<th colspan="6"  class="actions">A&ccedil;&otilde;es</th>
                            					
                            				</tr>
                            			</thead>
                            			<tbody>
                            			
                            			<?php 
                            			
                            			   include 'conecta.php';
                                           $data_atual = date("d/m/Y h:m:s");
                                           
                                           $query = ("SELECT * FROM produto");
                                           $result = mysqli_query($mysqli, $query) or die("Algum problema na query".mysql_Error());
                                           $num_rows = mysqli_num_rows($result);
                                           $plano1 = "";
                                           
                                             while($row = mysqli_fetch_assoc($result))
                                             {
                                             
                                                 $id              = $row['id'];
                                                 $nome            = $row['nome'];
                                                 $preco           = $row['preco'];
                                                 $descricao       = $row['descricao'];
                                                 $img             = $row['imagem'];
                                                 $imagem          =  '<img src="data:image/gif;base64,'.base64_encode($img).'"  width="60" height="60" />';
                                                 
                                                  
                                                     echo "<td>$id </td>  
                                                           <td>$nome</td>
                                                           <td>$preco </td>
                                                           <td>$descricao</td>
                                                           <td>$imagem</td>
                                                           <td>    
                                                             <a class='btn btn-dark btn-xs' href='editProduto.php?id=$id&nome=$nome&preco=$preco&descricao=$descricao'>Editar</a>
                                                             <a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#delete-modal'>Excluir</a>
                                                          </td>
                                                      </tr>";
                                             }
                                            ?>
                            				
                            			</tbody>
                            		</table>
                            	</div>
                              </div> <!-- /#list -->
                            	
                            	<div id="bottom" class="row">
                            		<div class="col-md-12">
                            			<ul class="pagination">
                            				<li class="disabled"><a>&lt; <font  style="color:#484C51">Anterior</font></a></li>
                            				<li class="disabled">&nbsp;<a><font  style="color:#484C51"> 1 </font></a>&nbsp;</li>
                            				<li>&nbsp;<a href="#"> <font  style="color:#484C51">2 </font></a>&nbsp;</li>
                            				<li>&nbsp;<a href="#"> <font  style="color:#484C51">3 </font></a>&nbsp;</li>
                            				<li class="next"><a href="#" rel="next"><font  style="color:#484C51">Pr&oacute;ximo &gt;</font></a></li>
                            			</ul><!-- /.pagination -->
                            		</div>
                            	</div> <!-- /#bottom -->
                         </div> <!-- /#main -->
                            
                            <!-- Modal -->
                            <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="modalLabel"><font style="color:black">Excluir Produto</font></h4>
                                      Listagem</font>
                                  </div>
                                  <div class="modal-body">
                                  <font style="color:black"> Deseja realmente excluir este produto?</font> 
                                   
                                  </div>
                                  <div class="modal-footer">
                                               
                                   <?php echo "<a class='btn btn-dark btn-xs' href='excluirDados.php?id=$id'>Sim</a>" ?>    
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

      <!-- Footer -->
      
      <?php // include 'foot.php';?>
      
      <!-- End of Footer -->

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

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
