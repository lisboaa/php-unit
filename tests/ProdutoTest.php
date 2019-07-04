<?php
use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase{

    public function testSoma() {
        $produto = new Produto();

        $this->assertEquals(10, $produto->subTotal(2,5));
    }

}