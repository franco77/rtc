<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testeConnectionFactory
 *
 * @author Renan
 */

include('includes.php');

class testeOperacao extends PHPUnit_Framework_TestCase {

    public function testSimple() {
        
        $estado = new Historico();
        
        $estado->nome = "TE";
        
        $estado->merge(new ConnectionFactory());
        
        $estado->merge(new ConnectionFactory());
        
        $estado->delete(new ConnectionFactory());
        
    }

}
