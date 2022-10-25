<?PHP
//Obtener valores que ingresó el usuario
$Cod_tipo = $_POST['txtcodigo'];
$Nombre_producto = $_POST['txtnombre'];
$Precio = $_POST['txtprecio'];
$Stock =  $_POST['txtstock'];
$Cod_barra =  $_POST['txtbarra'];
$Cod_estado_producto =  $_POST['txtestproducto'];
$Descripcion_producto =  $_POST['txtdesc'];
$Imagen =  $_POST['txtimagen'];


//establecer conexión: usar mysqli_connect
$con= mysqli_connect("localhost","root","","prod_fleitas_labiaguerre") or die("Error al conectarse contacte al Administrador.");


//Armar la consulta SQL
$sql = "INSERT INTO  producto (cod_tipo,nombre,precio,stock,cod_barra,cod_estado_producto,descripcion_producto,Imagen) VALUES ($Cod_tipo,'$Nombre_producto',$Precio,$Stock,$Cod_barra,$Cod_estado_producto,'$Descripcion_producto','$Imagen')";

//Ejecutar la consulta: usar mysqli_query

$resultado = mysqli_query($con,$sql);
//Controlar la ejecución del insert (de la consulta)

if($resultado){
	echo '<script> alert("Los datos se registraron exitosamente");window.location="Producto.php";</script>';
}else{
	echo '<script> alert("Se produjo un error. Los datos NO se registraron Contacte al administrador.");window.location="Producto.php";</script>';
}
//cerrar la conexión
mysqli_close($con);


?>