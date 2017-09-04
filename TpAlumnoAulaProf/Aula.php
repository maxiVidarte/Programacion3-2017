<?php 
include_once "./Persona.php";
include_once "./Profesor.php";
include_once "./Alumno.php";
//include_once "./miInterfaz.php"
interface IMostrarPersonas{
    public function MostrarPersonas();
}
class Aula implements IMostrarPersonas
{
    public $nomAul;
    public $alumnos;
    public $profesores;
    
    function __construct($nombre)
    {
        $this->nomAul = $nombre;
        $this->alumnos = array();
        $this->profesores = array();
    }
    public function AgregarAlumno($alumno){
        array_push($this->alumnos,$alumno);
    }
    public function AgregarProfesor($profesor){
        array_push($this->profesores,$profesor);
    }
    public function MostrarPersonas(){
        
        
    }
}


?>