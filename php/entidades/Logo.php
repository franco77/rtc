<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Email
 *
 * @author Renan
 */
class Logo {
    public $id;

    public $empresa;
    public $logo;
    public $cor_predominante;

    function __construct() {

        $this->id = 0;
        $this->empresa = null;
        
    }

    public function merge($con) {

        if ($this->id == 0) {
            
            $ps = $con->getConexao()->prepare("INSERT INTO logo(id_empresa,logo,cor_predominante) VALUES(".$this->empresa->id.",'$this->logo','$this->cor_predominante')");
            $ps->execute();
            $this->id = $ps->insert_id;
            $ps->close();
            
        } else {

            $ps = $con->getConexao()->prepare("UPDATE logo SET id_empresa=".$this->empresa->id.",logo='$this->logo',cor_predominante='$this->cor_predominante' WHERE id=$this->id");
            $ps->execute();
            $ps->close();
            
        }
        
    }

    public function delete($con) {

        $ps = $con->getConexao()->prepare("DELETE FROM parametros_emissao WHERE id = " . $this->id);
        $ps->execute();
        $ps->close();
    }

}
