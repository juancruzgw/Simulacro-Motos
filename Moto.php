<?php 
/**En la clase Moto:
1. Se registra la siguiente información: código, costo, año fabricación, descripción, porcentaje
incremento anual, activa (atributo que va a contener un valor true, si la moto está disponible para la venta y false en caso contrario).
2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método toString para que retorne la información de los atributos de la clase.
5. Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una moto. Si la moto no se encuentra disponible para la venta retorna un valor < 0. Si la moto está disponible para
la venta, el método realiza el siguiente cálculo:

$_venta = $_compra + $_compra * (anio * por_inc_anual)
donde $_compra: es el costo de la moto.
anio: cantidad de años transcurridos desde que se fabricó la moto.
por_inc_anual: porcentaje de incremento anual de la moto. */

class Moto {
    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porcientoAnualMas;
    private $activa;

    public function __construct($codigo, $costo,$anioFabricacion,$descripcion,$porcientoAnualMas, $activa)  {
        $this->codigo = $codigo;
        $this->costo = $costo;
        $this->anioFabricacion = $anioFabricacion;
        $this->descripcion = $descripcion;
        $this->porcientoAnualMas = $porcientoAnualMas;
        $this->activa = $activa;
    }
 
    public function getCodigo()
    {
        return $this->codigo;
    }
 
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

    }

    public function getCosto()
    {
        return $this->costo;
    }

    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

 
    public function getAnioFabricacion()
    {
        return $this->anioFabricacion;
    }

 
    public function setAnioFabricacion($anioFabricacion)
    {
        $this->anioFabricacion = $anioFabricacion;

    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;   
    }
    public function getPorcientoAnualMas(){
        return $this->porcientoAnualMas;
    }


    public function setPorcientoAnualMas($porcientoAnualMas)
    {
        $this->porcientoAnualMas = $porcientoAnualMas;      
    }

 
    public function getActiva()
    {
        return $this->activa;
    }
    public function setActiva($activa)
    {
        $this->activa = $activa;
    }

    public function estadoAstring (){
        if ($this->getActiva()){
            $dispo = "ACTIVA";
        }
        else {
            $dispo = "NO DISPONIBLE";
        }
        return $dispo;
    }

    public function __toString(){
        $cadena = "---- INFO MOTO ----" . "\n"."CODIGO: ".$this->getCodigo()."\n"."PRECIO $". $this->getCosto()."\n". "Año de fabricacion: ". $this->getAnioFabricacion() . "\n"."Descripcion: ". $this->getDescripcion() . "\n". "Porcentaje de incremento: ". $this->getPorcientoAnualMas() ."%"."\n". "Disponibilidad -> ". $this->estadoAstring ();
        return $cadena;
    }

    public function darPrecioVenta (){
        
        $estado = $this->getActiva();
        $costo = $this->getCosto();
        $anio = $this->getAnioFabricacion();
        $anioAct = 2024;
        $incremento = $this->getPorcientoAnualMas();
        $anio = $anioAct - $anio;
        $venta = 0;
        $incrementoDecimal = 0;
        if (!$estado){
            $venta = -1;
        }
        else {
            $incrementoDecimal = $incremento/100;
            $venta = $costo + $costo * ($anio*$incrementoDecimal);
        }
        return $venta;
    }
}