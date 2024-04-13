<?php
/**En la clase Venta:
1. Se registra la siguiente información: número, fecha, referencia al cliente, referencia a una colección de
motos y el precio final.
2. Método constructor que recibe como parámetros cada uno de los valores a ser asignados a cada
atributo de la clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.

5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
Utilizar el método que calcula el precio de venta de la moto donde crea necesario */

class Venta {
    private $numero;
    private $fecha;
    private $objCliente; // OBJ
    private $arrayMotos; // array(OBJ)
    private $precioFinal;

    public function __construct($numero, $fecha,$objCliente,$arrayMotos,$precioFinal ) {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->objCliente = $objCliente;
        $this->arrayMotos = $arrayMotos;
        $this->precioFinal = $precioFinal;

    }
    

    public function getNumero()
    {
        return $this->numero;
    }


    public function setNumero($numero)
    {
        $this->numero = $numero;

    }


    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

    }


    public function getObjCliente()
    {
        return $this->objCliente;
    }


    public function setObjCliente($objCliente)
    {
        $this->objCliente = $objCliente;


    }

 
    public function getArrayMotos()
    {
        return $this->arrayMotos;
    }


    public function setArrayMotos($arrayMotos)
    {
        $this->arrayMotos = $arrayMotos;

       
    }

    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }

    public function setPrecioFinal($precioFinal)
    {
        $this->precioFinal = $precioFinal;

    }
    public function verMotos (){
        $cadena = "";
        $colMotos = $this->getArrayMotos();
        foreach ($colMotos as $unaMoto){
            $cadena .= $unaMoto->getCodigo() . "\n";
            $cadena .= $unaMoto->getCosto() . "\n";
            $cadena .= $unaMoto->getAnioFabricacion() . "\n";
            $cadena .= $unaMoto->getDescripcion() . "\n";
            $cadena .= $unaMoto->getPorcientoAnualMas() . "\n";
            $cadena .= $unaMoto->estadoAstring() . "\n";
        }
        return $cadena;
    } 

    public function __toString() {
        $cadena = "Numero de venta: ". $this->getNumero()."\n". "Fecha: ". $this->getFecha(). "\n". $this->getObjCliente()."\n". $this->verMotos(). "Precio Final: ".$this->getPrecioFinal();
        return $cadena;
    } 

    public function incorporarMoto($objetoMoto){
        
        $clienteActivo = $this->getObjCliente();
        $clienteEstado =  $clienteActivo->getEstado();
        
        $estado = $objetoMoto->getActiva();
    
        $arrayDeMotos = $this->getArrayMotos();

        if ($estado && $clienteEstado){ 
             array_push($arrayDeMotos,$objetoMoto);
             $this->setArrayMotos($arrayDeMotos);
             $precioFinal = $objetoMoto->darPrecioVenta();
             $this->setPrecioFinal($precioFinal);
        }
    }

}