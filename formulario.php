<?php

  if(isset($_POST['submit'])){

  include_once('config.php');

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $sexo = $_POST['genero'];
   $data_nasc = $_POST['data_nascimento'];
   $cidade = $_POST['cidade'];  
   $estado = $_POST['estado'];  
   $endereco = $_POST['endereco'];  

   $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nascimento, cidade, estado, endereco) VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
  }

?>  

<!DOCTYPE html>
<html>
<head>
	<!--===============================================================================================-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<title>Formulario PajeTech</title>
    <!--===============================================================================================-->
    <!-- BOOTSTRAP -->	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <!--===============================================================================================-->
    <link href="css/formulario.css" rel="stylesheet" type="text/css" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="imagens/ui-checks.svg"/>
</head>
<body>
      <div class="box">
      	<form action="formulario.php" method="POST">
      		<fieldset>
      			<legend><b>Formulário de Clientes</b></legend>
      			<br>
      			<!--===============================================================================================-->
      			<div class="inputBox">
      				<input type="text" name="nome" id="nome" class="inputUser" required>
      				<label for="nome"  class="labelInput">Nome Completo</label>
      			</div>
      			<br><br>
      			<!--===============================================================================================-->
      			<div class="inputBox">
      				<input type="text" name="email" id="email" class="inputUser" required>
      				<label for="email"  class="labelInput">E-mail</label>
      			</div>
      			<br><br>
      			<!--===============================================================================================-->
      			<div class="inputBox">
      				<input type="tel" name="telefone" class="inputUser" required>
      				<label for="telefone" class="labelInput">Telefone</label>
      			</div>
      			<!--===============================================================================================-->
      			<p>Sexo:</p>
      			<input type="radio" id="feminino" name="genero" value="feminino" required>
      			<label for="feminino">Feminino</label>
                <br>
      			<input type="radio" id="masculino" name="genero" value="masculino" required>
      			<label for="masculino">Masculino</label>
                <br>
      			<input type="radio" id="outro" name="genero" value="outro" required>
      			<label for="outro">Outro</label>
      			<br><br>
                <!--===============================================================================================-->
      				<label for="data_nascimento"><b>Data de Nascimento:</b></label>
      				<input type="date" name="data_nascimento" id="data_nascimento" required>
      			<br><br>
                <!--===============================================================================================-->
      			<div class="inputBox">
      				<input type="text" name="cidade" id="cidade" class="inputUser" required>
      				<label for="cidade" class="labelInput">Cidade:</label>
      			</div>
      			<br><br>
      			<!--===============================================================================================-->
      			<div class="inputBox">
      				<input type="text" name="estado" id="estado" class="inputUser" required>
      				<label for="estado" class="labelInput">Estado:</label>
      			</div>
      			<br><br>
      			<!--===============================================================================================-->
      			<div class="inputBox">
      				<input type="text" name="endereco" id="endereco" class="inputUser" required>
      				<label for="endereco" class="labelInput">Endereço:</label>
      			</div>
      			<br><br>
      			<!--===============================================================================================-->
                <input type="submit" name="submit" id="submit" value="Enviar">
      		</fieldset>
      		
      	</form>
      	
      </div>
</body>
</html>