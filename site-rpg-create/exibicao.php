<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset= "UTF-8">
    <link rel= stylesheet href="css/exibicao.css">
    <link rel="shortcut icon" href="img/fav.png">
    <title>Comunidade! Personagens Criados!</title>
</head>
<body>
<div class="bola1"></div>
<div class="bola2"></div>
<div class="interface">

    <header>
        <h1>Personagens da Comunidade!</h1>
    </header>

    <?php
        require_once "php/conexao.php";

        $sql = "SELECT * FROM personagens";

        $resultado = mysqli_query($conexao, $sql) or die ('Erro na query');
        ?>
    
        <main>

    <?php while ($linha_usu = mysqli_fetch_assoc($resultado)){ 
        $id = $linha_usu['Id'];
    ?>  
        
        <section>
            <h3><?php echo $linha_usu['Nome']; ?></h3>
            <p>Criado por: <span><?php echo $linha_usu['Player']; ?></span></p>

            <form action="php/exibir_personagem.php" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                <input type="submit" class="bot-sub" value="Ver Completo">
            </form>
        </section>
        
    <?php } ?>
        </main>
</div>
</body>
</html>