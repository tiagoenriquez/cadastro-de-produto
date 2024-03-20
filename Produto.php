<?php

class Produto {
    public $id;
    public $nome;
    public $descricao;
    public $valor;
    public $fornecedor;

    public function __construct(int $id, string $nome, string $descricao, float $valor, string $fornecedor) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->fornecedor = $fornecedor;
    }
}

?>