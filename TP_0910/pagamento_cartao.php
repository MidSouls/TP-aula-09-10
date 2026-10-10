<?php
require_once 'pagamento.php';
class pagamentocartao extends pagamento{
    private $numerocartao;

    public function __construct($valor, $numerocartao){
        parent::__construct($valor); // Vírgula removida
        $this->numerocartao = $numerocartao; // Movido para dentro do construtor
    }

    public function processar(){
        // Aspas colocadas corretamente englobando todo o texto e variáveis
        return "<p>Pagamento de R$ {$this->valor} processado no cartão final {$this->numerocartao}</p>";
    }
}