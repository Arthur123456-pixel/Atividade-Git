<?php

class Funcionario
{
    private int $id;
    private string $nome;
    private string $cargo;
    private float $salario;
    private string $horarioEntrada;
    private string $horarioSaida;

    public function __construct(
        int $id,
        string $nome,
        string $cargo,
        float $salario,
        string $horarioEntrada,
        string $horarioSaida
    ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->horarioEntrada = $horarioEntrada;
        $this->horarioSaida = $horarioSaida;
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

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function getHorarioEntrada(): string
    {
        return $this->horarioEntrada;
    }

    public function setHorarioEntrada(string $horarioEntrada): void
    {
        $this->horarioEntrada = $horarioEntrada;
    }

    public function getHorarioSaida(): string
    {
        return $this->horarioSaida;
    }

    public function setHorarioSaida(string $horarioSaida): void
    {
        $this->horarioSaida = $horarioSaida;
    }

    public function aplicarAumento(float $percentual): void
    {
        $this->salario += $this->salario * ($percentual / 100);
    }

    public function calcularBonus(): float
    {
        return $this->salario * 0.10;
    }
}