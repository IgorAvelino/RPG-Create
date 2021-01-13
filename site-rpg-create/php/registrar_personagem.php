<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset= "UTF-8">
    <link rel= stylesheet href="../css/estilo.css">
    <link rel="shortcut icon" href="../img/fav.png">
    <title>Cadastro</title>
</head>
<body>
<div class="interface">

    <?php
    require_once 'conexao.php';

    $rpg = mysqli_real_escape_string($conexao, trim($_POST["rpg"]??'Não Definido'));
    $player = mysqli_real_escape_string($conexao, trim($_POST["player"]??'Não Definido'));
    $nome = mysqli_real_escape_string($conexao, trim($_POST["nome"]??'Não Definido'));
    $sexo = mysqli_real_escape_string($conexao, trim($_POST["sexo"]??'Não Definido'));
    $raca = mysqli_real_escape_string($conexao, trim($_POST["raca"]??'Não Definido'));
    $classe = mysqli_real_escape_string($conexao, trim($_POST["classe"]??'Não Definido'));
    $afiliacoes = mysqli_real_escape_string($conexao, trim($_POST["afiliacoes"]??'Não Definido'));
    $cargo = mysqli_real_escape_string($conexao, trim($_POST["cargo"]??'Não Definido'));
    $lv = $_POST["lv"]??1;
    $hp_max = $_POST["hp_max"]??0;
    $hp_atual= $_POST["hp_atual"]??0;
    $ac = $_POST["ac"]??0;
    $g = $_POST["g"]??100;
    $habilidades = $_POST["habilidades"]??'VAZIO';
    $itens = $_POST["itens"]??'VAZIO';

    $sql = "INSERT INTO personagens VALUES (default, '$rpg', '$player', '$nome', '$sexo', '$raca', '$classe', '$afiliacoes', '$cargo', '$lv', '$hp_max', '$hp_atual', '$ac', '$g', '$habilidades', '$itens', default, default)";

    mysqli_query($conexao, $sql) or die ('Erro ao tentar registro');
    mysqli_close($conexao);

    echo "<p>Personagem cadastrado com sucesso!</p>";
    ?>
    <div class="bot">
        <input type="button" class="botao" value="Voltar" onclick="location.href='../index.html'">
    </div>

</div>
</body>
</html>