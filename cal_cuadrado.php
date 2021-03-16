<?php 
require 'funciones/poligono.php';
require 'funciones/cuadrado.php';
$pe='';
$area='';
if (isset($_POST['cal'])) {
	$lado=$_POST['lado'];

	$cuadrado= new Cuadrado($lado);
	$pe=$cuadrado->perimetro();
	$area=$cuadrado->area();
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
		<h2>Cuadrado</h2>
		<form action="cal_cuadrado.php" method="POST">
			<input type="number" name="lado" placeholder="medida de lados">
			<input type="submit" name="cal" value="Calcular">
		</form>
		<h5>El perimetro del Cuadrado es: <?php echo $pe; ?></h5>
		<h5>El area del Cuadrado es: <?php echo  $area?></h5>
	</main>
</body>
</html>