<?php
	include "conn.php";
	///consultamos a la base
	$consulta = "SELECT * FROM Tabla_Comentario_16 ORDER BY Tabla_Comentario_16_Id DESC";
	$ejecutar = $conn->query($consulta); 
	while($fila = $ejecutar->fetch_array()) : 
?>
	<div id="datos-chat">

		<span style="color: #848484;"><?php echo $fila['comentario']; ?></span>

	</div>
	
	<?php endwhile; ?>