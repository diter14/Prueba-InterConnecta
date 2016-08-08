<!DOCTYPE html>
<html>
<head>
	<title>Listado de Records</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
	<script type="text/javascript">
		//Creando funcion para listar los récords - método AJAX
		function listar(){
			var destino = document.getElementById("listado");
			var documento = new XMLHttpRequest();
			if (documento){
				documento.open("post","formListado.php",false);
				documento.send(null);
				destino.innerHTML = documento.responseText;
				console.log(documento.responseText);
			}
		}
	</script>
</head>
<body>
<div align="center">
	<div class="contenedor">
		<div class="header">
			<h1 id="h1">Prueba</h1>
			<img id="ic" src="img/ic.png">
			<img id="fondo" src="img/fondo4.jpg">
		</div>
		<h1>Pulsa en el botón para obtener los récords del módulo Leads del CRM</h1>
		<a href="#" id="mostrar" onclick="listar()">MOSTRAR</a>
	</div>

	<div id="listado">
	</div>
	<footer class="footer">
		<h1>
			Hecho por Diesther Alonso Terrones Ayala &copy;2016
			<a class="icon-facebook" href="https://www.facebook.com/diter.terrones95"></a>
			<a class="icon-twitter" href="https://twitter.com/Diter_Terrones"></a>
		</h1>
	</footer>
</div>
</body>
</html>