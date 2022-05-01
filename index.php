<?php
function preencherArray() {
  $array = [];

  for ($i = 1;$i <= 20;$i++) {
    array_push($array, random_int(1, 10));
  }

  echo "Foram sorteados os números: " . implode(", ", $array) . "<br />";
  return $array;
}

function getNumerosUnicos() {
  $array = preencherArray();
  $frequencias = array_count_values($array);

  $numerosUnicos = [];
  foreach ($frequencias as $key => $value) {
    if ($value == 1) {
      array_push($numerosUnicos, $key);
    }
  }

  return $numerosUnicos;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <title>Função primos</title>
    <link rel="stylesheet" href="./styles.css">
  </head>
  <body>
    <p class="seculo" name="seculo">
    <?php
      $numerosUnicos = getNumerosUnicos();

      if (count($numerosUnicos) == 0) {
        echo "<br />Não há números únicos no array.";
      } else{
        echo "<br />Números que aparecem uma única vez: " . implode(", ", $numerosUnicos);
      }
    ?>
  </body>
</html>