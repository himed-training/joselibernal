<?php
use PHPUnit\Framework\TestCase;
require "./src/Paciente.php";

final class PacienteTest extends TestCase{
	//private $valor = "29/02/2000";
	
	public function testPacienteEsValido()
    {    	
        $id = "1";
        $nombre = "Juan";
        $apellido = "Perez";        

        $objPac = new Paciente($id, $nombre, $apellido);        
        $this->assertTrue($objPac->pacienteEsValido($id, $nombre, $apellido));
    }
}
?>