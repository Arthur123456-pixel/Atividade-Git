<?php

class Funcionario
{
    private int $id;
    private string $nome;
    private string $cargo;

    public function __construct(int $id, string $nome, string $cargo)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }
}