<?php 
require 'funciones/poligono.php';
require 'funciones/rectangulo.php';
$pe='';
$area='';
if (isset($_POST['cal'])) {
	$base=$_POST['base'];
	$altura=$_POST['altura'];

	$rectangulo= new Rectangulo($base, $altura);

	$pe=$rectangulo->perimetro();
	$area=$rectangulo->area();
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
		<h2>Rectangulo</h2>
		<form action="cal_rectangulo.php" method="POST">
			<input type="number" name="base" placeholder="Base" >
			<input type="number" name="altura" placeholder="Altura">
			<input type="submit" name="cal" value="Calcular">
		</form>
		<h5>El perimetro del rectangulo es: <?php echo $pe; ?></h5>
		<h5>El Area del rectangulo es: <?php echo $area; ?></h5>
	</main>
</body>
</html>