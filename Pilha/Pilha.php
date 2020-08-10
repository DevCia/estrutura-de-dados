<?php

class Pilha
{
    private array $pilha;
    private int $tamanho;

    public function __construct()
    {
        $this->pilha = [];
        $this->tamanho = 0;
    }

    public function adicionarNoInicio(string $nomeJogo): void
    {
        array_unshift($this->pilha, $nomeJogo);
        $this->tamanho++;
    }

    public function mostrarItens(): void
    {
        foreach ($this->pilha as $item) {
            print_r("nome do jogo => {$item}. \n");
        }
    }

    public function quantidadeDeItens(): int
    {
        return $this->tamanho;
    }

    public function removerDoInicio(): void
    {
        array_shift($this->pilha);
        $this->tamanho--;
    }
}

$pilhaDEJogos = new Pilha();

$pilhaDEJogos->adicionarNoInicio("god of war");
$pilhaDEJogos->adicionarNoInicio("PES");
$pilhaDEJogos->adicionarNoInicio("rule of rose");
$pilhaDEJogos->adicionarNoInicio("GTA 5");
$pilhaDEJogos->mostrarItens();

print_r("\n\n");
print_r("numero de jogos = {$pilhaDEJogos->quantidadeDeItens()}");
print_r("\n\n");

$pilhaDEJogos->removerDoInicio();
$pilhaDEJogos->removerDoInicio();
$pilhaDEJogos->mostrarItens();

print_r("\n\n");
print_r("numero de jogos = {$pilhaDEJogos->quantidadeDeItens()}");
print_r("\n\n");
