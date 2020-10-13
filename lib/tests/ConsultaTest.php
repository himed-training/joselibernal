<?php
use PHPUnit\Framework\TestCase;
require "./src/Consulta.php";

final class ConsultaTest extends TestCase{
	//private $valor = "29/02/2000";
	
	public function testConsultaEsValida()
    {    	
        $id = "1";
        $nombre = "Juan";
        $apellido = "Perez";
        $fecha = "01/02/2020";

        $objCons = new Consulta($id, $nombre, $apellido, $fecha);        
        $this->assertTrue($objCons->consultaEsValida($id, $nombre, $apellido, $fecha));
    }
}
?>