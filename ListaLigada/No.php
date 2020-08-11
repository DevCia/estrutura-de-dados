<?php


class No
{
    private string $nome;
    private ?self $proximo;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->proximo = null;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return ?self
     */
    public function getProximo(): ?self
    {
        return $this->proximo;
    }

    /**
     * @param ?self $proximo
     */
    public function setProximo(?self $proximo): void
    {
        $this->proximo = $proximo;
    }
}