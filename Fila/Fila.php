<?php

class Fila
{
    private array $fila;
    private int $tamanho;

    public function __construct()
    {
        $this->fila = [];
        $this->tamanho = 0;
    }

    public function adicionarNoFinal(string $nome): void
    {
        $this->fila[] = $nome;
        $this->tamanho++;
    }

    public function mostrarQuemEstaNafila(): void
    {
        foreach ($this->fila as $item) {
            print_r("nome da pessoa {$item}. \n");
        }
    }

    public function quantidadeDeItens(): int
    {
        return $this->tamanho;
    }

    public function removerDoInicio(): void
    {
        array_shift($this->fila);
        $this->tamanho--;
    }
}

$filaBanco = new Fila();
$filaBanco->adicionarNoFinal("Tia Gertrudes");
$filaBanco->adicionarNoFinal("Seu Antonio");
$filaBanco->adicionarNoFinal("Kraudio");
$filaBanco->adicionarNoFinal("Dona Gioconda");

$filaBanco->mostrarQuemEstaNafila();
print_r("\n\n quantidade de gente na fila {$filaBanco->quantidadeDeItens()} \n\n");

$filaBanco->removerDoInicio();
$filaBanco->removerDoInicio();
$filaBanco->removerDoInicio();

$filaBanco->mostrarQuemEstaNafila();
print_r("\n\n quantidade de gente na fila {$filaBanco->quantidadeDeItens()} \n\n");
