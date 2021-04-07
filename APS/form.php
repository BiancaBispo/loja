<?php include_once("conexao.php");
$result_cursos = "SELECT * FROM cursos";
$resultado_cursos = mysqli_query($conn, $result_cursos);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="img/contrução.ico" type="image/x-icon">
		<title>Construção</title>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="normalize.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		 <!--Menu-->
		 <nav>
			<a href="#">Construção</a>
			<ul>
				<li><a href="#sobre">SOBRE NÓS</a></li>
				<li><a href="#produtos">PRODUTOS</a></li>
				<li><a href="#contato">CONTATO</a></li>
			</ul>
		</nav>

		<!--Barra de pesquisa para o banco-->
		<form method="POST" action="pesquisar.php">
			Pesquisar: <input type="text" name="pesquisar" placeholder="PESQUISAR">
			<input type="submit" values="ENVIAR">    
		</form>

		<!--parte da vitrine com suas informações-->
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Cursos</h1>
			</div>
			<div class="row">
				<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="img/fundo 2.jpeg" alt="..." >
							<div class="caption text-center">
								<a href="detalhes.php?id=<?php echo $rows_cursos['id']; ?>"><h3><?php echo $rows_cursos['nome']; ?></h3></a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>