<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="css/estacion.css">
</head>
<body bgcolor="#6C6061">
<div id="chipid">
	<?php echo $_GET["chipid"]; ?>
</div>	

<div class="contenedor">
	
	<div class="info">
		<div class="nombre"></div>
		<div class="fecha"></div>
	</div>

	<div class="info1">
		<div class="temperatura"></div>
		<div class="humedad"></div>
	</div>

</div>


<script type="text/javascript" src="js/estacion.js"></script>


	
</body>
</html>