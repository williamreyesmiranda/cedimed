<?php
$documento=$_POST['documento'];
$nombres=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$telefonos=$_POST['telefono'];
$entidad=$_POST['entidad'];
$modalidad=$_POST['modalidad'];
$estudio=$_POST['estudio'];
$asesor=$_POST['asesor'];
$observaciones=$_POST['observaciones'];

include ("../conexion.php");

$conectar= new Conexion();
$consultaSQL=("INSERT INTO pacientes_modalidad(documento, nombres, apellidos, telefonos, entidad, estudio, modalidad, asesor, observaciones)
                     VALUES ('$documento','$nombres','$apellidos','$telefonos',$entidad,$estudio,$modalidad,$asesor,'$observaciones');");
$ejecutar=$conectar->agregarDatos($consultaSQL);

echo $ejecutar;
