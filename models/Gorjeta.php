<?php

class Gorjeta
{
  private $valorDaConta;
  private $qualidadeServico;

  public function __construct($valorDaConta, $qualidadeServico)
  {
    $this->valorDaConta = $valorDaConta;
    $this->qualidadeServico = $qualidadeServico;
  }

  public function getValorDaConta()
  {
    return $this->valorDaConta;
  }

  public function getQualidadeServico()
  {
    return $this->qualidadeServico;
  }

  public function setValorDaConta($valorDaConta)
  {
    $this->valorDaConta = $valorDaConta;
  }

  public function setQualidadeServico($qualidadeServico)
  {
    $this->qualidadeServico = $qualidadeServico;
  }
}
