<?php

interface uso{
    public function sentarse();
}

class silla{
    static $arg;
    public $material;
    public $tamano;
    public $patas;

    function __construct(){
        $arg = (func_num_args()) ? (object) func_get_args()[0] : (object) null;
        $this->tamano = $arg->TAMANO;
        $this->material = $arg->MATERIAL;
        $this->patas = $arg->PATAS;
    }
    public function sentarse(){
        // $arg = (func_num_args()) ? (object) func_get_args()[0] : (object) null;
        // if($this->patas == 4){
        //     return "Me sente en una silla normal.";
        // }else{
        //     return "Me sente en una silla con ".$this->patas;
        // }
        return "Me sente en una silla normal.";
    }
}
class mesedora extends silla {//con extends estoy heredando los atributos y metodos de la clase silla.
    function __construct(){
        $arg = (func_num_args()) ? (object) func_get_args()[0] : (object) null;
        $this->patas = $arg->PATAS;
    } 
    public function sentarse(){
        // $arg = (func_num_args()) ? (object) func_get_args()[0] : (object) null;
        return "Me sente en una silla mesedora y me balancie.";//Para hacer polimorfismo debe ser una extension osea algo heredado, y llamar el mismo metodo(o funcion) y cambiar el codigo dentro del metodo.
    }  
}
$objeto = new mesedora([
    "TAMANO"=> (int)80,
     "PATAS" => (string)"2 patas de arcos", 
     "MATERIAL"=>(string)"Madera"]);
print_r(([$objeto, 'sentarse'])());


?>