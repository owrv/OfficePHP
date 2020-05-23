<?php

class folha {
    
    private $codigo = 4;
    private $descricao = 0;
    private $referencia = 0;
    private $vencimentos = 0;
    private $descontos = 0;

    private $recebeCodigo = 0;
    private $recebeDescricao = 0;
    private $recebeReferencia = 0;
    private $recebeVencimentos = 0;
    private $recebeDscontos = 0;


    function inicia(){
        if ($this->setCodigo) {
            # code...
        }
    }

    function getCodigo(){
        echo '1';
    }
    function getDescricao(){
        echo '1';

    }
    function getReferencia(){
        echo '1';

    }
    function getVencimentos(){
        echo '1';

    }
    function getDescontos(){

    }

    function setCodigo($x){
        $this->codigo = $x;
        echo "Foi gravado o código" . $codigo;
    }
    function setDescricao($x){

    }
    function setReferencia($x){

    }
    function setVencimentos($x){

    }
    function setDescontos($x){

    }
}