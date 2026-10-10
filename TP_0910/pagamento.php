<?php
abstract class pagamento{
    protected $valor;
    public function __construct($valor){
        $this->valor = $valor;
    }
    abstract public function processar();
    //método abstrato obriga as classes filhas a implementar o método processar()
    
}