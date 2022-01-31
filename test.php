<?php
require("code.php");
use PHPUnit\Framework\TestCase;

class test extends TestCase
{
    /**
     * @test
     */
    function Diviser_Resultat()
    {
        $Resultat=diviser(10,5);
        $this->assertEquals ($Resultat, 2, "la division devrait retourner deux");
    }

    /**
     * @test
     */
    function Diviser_DivisionPar0()
    {
        try {
            $Resultat = diviser(10,0);
            $this->fail("ca aurait du plante");

        } catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "division par 0 impossible", "ce n'est pas la bonne exception");
        }
    }
    
}