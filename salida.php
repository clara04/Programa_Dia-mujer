<html>
	<head>
		<title>Programa Dia de la mujer -Libro de visitas</title>
		<style type="text/css">
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
			<h1>Libro de Visitantes</h1>
			<?php
				$nombre = $_GET["txtnombre"];
				$sexo = $_GET["txtsexo"];
				$mensaje =$_GET["txtmensaje"];

				$conexion = mysqli_connect("localhost", "root","","CDLFCI_Dia mujer");
				$consulta = mysqli_query($conexion,"select * from visitas;");
					if(mysqli_num_rows($consulta)>0)
					{
						echo = "<table border = 1>";
						echo = "<tr><th colspan=4>Libro de visitas</th></tr>";
						echo = "<tr><th>Nombre</th><th>Sexo</th><th>Mensaje</tr>";
							while($registro = mysqli_fetch_array($consulta))
							{
								echo = "<tr>";
								echo ="<td>".$resgistro["nombre"]."</td>";
								echo = "<td>".$registro["sexo"]."</td>";
								echo = "<td>".$registro["mensaje"]."</td>";
							}
						}
					}
			?>
			<a href ="index.htm">Libro de visitas</a>
			<br>
		</body>
</html>