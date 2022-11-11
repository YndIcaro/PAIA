<?php
//include("conexao.php");

if(isset($_POST['form'])){
	$apart_tamanho = $_POST['apart_tamanho'];
	$apart_localizacao = $_POST['apart_localizacao'];
	$apart_quarto = $_POST['apart_quarto'];
	$apart_cozinha = $_POST['apart_cozinha'];
	$apart_preco = $_POST['apart_preco'];

	$sql = "INSERT INTO 	 
VALUES ('$apart_tamanho','$apart_localizacao','$apart_quarto','$apart_cozinha','$apart_preco';)";
  if ($conn->query($sql)) {
   echo' ';
} else {
	echo "Error: " . $sql . "<br>" . $conn->errorInfo();
}
$casa_tamanho = $_POST['casa_tamanho'];
$casa_localizacao = $_POST['casa_localizacao'];
$casa_quarto = $_POST['casa_quarto'];
$casa_cozinha = $_POST['casa_cozinha'];
$casa_preco = $_POST['casa_preco'];

$sql = "INSERT INTO casa (casa_tamanho,casa_localizacao,casa_quarto,casa_cozinha,casa_preco)
VALUES('$casa_tamanho','$casa_localizacao','$casa_quarto','$casa_cozinha','$casa_preco');";
   if ($conn->query($sql)) {
    echo' ';
} else {
echo "Error: " . $sql . "<br>" . $conn->errorInfo();
}
}
?>
<html lang="pt-EU" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="tlv.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
</head>

<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
		<input type="hidden" name="form" />
			<div class="social-container">
			</div>
			<input type="text" placeholder="Tamanho do apartamento" name="apart_tamanho"/>
			<input type="text" placeholder="Localização" name="apart_localizacao"/>
			<input type="text" placeholder="Quantidade de quartos" name="apart_quarto"/>
			<input type="text" placeholder="Quantidade de Cozinha" name="apart_cozinha"/>
			<input type="text" placeholder="Preço" name="apart_preco"/>
		
			<button>Publicar</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">

		<input type="hidden" name="form" />
			<input type="text" placeholder="Tamanho da casa" name="casa_tamanho" />
			<input type="text" placeholder="Localização" name="casa_localizacao" />
			<input type="text" placeholder="Quantidade de quartos" name="casa_quarto" />
			<input type="text" placeholder="Quantidade de Banheiros" name="casa_banheiro" />
			<input type="text" placeholder="Quantidade de cozinhas" name="casa_cozinha" />
			<input type="text" placeholder="Valor" name="casa_preco" />
		
			<button>Publicar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Registrando Apartamentos</h1>
				<p>Clique aqui para registrar casas</p>
				<button class="ghost" id="signIn">Registrar Casa</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Registrando Casa</h1>
				<p>Clique Aqui para Registrar Apartamentos</p>
				<button class="ghost" id="signUp">Registrar Apartamento</button>
			</div>
		</div>
	</div>
</div>

<script src="script2.js" charset="utf-8"></script>
</form>
</body>

</html>