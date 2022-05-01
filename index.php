<?php
    function preencherArray() {
        $array = [];

        for($i = 1; $i <= 20; $i++) {
            array_push($array, random_int(1, 10));
        }

        return $array;
    }

    function getNumerosUnicos() {
        $array = preencherArray();
        $frequencias = array_count_values($array);

        $numerosUnicos = [];
        foreach($frequencias as $key => $value) {
            if($value == 1) {
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
    <title>Função Números Sorteados</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="01-seculo-ano.php" method="GET">
        <p class="seculo" name="seculo">
            <?php
                $numerosUnicos = getNumerosUnicos();

                print_r($numerosUnicos);

                foreach($numerosUnicos as $numero) {
                    echo $numero . "<br>";
                }
            ?>
        </p>
    </form>
</body>
</html>