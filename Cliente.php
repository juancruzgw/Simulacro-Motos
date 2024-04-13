<?php 
/**En la clase Cliente:
0. Se registra la siguiente información: nombre, apellido, si está o no dado de baja, el tipo y el número de documento. Si un cliente está dado de baja, no puede registrar compras desde el momento de su baja.
1. Método constructor que recibe como parámetros los valores iniciales para los atributos.
2. Los métodos de acceso de cada uno de los atributos de la clase.
3. Redefinir el método _toString para que retorne la información de los atributos de la clase.
 */

class Cliente {
    private $nombre;
    private $apellido;
    private $estado; // si(!$estado){ no puede comprar} no puede registrar compras desde el momento de su baja.
    private $tipoDoc;
    private $dni;

    public function __construct($n, $a, $e,$tD, $dni){
      $this->nombre = $n;
      $this->apellido = $a;
      $this->estado = $e;
      $this->tipoDoc = $tD;
      $this->dni = $dni;
    }
    //GETTERS 
    public function getNombre (){
        return $this->nombre;
    }
    public function getApellido (){
        return $this->apellido;
    }
    public function getEstado (){
        return $this->estado;
    }
    public function getTipoDoc (){
        return $this->tipoDoc;
    }
    public function getDni (){
        return $this->dni;
    }
    //SETTERS
    public function setNombre($nombre)
    {
        $this->nombre = $nombre; 
    } 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;  
    }
    public function setEstado($estado)
    {
        $this->estado = $estado;  
    }
    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;   
    }
    public function setDni($dni)
    {
        $this->dni = $dni;
    }
    // estado (bool) a string
    public function estadoAstring (){

        if ($this->getEstado()){
            $estadoString = "Activo";
        }
        else{
            $estadoString = "Dado de baja";
        }
        return $estadoString;
    }

    //toString

    public function __toString() {
        $cadena = "---INFO del cliente ---". "\n" . "Nombre: ". $this->getNombre(). "\n" . "Apellido: ". $this->getApellido() . "\n" . "Está ". $this->estadoAstring () . "\n" . "Tipo de Documento ".$this->getTipoDoc(). "\n"."Numero de Documento: " . $this->getDni();
        return $cadena;
        
    }
    //METODO 
    
    
}