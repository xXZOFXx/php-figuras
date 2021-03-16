<?php 
	require 'funciones/poligono.php';
	require 'funciones/triangulo.php';
	$pe='';
	$area='';
	if (isset($_POST['cal_per'])) {
		# code...
	
	
	$ladoa=$_POST['lado_a'];
	$ladob=$_POST['lado_b'];
	$ladoc=$_POST['lado_c'];
	$altura=$_POST['altura'];
	$triangulo= new Triangulo($ladoa, $ladob, $ladoc, $altura);
	
	$pe=$triangulo->perimetro();
	$area=$triangulo->area();
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
		<h2>Triangulo</h2>
		
		<form action="cal_triangulo.php" method="post">
			<input type="number" name="lado_a" placeholder="lado a">
			<input type="number" name="lado_b" placeholder="lado b">
			<input type="number" name="lado_c" placeholder="lado c">
			<input type="number" name="altura" placeholder="altura">
			<input type="submit" id="btn_cal_peri" name="cal_per" value="Calcular">

			<h5>el perimetro del triangulo es : <?php echo $pe; ?></h5>
			<h5>el area del triangulo es : <?php echo $area; ?></h5>
		</form>
		
		
	</main>
</body>
</html>