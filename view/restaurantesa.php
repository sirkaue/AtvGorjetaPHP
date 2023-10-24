<?php
require_once(__DIR__ . '/../controllers/GorjetaController.php');
require_once(__DIR__ . '/../services/GorjetaService.php');
require_once(__DIR__ . '/../models/Gorjeta.php');

$gorjetaService = new GorjetaService();
$gorjetaController = new GorjetaController($gorjetaService);

$gorjeta = $gorjetaController->processarGorjeta();
$total = $gorjetaController->processarTotal();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Restaurante S/A</title>
</head>

<body>

  <h1>Calculadora de Gorjeta</h1>

  <form action="/../exercicio/view/restaurantesa.php" method="post">

    <div class="form-group">
      <label for="valorDaConta">Valor da Conta:</label>
      <input type="number" class="form-control" name="valorDaConta" placeholder="Insira o valor da conta">
    </div>

    <div class="form-group">
      <label for="qualidadeServico">Qualidade do serviço:</label>
      <select name="qualidadeServico" class="form-control">
        <option value="0.10">Excelente – 10%</option>
        <option value="0.08">Ótimo – 8%</option>
        <option value="0.05">Bom – 5%</option>
        <option value="0.02">Ruim – 2%</option>

      </select>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success btn-lg btn-block">Calcular Gorjeta</button>
    </div>

    <div class="form-group">
      <label>Valor da gorjeta:</label>
      <span>R$ <?php echo $gorjeta; ?></span>
    </div>
    <div class="form-group">
      <label>Valor total:</label>
      <span>R$ <?php echo $total; ?></span>
    </div>
</body>

</html>