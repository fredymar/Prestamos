<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo COMPANY; ?></title>
	<?php include "./vistas/inc/link.php"; ?>
</head>
<body>
	<?php 
		$peticionAjax = false;
		require_once "./controlador/vistasControlador.php"; 

		$IV = new vistasControlador();
		$vistas = $IV->obtener_vistas_controlador();

		if ($vistas == "login" || $vistas == "404") {
			require_once "./vistas/contenidos/".$vistas."-view.php";
		} else {
		
	?>
	<!-- Main container -->
	<main class="full-box main-container">

		<!-- Nav Lateral -->
		<?php include "./vistas/inc/nav_lateral.php"; ?>
		

		<!-- Page content -->
		<section class="full-box page-content">
			
			<?php 
				include "./vistas/inc/NavBar.php"; 
				include $vistas;
			?>
			
		</section>
	</main>

	<?php } include "./vistas/inc/script.php"; ?>

</body>
</html>