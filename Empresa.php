<?php 

    /**En la clase Empresa: 
      
1. Se registra la siguiente información: denominación, dirección, la colección de clientes, colección de
motos y la colección de ventas realizadas.

2. Método constructor que recibe como parámetros los valores iniciales para los atributos de la clase.

3. Los métodos de acceso para cada una de las variables instancias de la clase.

4. Redefinir el método _toString para que retorne la información de los atributos de la clase.

5. Implementar el método retornarMoto($codigoMoto) que recorre la colección de motos de la Empresa y
retorna la referencia al objeto moto cuyo código coincide con el recibido por parámetro.

6. Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que recibe por
parámetro una colección de códigos de motos, la cual es recorrida, y por cada elemento de la colección
se busca el objeto moto correspondiente al código y se incorpora a la colección de motos de la instancia
Venta que debe ser creada. 
Recordar que no todos los clientes ni todas las motos, están disponibles
para registrar una venta en un momento determinado.
El método debe setear los variables instancias de venta que corresponda y retornar el importe final de la
venta.

7. Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro el tipo y
número de documento de un Cliente y retorna una colección con las ventas realizadas al cliente. */
class Empresa {
    private $denominacion;
    private $direccion;
    private $arrayCliente; // ARRAYS DE OBJETOSS
    private $arrayMotos; // 
    private $arrayVentas; //

    public function __construct($denominacion,$direccion,$arrayCliente,$arrayMotos,$arrayVentas) {
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->arrayCliente = $arrayCliente;
        $this->arrayMotos = $arrayMotos;
        $this->arrayVentas = $arrayVentas;
        
    }

    public function getDenominacion()
    {
        return $this->denominacion;
    }

    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;

       
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

       
    }

    public function getArrayCliente()
    {
        return $this->arrayCliente;
    }


    public function setArrayCliente($arrayCliente)
    {
        $this->arrayCliente = $arrayCliente;

      
    }

    public function getArrayMotos()
    {
        return $this->arrayMotos;
    }


    public function setArrayMotos($arrayMotos)
    {
        $this->arrayMotos = $arrayMotos;

       
    }

    public function getArrayVentas()
    {
        return $this->arrayVentas;
    }


    public function setArrayVentas($arrayVentas)
    {
        $this->arrayVentas = $arrayVentas;

       
    }
    public function verClientes (){

        if ($this->getArrayCliente()!= null){
           $clientes = $this->getArrayCliente();
            foreach ($clientes as $unCliente){
               $cadena = $unCliente->getNombre(). "\n";
               $cadena .= $unCliente->getApellido(). "\n";
               $cadena .= $unCliente->estadoAstring (). "\n";
               $cadena .= $unCliente->getTipoDoc(). "\n";
               $cadena .= $unCliente->getDni(). "\n";
            }
        }
        return $cadena;
    }
    public function verMotos (){

        if ($this->getArrayMotos()!= null){
           $motos = $this->getArraymotos();
            foreach ($motos as $unaMoto){
               $cadena = $unaMoto->getCodigo(). "\n";
               $cadena .= $unaMoto->getCosto(). "\n";
               $cadena .= $unaMoto->getAnioFabricacion(). "\n";
               $cadena .= $unaMoto->getDescripcion(). "\n";
               $cadena .= $unaMoto->getPorcientoAnualMas(). "\n";
            }

        }
        return $cadena;
    }

    public function verVentas (){
        $ventas =$this->getArrayVentas();

        if(empty($ventas)){
            $cadena = " - ";
        }else{
            foreach ($ventas as $venta){
                $cadena = $venta->getNumero(). "\n";
               $cadena .= $venta->getFecha(). "\n";
               $cadena .= $venta->getObjCliente(). "\n";
              // $cadena .= $venta->getArrayMotos(). "\n";
               $cadena .= $venta->getPrecioFinal(). "\n";
            }
        }
        return $cadena;
    }
    public function __toString()
    {
        $cadena = "Denominacion ". $this->getDenominacion(). "\n Direccion: ". $this->getDireccion(). "\n" . "Clientes: ". $this->verClientes()."\n". "MOTOS ".$this->verMotos(). "\n"."Ventas ".$this->verVentas();
        return $cadena;
    }
    /**5. Implementar el método retornarMoto($codigoMoto) que recorre la colección de motos de la Empresa y
    retorna la referencia al objeto moto cuyo código coincide con el recibido por parámetro */

    public function retornarMoto($codigoMoto){

        $motos = $this->getArrayMotos();
        $motoEncontrada = false;
        $i = 0;
        

        while ($i<count($motos) && !$motoEncontrada){
           $moto = $motos[$i];
          $codigo = $moto->getCodigo();
          $motoCoincide = null;
           if ($codigoMoto === $codigo){

            $motoEncontrada = true;
            $motoCoincide = $moto;//

           }
           else{
            $i++;
          } 
        }
       
        return $motoCoincide;
    }
  /*
    public function registrarVenta ($colCodigosMoto,$objCliente){
        $colMotos = $this->getArrayMotos();
        $precio = 0;
         $this->retornarMoto();

        foreach ($colCodigosMoto as $codigoMoto){
            $i=0;
            $bandera = false;
            
        while (count($colMotos)>$i && !$bandera){
            
            if ($colMotos->getCodigo() === $codigoMoto) {
                if ($objCliente->getEstado() && $colMotos[$codigoMoto]->getActiva()){

                    array_push($this->getArrayVentas(),$colMotos[$codigoMoto]);
                    $this->setArrayVentas($this->getArrayVentas());
                    $precio = $colMotos->darPrecioVenta();
                    $bandera = true;
                }
            } elseif (!$bandera){
                $i++;
            }
        } 
       

        }
        return $precio;
    }*/
        /**6. Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que recibe por
    parámetro una colección de códigos de motos, la cual es recorrida, y por cada elemento de la colección
    se busca el objeto moto correspondiente al código y se incorpora a la colección de motos de la instancia
    Venta que debe ser creada.
    Recordar que no todos los clientes ni todas las motos, están disponibles
    para registrar una venta en un momento determinado.
    El método debe setear los variables instancias de venta que corresponda y retornar el importe final de la
    venta. */
    public function registrarVenta($colCodigosMoto, $objCliente){

       $precioFinal = 0;
       $arrayVentas = [];
       $precioF = 0;
       $fecha = "Hoy";
       if(!empty($colCodigosMoto)){

       
       $numero = count($colCodigosMoto)+1;

       $seVendio = new Venta($numero, $fecha,$objCliente,$arrayVentas,$precioF);
            foreach ($colCodigosMoto as $codigoMoto) {

               $objCoincide = $this->retornarMoto($codigoMoto);

               if($objCoincide!==null){
               $estado = $objCoincide->getActiva();
               if ($estado && $objCliente->getEstado()){
                    
                    $arrayVentas = $seVendio->getArrayMotos();
                    $precioUnaMoto = $objCoincide->darPrecioVenta()+ $precioF;  
                    
                    //$precioFinal = $objCoincide->darPrecioVenta() + $precioFinal;
                    $precioFinal = $seVendio->getPrecioFinal()+$precioUnaMoto;
                    $seVendio->setPrecioFinal($precioFinal);
                    //print_r($precioFinal). "\n";
                }
              }
              if($seVendio->getPrecioFinal()>0){
              $arrayVentas[]= $seVendio;
              $this->setArrayVentas($arrayVentas);  
            }      
            }
        }
            return $precioFinal;

        }
       /**7. Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro el tipo y
    número de documento de un Cliente y retorna una colección con las ventas realizadas al cliente. */ 

    public function retornarVentasXCLiente ($tipo,$numDoc){
    $ventas = $this->getArrayVentas();
    $ventaCliente = [];

    foreach($ventas as $venta){
        $cliente = $venta->getObjCliente();
        if ($cliente->getDni() === $numDoc && $cliente->getTipoDoc() === $tipo ){
            array_push($ventaCliente,$venta);
            $this->setArrayVentas($ventaCliente);
           
        }
    }
    return $ventaCliente;

    }
    
   
}