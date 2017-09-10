<?php 
include_once "./Alumno.php";
include_once "./Persona.php";
include_once "./Aula.php";

$instituto = new Instituto("Los Pitagoricos");
$alum1 = new Alumno("maximiliano","vidarte","masculino",1234);
$alum2 = new Alumno("cintia","rifici","femenino",1235);
$alum3 = new Alumno("chuck","norris","masculino",1);
$profe1 = new Profesor("Steven","Seagal","masculino",2);
$profe2 = new Profesor("Keanu","reeves","masculino",3);
$aula1 = new Aula("1erGrado");
$aula1->AgregarAlumno($alum1);
$aula1->AgregarAlumno($alum2);
$aula1->AgregarAlumno($alum3);
$aula1->AgregarProfesor($profe1);
//echo $aula1->MostrarPersonas();
echo $aula1->BuscarAlumno($alum1);
//echo $alum1->MostrarDatos()."</br>";
//echo $alum2->MostrarDatos()."</br>";
//echo $alum3->MostrarDatos()."</br>";

?>