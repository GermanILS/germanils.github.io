 <?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect ("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db ("formulario",$link) or die("<h2>Error de Conexion</h2>");


$nombre = $_POST['nombreusuario'];
$apellido = $_POST['apellidousuario'];
$edad = $_POST['edadusuario'];
$direccion = $_POST['direccionusuario'];
$ccp = $_POST['ccpusuario'];
$colonia = $_POST['coloniausuario'];
$estado = $_POST['estadousuario'];
$telefono = $_POST['telefonousuario'];
$higado= $_POST['Higado'];
$corazon= $_POST['Corazon'];
$pulmon = $_POST['Pulmon'];
$pancreas = $_POST['Pancreas'];
$intestino = $_POST['Intestino'];
$rinon= $_POST['Rinon'];
$cornea= $_POST['Cornea'];
$ojo = $_POST['Ojo'];
$brazo= $_POST['Brazo'];
$venas = $_POST['Venas'];

mysql_query("INSERT INTO usuarios VALUES  ('','$nombre','$apellido','$edad','$direccion','$ccp','$colonia','$estado','$telefono','$higado','$corazon','$pulmon','$pancreas','$intestino','$rinon','$cornea','$ojo','$brazo','$venas') ", $link) or die ("<h2>Error de conexion</h2>");
echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	'


?>