<?php 
include_once "./Aula.php";
class Instituto 
{
    public $nombre;
    public $arrayAulas;
    function __construct($nombre)
    {
        $this->nombre = $nombre;
        $this->arrayAulas = array();
    }
    
}


?>