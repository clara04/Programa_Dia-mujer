<html>
	<head>
		<title>Entrada de datos</title>
		<style type="text/css">
			.tablalibro{
				padding: 14px;
				margin: 10px;
			}

			.tablalibro td {
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
	<h1>Acceso al libro de visitas</h1>
		<form name="frmdatos" method="get" action="bdlibro.php" action="salida.php">
			Introduce nombre:
			<input type="text" name="txtnombre">
			<br>
			<br>
			<font color = "blue" face ="AR DELANEY, arial,verdana" size ="4">Escribe tu sexo</font>
			<select name="txtsexo">
				<option>Femenino</option>
				<option>Masculino</option>
			</select>
			<br>
			<br>
			<font color = "blue" face ="AR DELANEY, arial,verdana" size ="4">Escribe un mensaje</font>
			<input type= "text" name="txtmensaje">
			<br>
			<input type="submit" value="Mostrar mensaje">
		</form>
	</body>
</html>