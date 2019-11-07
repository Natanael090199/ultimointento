<?php
include "conn.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">

	<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('Tabla_Comentarios_16').innerHTML = req.responseText;
				}
			}

			req.open('GET', 'ver_comentarios.php', true);
			req.send();
		}

		//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){ajax();}, 1000);
	</script>
</head>
<body onload="ajax();">
	
		

	<div id="contenedor">
		<div id="caja-chat">
			<div id="chat"></div>
		</div>

		<form method="POST" action="comentario.php">
						
			<textarea name="comentario" placeholder="Ingresa tu comentario"></textarea>
			<input type="submit" name="enviar" value="Enviar">
		</form>
		

		<?php
			if (isset($_POST['enviar'])) {
				
				
				$comentario = $_POST['comentario'];


				$consulta = "INSERT INTO Tabla_Comentarios_16 (Tabla_Comentarios_16_Comentario) VALUES ('$comentario')";

                if (mysqli_query($conn, $consulta)) {
					echo "Gracias por su comentario";
				}
			}

		?>
    </div>

        
    </body>
    </html>