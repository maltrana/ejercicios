<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-11-13 at 08:21:11.
 */
require_once 'supermercado.php';

class supermercadoTest extends PHPUnit_Framework_TestCase {

    /**
     * @var supermercado
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new supermercado;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers supermercado::__constructor
     * @todo   Implement test__constructor().
     
    public function test__constructor() {
    
    }
     */
    
    
    /**
     * @covers supermercado::calculaprecio
     * @todo   Implement testCalculaprecio().
     */
    public function testCompra1() {

        $aCompra = ['TAZA', 'TAZA', 'TAZA', 'TAZA'];
        $this->assertEquals(15, $this->object->calcula_precio($aCompra));
    }

    public function testCompra2() {

        $aCompra = ['LIBRETA', 'LIBRETA', 'LIBRETA', 'TAZA'];
        $this->assertEquals(24, 50, $this->object->calcula_precio($aCompra));
    }

    public function testCompra3() {

        $aCompra = [
            'CAMISETA',
            'CAMISETA',
            'LIBRETA',
            'TAZA',
            'CAMISETA',
            'LIBRETA',
            'TAZA',
            'CAMISETA',
            'LIBRETA',
            'LIBRETA',
            'LIBRETA'
        ];
        $this->assertEquals(92, 25, $this->object->calcula_precio($aCompra));
    }

}
