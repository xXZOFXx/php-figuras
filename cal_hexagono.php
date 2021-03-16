<?php 
require 'funciones/poligono.php';
require 'funciones/hexagono.php';
$pe='';
$area='';

if (isset($_POST['cal'])) {
	$lado=$_POST['lado'];
	$apotema=$_POST['apotema'];

	$hexagono = new Hexagono($lado,$apotema);

	$pe=$hexagono->perimetro();
	$area=$hexagono->area();
}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Figuras geometricas</title>
</head>
<body>
	<h1>Calculando área y périmetro</h1>
	<sidenav>
		<ul>
			<li><a href="cal_triangulo.php">Triangulo</a></li>
			<li><a href="cal_cuadrado.php">Cuadrado</a></li>
			<li><a href="cal_rectangulo.php">Rectangulo</a></li>
			<li><a href="cal_hexagono.php">Exagono</a></li>
		</ul>
	</sidenav>
	<main>
		<h2>Hexagono</h2>
		<form action="cal_hexagono.php" method="POST">
			<input type="number" name="lado" placeholder="Lado">			
			<input type="number" name="apotema" placeholder="Apotema">		
			<input type="submit" name="cal" value="Calcular">	
		</form>
		<h5>El perimetro del Hexagono es: <?php echo $pe; ?></h5>
		<h5>El area del Hexagono es: <?php echo $area; ?></h5>
	</main>
</body>
</html>