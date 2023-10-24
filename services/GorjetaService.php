<?php

require_once(__DIR__ . '/../models/Gorjeta.php');

class GorjetaService
{

  public function __construct()
  {
  }

  public function calcularGorjeta(Gorjeta $gorjetaModel)
  {
    $valorConta = $gorjetaModel->getValorDaConta();
    $qualidadeServico = $gorjetaModel->getQualidadeServico();

    $qualidadeServico *= $valorConta;

    return $qualidadeServico;
  }

  public function calcularTotal(Gorjeta $gorjetaModel)
  {
    $valorConta = $gorjetaModel->getValorDaConta();
    $qualidadeServico = $this->calcularGorjeta($gorjetaModel);

    $total = $valorConta + $qualidadeServico;

    return $total;
  }

  public function formatarValor($valor)
  {
    if (isset($valor)) {
      return number_format($valor, 2, ',', '.');
    } else {
      return '0,00';
    }
  }
}
