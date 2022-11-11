<?php
include("conexao.php");

if(isset($_POST['form'])){
	$nome = $_POST['nomeU'];
	$sobrenome = $_POST['sobrenomeU'];
	$telefone = $_POST['telefoneU'];
	$email = $_POST['emailU'];
	$senha = $_POST['senhaU'];


	$sql = "INSERT INTO usuario(nome,sobrenome,email,senha,telefone)values('$nome','$sobrenome','$email','$senha','$telefone')";
  if ($conn->query($sql)) {
	echo' ';
} else {
	echo "Error: " . $sql . "<br>" . $conn->errorInfo();
}
}

session_start();

?>
<html lang="pt-EU" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Registro | Login</title>
  <link rel="stylesheet" href="tlv.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
</head>

<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST">
		<input type="hidden" name="form" />
			<div class="social-container">
			</div>
			<input type="text" placeholder="Nome" name="nomeU"/>
			<input type="text" placeholder="Sobrenome" name="sobrenomeU"/>
			<input type="tel" placeholder="Telefone" name="telefoneU"/>
			<input type="email" placeholder="Email" name="emailU"/>
			<input type="password" placeholder="Senha" name="senhaU"/>
		
			<button>Cadastrar</button>
		</form>
		</div>
	<div class="form-container sign-in-container">

	<form method="POST">
		<input type="hidden" name="form2" />
			<input type="text" placeholder="Email" name="email" />
			<input type="password" placeholder="Senha" name="senha" />

			<button>Login</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Login</h1>
				<p>Clique aqui para fazer Login </p>
				<button class="ghost" id="signIn">Login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Cadastro</h1>
				<p>Clique aqui caso não possua conta</p>
				<button class="ghost" id="signUp"> <a href="telaprincipal.php">Cadastrar</a> </button>
			</div>
		</div>
	</div>
</div>

<script src="vendascript.js" charset="utf-8"></script>

</body>

</html>