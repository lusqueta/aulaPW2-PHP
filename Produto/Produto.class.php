<?php
    class Produto {
        public $id;
        public $descricao;
        public $preco;
        public $fornecedor;

        public function inserirProduto($descricao, $preco, $fornecedor) {
            echo "<h1>Produto inserido com sucesso!</h1><hr>";
        }
    }
?>
