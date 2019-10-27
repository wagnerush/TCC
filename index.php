
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//Incluindo o arquivo de conexao com o banco de dados
require_once("./config/conexao_bd.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Projeto 2019</title>
		<meta charset="utf-8">

		<link rel="stylesheet" href="./css/bootstrap_css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />

		<script src="./js/jquery-3.3.1.slim.min.js"></script>
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap_js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha256-jGAkJO3hvqIDc4nIY1sfh/FPbV+UK+1N+xJJg6zzr7A=" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script src="./js/script.js"></script>

	</head>
	<body>

		<div class="container" id="cabecalho">
			
			<div class="jumbotron">
						
				<h1>LAMBARI - MG</h1>

				<p>Seja bem-vindo visistante!</p>

				<ul class="menu">
					<li><a class="btn btn-light" role="button" href="?pg=inicio">Início</a></li>
					<li><a class="btn btn-light" role="button" href="?pg=acidade">História da Cidade</a></li>
					<li><a class="btn btn-light" role="button" href="?pg=ecoturismo">Ecoturismo</a></li>
					<li><a class="btn btn-light" role="button" href="?pg=pontosturisticos">Pontos Turísticos</a></li>
					<li><a class="btn btn-light" role="button" href="?pg=sobre">Sobre</a></li>
					<li><a class="btn btn-light" role="button" href="?pg=contato">Contato</a></li>

				</ul>

			</div>

		</div>

		<div class="container" id="corpo">

		<!-- 	<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item" aria-current="page"><a href="?pg=inicio">Início</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><a href="?pg=acidade">História da Cidade</li>
			    <li class="breadcrumb-item active" aria-current="page"><a href="?pg=ecoturismo">Ecoturismo</li>
			    <li class="breadcrumb-item active" aria-current="page"><a href="?pg=pontosturisticos">Pontos Turísticos</li>
			    <li class="breadcrumb-item active" aria-current="page"><a href="?pg=sobre">Sobre</li>
			    <li class="breadcrumb-item active" aria-current="page"><a href="?pg=contato">contato</li>
			  </ol>
			</nav> -->

			<?php

				if(isset($_GET["pg"])){
					$pagina = $_GET["pg"];
				}
				else{
					$pagina = "inicio";
				}				

				include("paginas/".$pagina.".php");

			?>
			
		</div>

		<div class="container" id="rodape">

			<div class="jumbotron">				

				<h4>Todos os direitos reservados.</h4>				

			</div>
			
		</div>


	</body>
</html>