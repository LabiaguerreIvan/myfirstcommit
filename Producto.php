<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABM Producto</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <center><h1>Producto</h1></center>
<p>
    <center><h3>Ingrese los datos del Producto</h3></center>
</p>


<div class="container text-center">
  <div class="row">
    <div class="col-md-4">
    <input type="text" name="txtcodigo" id="txtcodigo" class="form-control" placeholder="Ingrese el codigo del producto" aria-label="Cod Producto">
</div>
    <div class="col-md-4 offset-md-4">
    <input type="text" name="txtnombre" id="txtnombre" class="form-control" placeholder="Nombre del Producto" aria-label="Nombre">	
    </div>
  </div>
</div>

<div class="container text-center">
  <div class="row">
    <div class="col-md-4">
    <input type="text" name="txtprecio" id="txtprecio" class="form-control" placeholder="Precio del Producto" aria-label="Cod Producto">
</div>
    <div class="col-md-4 offset-md-4">
    <input type="text" name="txtstock" id="txtstock" class="form-control" placeholder="Stock del Producto" aria-label="Nombre">	
    </div>
  </div>
</div>

<div class="container text-center">
  <div class="row">
    <div class="col-md-4">
    <input type="text" name="txtbarra" id="txtbarra" class="form-control" placeholder="Ingrese codigo de barra" aria-label="Cod Producto">
</div>
    <div class="col-md-4 offset-md-4">
    <input type="text" name="txtestproducto" id="txtestproducto" class="form-control" placeholder="Ingrese codigo del estado de grupo" aria-label="Nombre">	
    </div>
  </div>
</div>

<div class="container text-center">
  <div class="row">
    <div class="col-md-4">
    <input type="text" name="txtdesc" id="txtdesc" class="form-control" placeholder="Descripcion del Producto" aria-label="Cod Producto">
</div>
    <div class="col-md-4 offset-md-4">
    <input type="text" name="txtimagen" id="txtimagen" class="form-control" placeholder="Ingresar imagen" aria-label="Nombre">	
    </div>
  </div>
</div>



<div align="center">
<form action="guardarproducto.php" method="POST">

	<input type="submit" name="btnGuardar" Value="Guardar"/>
</form>
</div>
<br>


<table border=1>
	<theader>
	<th>Codigo tipo</th>
	<th>Nombre del producto</th>
    <th>Precio</th>
    <th>Stock</th>
    <th>Codigo de Barras</th>
    <th>Codigo Estado Producto</th>
    <th>Descripcion del producto</th>
    <th>Imagen</th>
	</theader>

	<tbody>
		<?php
		//nombre de la base de datos a la que me quiero conectar
		$nom_bdd = "prod_fleitas_labiaguerre";
		//Necesito nombre del servidor (localhost, server local), usuario (root) y clave de acceso (en este caso vacía, uds ponen su clave) a la BDD
		$conect = mysqli_connect("localhost","root","","prod_fleitas_labiaguerre") or die("No se pudo conectar al servidor de base de datos, revise los parámetros.");
		$consultaSQL = "SELECT * from producto";
		$datos = mysqli_query($conect, $consultaSQL);

		while($fila=mysqli_fetch_array($datos)){
			echo "<tr>"; 
			echo "<td>".$fila['cod_producto']."</td>";
			echo "<td>".$fila['cod_tipo']."</td>";
            echo "<td>".$fila['nombre']."</td>";
            echo "<td>".$fila['precio']."</td>";
            echo "<td>".$fila['stock']."</td>";
            echo "<td>".$fila['cod_barra']."</td>";
            echo "<td>".$fila['cod_estado_producto']."</td>";
            echo "<td>".$fila['descripcion_producto']."</td>";
            echo "<td>".$fila['imagen']."</td>";
			echo "</tr>";
		}
		mysqli_close($conect);
		?>
	</tbody>
</table>

<div align="center"> 
	<a href="menu.html">Volver al Inicio</a>
</div>
  </body>
</html>
