<?php 
   
            
            $host     =  "localhost";
            $banco     = "teste_bleez";
            $user      = "root";
            $passaword = "";
            
            $mysqli = mysqli_connect($host, $user, $passaword, "teste_bleez");
          
            
            if (mysqli_connect_errno()) 
            {
                printf("Cone&ccedil;&atilde;o falhou: %s\n", mysqli_connect_error());
               // printf("Falha ao logar. Entre em contato com o Administrador");
                exit();
            }
            

?>