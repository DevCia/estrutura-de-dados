<?php

require_once "No.php";

class ListaLigada
{
    private ?No $primeiro;
    private ?No $ultimo;
    private int $tamanho;

    public function __construct()
    {
        $this->tamanho = 0;
        $this->ultimo = null;
        $this->primeiro = null;
    }

    public function quantidadeDeNos(): int
    {
        return $this->tamanho;
    }

    public function mostrarQuemEstaNaLista(): void
    {
        $no = $this->primeiro;
        while ($no !== null) {
            print_r("nome do nó = {$no->getNome()} \n");
            $no = $no->getProximo();
        }
    }

    public function adicionarNoFinal(string $nomeNo): void
    {
        /*
         * se a lista for vazia chama o metodo de inserir no começo pq tem o mesmo
         * efeito e vamos sair da função com o return;
         */
        if ($this->tamanho == 0) {
            $this->adicionarNoInicio($nomeNo);
            return;
        }

        $novoNo = new No($nomeNo);
        $this->ultimo->setProximo($novoNo);
        $this->ultimo = $novoNo;
        $this->tamanho++;
    }

    public function adicionarPorPosicao(string $nomeNo, int $index): void
    {
        $novoNo = new No($nomeNo);
        $noAtual = $this->primeiro;
        $proximoNo = $this->primeiro->getProximo();

        for ($i = 1; $i <= $this->tamanho; $i++) {
            if ($i == $index) {
                $novoNo->setProximo($proximoNo);
                $noAtual->setProximo($novoNo);
                return;
            }

            $noAtual = $proximoNo;
            $proximoNo = $proximoNo->getProximo();
        }
    }

    public function adicionarNoInicio(string $nomeNo): void
    {
        $novoNo = new No($nomeNo);
        $novoNo->setProximo($this->primeiro);

        if ($this->tamanho == 0) {
            $this->ultimo = $novoNo;
        }
        $this->primeiro = $novoNo;
        $this->tamanho++;
    }

    public function removerPorPosicao(int $index): void
    {
        if ($this->tamanho == 0) {
            return;
        }

        if ($this->tamanho == 1) {
            $this->removerDoInicio();
        }

        $noAtual = $this->primeiro;
        $proximoNo = $this->primeiro->getProximo();
        for ($i = 1; $i <= $this->tamanho; $i++) {
            if ($i == $index) {
                $noAtual->setProximo($proximoNo->getProximo());
                $proximoNo->setProximo(null);
                return;
            }

            $noAtual = $proximoNo;
            $proximoNo = $proximoNo->getProximo();
        }
    }

    public function removerDoInicio(): void
    {
        if ($this->tamanho == 0) {
            return;
        }

        $this->primeiro = $this->primeiro->getProximo();
        $this->tamanho--;
    }
}

$lista = new ListaLigada();

$lista->adicionarNoInicio("thiago silva");
$lista->adicionarNoFinal("Avenida Marcelo");
$lista->adicionarNoInicio("chorão");
$lista->adicionarPorPosicao("Casa Grande", 2);

$lista->mostrarQuemEstaNaLista();
print_r("\n\n");

$lista->removerDoInicio();
$lista->removerPorPosicao(1);
$lista->adicionarNoFinal("Menino Ney");

$lista->mostrarQuemEstaNaLista();
print_r("\n\n");