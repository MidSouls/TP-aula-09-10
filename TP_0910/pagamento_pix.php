<?php
require_once 'pagamento.php';

class pagamentopix extends pagamento {
    public function processar() {
        return "<p>pagamento de R$ {$this->valor} processado via pix</p>";
    }
}
