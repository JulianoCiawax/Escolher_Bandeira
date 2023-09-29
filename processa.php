<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Informações do País</title>
</head>

<body>
    <h1>Informações do País</h1>

    <?php
    // Verifica se o parâmetro "pais" foi enviado
    if (isset($_GET['pais'])) {
        // Obtém o nome do país a partir do parâmetro
        $pais = $_GET['pais'];

        // Define informações fictícias dos países
        $informacoes = array(
            'Brasil' => array('Cidades' => 'Rio de Janeiro e São Paulo', 'Lingua' => 'Português'),
            'Franca' => array('Cidades' => 'Paris e Lyon', 'Lingua' => 'Francês'),
            'Japão' => array('Cidades' => 'Tóquio e Osaka', 'Lingua' => 'Japonês')
        );

        // Verifica se o país existe nas informações
        if (array_key_exists($pais, $informacoes)) {
            echo "<h2>$pais</h2>";
            echo "<p>Cidades: " . $informacoes[$pais]['Cidades'] . "</p>";
            echo "<p>Língua: " . $informacoes[$pais]['Lingua'] . "</p>";
        } else {
            echo "<p>País não encontrado</p>";
        }
    } else {
        echo "<p>Nenhum país selecionado</p>";
    }
    ?>

    <a href="index.html">Voltar para a página inicial</a>
</body>

</html>