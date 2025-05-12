<?php
include 'rel="stylesheet" href="style.conexion"';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$genero=$_POST['genero'];
$semestre=$_POST['semestre'];
$carrera=$_POST['carrera'];
$turno=$_POST['turno'];
$grupo=$_POST['grupo'];
$ingresar="INSERT into  alumnos values('', '$nombre', '$apellido', '$genero', '$semestre', '$carrera', '$turno', '$grupo')";
$query = mysqli_query($conectar, $ingresar);

if($query){
    echo "<script> alert('Ingresado Correcto')
    location.href = '../vista/ventas.html';
    </script>";
} else{
    "<script> alert('Error'
    location.href = '../vista/ventas.html';
    </script>";
}
