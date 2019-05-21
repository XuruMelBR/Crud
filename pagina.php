<?php
   
   try{
       $conexao = mysqli_connect("localhost", "pedrospiet","","db_mobile");
        //Variavel de conexão        //Conecta no banco              //Servidor,  Usuario, Banco de dados
      
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $query ="insert into tb_info values (null,'$nome', '$email')"; // comando para manipular o banco de dados,
    mysqli_query($conexao,$query); // Para se conectar com o banco de dados, deverá ter a variável da conexão e da query como parametros.
    
    echo"Cadastro realizado com senoura";
       
   }catch(Exception $e){
       echo "Erro ao conectar".$e;
   }
        
            // Try Catch seria tipo um if else, TENTE, se não der exibirá os parametros do CATCH
?>