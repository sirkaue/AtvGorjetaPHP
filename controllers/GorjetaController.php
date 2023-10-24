<?php

require_once(__DIR__ . '/../services/GorjetaService.php');

class GorjetaController
{
  private $gorjetaService;

  public function __construct(GorjetaService $gorjetaService)
  {
    $this->gorjetaService = $gorjetaService;
  }

  public function processarGorjeta()
  {
    $gorjeta = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      try {
        $gorjetaModel = new Gorjeta(
          $_POST['valorDaConta'],
          $_POST['qualidadeServico']
        );

        $gorjeta = $this->gorjetaService->calcularGorjeta($gorjetaModel);
        $gorjeta = $this->gorjetaService->formatarValor($gorjeta);
      } catch (Exception $e) {
        throw new Exception('Erro' . $e->getMessage());
      }
    }

    return $gorjeta;
  }
  public function processarTotal()
  {
    $total = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      try {
        $gorjetaModel = new Gorjeta(
          $_POST['valorDaConta'],
          $_POST['qualidadeServico']
        );

        $total = $this->gorjetaService->calcularTotal($gorjetaModel);
        $total = $this->gorjetaService->formatarValor($total);
      } catch (Exception $e) {
        throw new Exception('Erro' . $e->getMessage());
      }
    }

    return $total;
  }
}
