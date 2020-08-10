<?php

class Deque
{
    private array $deque;
    private int $tamanho;

    public function __construct()
    {
        $this->tamanho = 0;
        $this->deque = [];
    }

    public function adicionarNoFinal(string $nome): void
    {
        $this->deque[] = $nome;
        $this->tamanho++;
    }

    public function adicionarNoInicio(string $nomeJogo): void
    {
        array_unshift($this->deque, $nomeJogo);
        $this->tamanho++;
    }

    public function mostrarItens(): void
    {
        foreach ($this->deque as $item) {
            print_r("nome do jogo => {$item}. \n");
        }
    }

    public function removerDoInicio(): void
    {
        array_shift($this->deque);
        $this->tamanho--;
    }

    public function removerDoFinal(): void
    {
        array_pop($this->deque);
        $this->tamanho--;
    }
}

$deque = new Deque();
$deque->adicionarNoInicio("piricicaba");
$deque->adicionarNoFinal("nova iguaçu");
$deque->adicionarNoInicio("diadema");

$deque->mostrarItens();

$deque->removerDoInicio();
$deque->removerDoFinal();

print_r("\n\n");
$deque->mostrarItens();