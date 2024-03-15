<?php
    require 'Produto.class.php';

    $descricao = 'notebook';
    $preco = 2500;
    $fornecedor = 'Dell';

    $produto = new Produto();
    $produto -> inserirProduto($descricao, $preco, $fornecedor);
?>