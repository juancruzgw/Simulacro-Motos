<?php 
include_once 'Cliente.php';
include_once 'Moto.php';
include_once 'Venta.php';
include_once 'Empresa.php';
/**Implementar un script TestEmpresa en la cual:
 * 
1. Cree 2 instancias de la clase Cliente: $objCliente1, $objCliente2.
2. Cree 3 objetos Motos con la información visualizada en la tabla: código, costo, año fabricación,
descripción, porcentaje incremento anual, activo.*/

$objCliente = new Cliente ("Jose","Perez", true, "DNI",5532235);
$objCliente1 = new Cliente ("JUAN", "GESLOWSKI", true,"DNI", 44481483);
$colClientes = [$objCliente,$objCliente1];


$objMoto = new Moto (11, 2230000,2022,"Benelli Imperiale 400)",85, true);
$objMoto1 = new Moto (12, 584000,2021,"Zanella Zr 150 Ohc )",70, true);
$objMoto2 = new Moto (13, 999900,2023,"Zanella Patagonian Eagle 250 ",55, false);

$coleccionMotos = [$objMoto,$objMoto1,$objMoto2];
$ventasRealizadas = [];




$colCodigosMoto = [11,12,13];
// 4- 
$objEmpresa = new Empresa("Alta Gama","Av Argenetina 123", $colClientes,$coleccionMotos,$ventasRealizadas);
//$objEmpresa->registrarVenta($colCodigosMoto, $objCliente2);

/*
4. Se crea un objeto Empresa con la siguiente información: denominación =” Alta Gama”, dirección= “Av
Argenetina 123”, colección de motos= [$obMoto1, $obMoto2, $obMoto3] , colección de clientes =
[$objCliente1, $objCliente2 ], la colección de ventas realizadas=[].*/

$objEmpresa->registrarVenta($colCodigosMoto,$objCliente1);

//echo $objEmpresa; //5 anduvo
//$colCodigosMoto1 = [0];

//$objEmpresa->registrarVenta($colCodigosMoto1, $objCliente); // 6
//echo $objEmpresa;
//$objEmpresa->registrarVenta($colCodigosMoto, $objCliente);
/*
$posibleMoto = $objEmpresa->retornarMoto(1);
if($posibleMoto!==null){
    echo $posibleMoto;

}else {
    echo "No existe moto con ese codigo";
}*/
/*
5. Invocar al método registrarVenta($colCodigosMoto, $objCliente) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
punto 1) y la colección de códigos de motos es la siguiente [11,12,13]. Visualizar el resultado obtenido.
*/
//$resultado1 = $objEmpresa->registrarVenta($colCodigosMoto, $objCliente1). "\n";
//echo $resultado1;
//echo "RES: ". $resultado1 . "\n";


/*
6. Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
punto 1) y la colección de códigos de motos es la siguiente [0]. Visualizar el resultado obtenido.*/
/*$colCodigosMotos = [0];
$res = $objEmpresa->registrarVenta($colCodigosMotos, $objCliente);
echo $res;*/


//$resultado = $objEmpresa->registrarVenta($colCodigosMotos1, $objCliente1);
//echo "1er: ". $resultado."\n";

/*
7. Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
punto 1) y la colección de códigos de motos es la siguiente [2]. Visualizar el resultado obtenido.
8. Invocar al método retornarVentasXCliente($tipo,$numDoc) donde el tipo y número de documento se
corresponden con el tipo y número de documento del $objCliente1.
9. Invocar al método retornarVentasXCliente($tipo,$numDoc) donde el tipo y número de documento se
corresponden con el tipo y número de documento del $objCliente2
10. Realizar un echo de la variable Empresa creada en 2.
 */
$colCodigosMoto2 = [2];
//$pre = $objEmpresa->registrarVenta($colCodigosMoto2, $objCliente);
//echo $pre; // punto 7 anduvo;
//$res = $objEmpresa->retornarVentasXCLiente("DNI", 44481483);
//print_r($res) ; // punto 8 Anduvo;
//$objetoCliente = new Cliente ("JUAN", "GESLOWSKI", true,"DNI", 44481483);

//echo $objetoCliente; anda
//////////$objMoto4 = new Moto (4, 1100,2002,"Tira tiros :)",2, true);


//$res=$objEmpresa->retornarVentasXCliente("DNI",5532235); // punto 9 funciono

//print_r ($res);
// PUNTO 10
echo $objEmpresa; // anduvo :)

//$arregloMotos = [$objMoto,$objMoto1,$objMoto2,$objMoto3,$objMoto4];
//$objVenta = new Venta (54,"ayer",$objetoCliente,$arregloMotos,412);
//echo $objMoto; 
//$objMoto5 = new Moto (4, 1100,2002,"La MotoMoto",2, false);

//$x = $objVenta->incorporarMoto($objMoto5). "\n";


//if ($x){


//echo $objVenta->verMotos();