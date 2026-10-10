<?php 
require_once 'veiculo.php';
class carro extends veiculo{
    private $portas;
    public function __construct($modelo, $marca, $portas){
        //chamado da calsse pai
        parent::__construct($modelo, $marca);
        $this->portas = $portas;
    }
    public function abrirporta(){
        echo"</br> O carro $this->modelo da marca
        $this->marca está abrindo a porta\n</p>";
    }
}
?>