<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="post">
				<label>Número 1:
					<input type="number" name="num1">
				</label>
				<label>Número 2:
					<input type="number" name="num2">
				</label>
				<label>Número 3:
					<input type="number" name="num3">
				</label>
				<button> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>