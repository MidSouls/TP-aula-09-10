<?php
require_once 'pagamento_cartao.php';
require_once 'pagamento_pix.php';


if (isset($_POST['enviar'])) {
    $valorPix = (float) $_POST['pix'];
    $valorCartao = (float) $_POST['valor_cartao'];
    $numeroCartao = $_POST['numero_cartao'];

    echo "<b>Resultados:</b><br>";
    
    if ($valorPix > 0) {
        $pagamento1 = new pagamentopix($valorPix);
        echo $pagamento1->processar() . "<br>";
    }
    
    if ($valorCartao > 0 && $numeroCartao != '') {
        $pagamento2 = new pagamentocartao($valorCartao, $numeroCartao);
        echo $pagamento2->processar() . "<br>";
    }
    echo "<hr>";
}
?>


<form method="POST">
    Valor PIX: <input type="text" name="pix"><br><br>
    
    Valor Cartão: <input type="text" name="valor_cartao"><br><br>
    Número Cartão: <input type="text" name="numero_cartao"><br><br>
    
    <input type="submit" name="enviar" value="Pagar">
</form>