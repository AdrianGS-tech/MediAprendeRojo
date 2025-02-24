<?php
                require('conexion.php');
                    
                  $existe=mysqli_query($conectar, "SELECT * FROM mediaprende where correo='$_POST[correo]'");
                if(mysqli_num_rows($existe)>0){
                  echo "Intenta con otro correo<br>";
                }
                else{
                mysqli_query($conectar,"insert into usuario(nombre, apellidos, edad, telefono, correo, contrasena) values 
                   ('$_POST[nombre]',
                    '$_POST[apellidos]',
                    '$_POST[edad]',
                    '$_POST[telefono]',
                    '$_POST[correo]',
                    '$_POST[contrasena]')",);
                
                mysqli_close($conectar);
                echo "Registro exitoso<br>";
                }
?>





<!-----Otra opcion----------------->

<?php
include ("conexion.php");

$nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
$apellidos = mysqli_real_escape_string($conexion, $_POST["apellidos"]);
$edad = mysqli_real_escape_string($conexion, $_POST["edad"]);
$telefono = mysqli_real_escape_string($conexion, $_POST["telefono"]);
$correo = mysqli_real_escape_string($conexion, $_POST["correo"]);
$contrasena = mysqli_real_escape_string($conexion, $_POST["contrasena"]);


$insertar = "INSERT INTO usuarios(nombre, apellidos, edad, telefono, correo, contrasena) VALUES ('$nombre', '$apellidos', '$edad', '$telefono', '$correo', '$contrasena')";

$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
	echo "<script>alert('Se ha registrado el usuario correctamente');window.location='\PRACTICAS\MediAprende'</script>";
}else{
	echo "<script>alert('No se pudo registrar el usuario');window.history.go(-1);</script>";
}
