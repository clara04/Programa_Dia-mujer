<html>
	<head>
		<title>Acceso a la base de datos</title>
		<style type="text/css">
			.tablaalta {
				padding: 14px;
				margin: 10px;
			}

			.tablaalta td {
				padding: 20px;
				border-radius: 25px;
			}

			tr th {
				background-color: azure;
			}
			tr td {
				background-color: blue;
				color: yellow;
			}
			a {
				color: white;
			}

			a:hover {
				// font-weight: bold;
				color: red;
			}

			a:visited {
				color: olive;
			}

		</style>
	</head>
		<body>
			<h1 style="color:red;">Acceso a BD MySQL</h1>
		<form name="frmalta" action="libro.php" method="post">
			<table class="tablalibro">
				<tr>
					<td colspan="2">Nuevo visitante:</td>
				<tr>
				
				<td>Sexo:</td>
				<td><input type="radio" name="txtsexo" value="F" checked="checked"></td>Femenino
				<td><input type="radio" name="txtsexo" value="M"></td>Masculino
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Guardar"></td>
				</tr>
			</table>
		</form>
			<?php
			$conexion = mysqli_connect("localhost","root","","6aisc");
			$consulta = mysqli_query($conexion,"select * from visitas;");
			if (mysqli_num_rows($consulta) > 0) {
				echo "<table border=1>";
				echo "<tr><th colspan=4>Libro de visitas</th></tr>";
				echo "<tr><th>Nombre</th><th>Sexo</th><th>Mensaje</th></tr>";
				while ($registro = mysqli_fetch_array($consulta)){
					echo "<tr>";
					echo "<td>".$registro["Nombre"]."</td>";
					echo "<td>".$registro["Sexo"]."</td>";
							if($registro["sexo"]=="Femenino")
							{
								echo="<td><style='color:pink;'>".$registro["Mensaje"]."</td>";
							}
							else
							{
								echo="<td><style='color:blue;'>".$registro["Mensaje"]."</td>";
							}

		?>
					
						<a href="index.htm">Libro de visitas</a>
					
		<?php
				}
			}
		?>
		</body>
</html>