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

    <?php while ($linha_usu = mysqli_fetch_assoc($resultado)){ ?>  
        
        <section>
            <h3><?php echo $linha_usu['Nome']; ?></h3>
            <p>Criado por: <span><?php echo $linha_usu['Player']; ?></span></p>
            <table class="ex" cellspacing="5">
                <tr>
                    <th>RPG</th>
                    <td> <?php echo $linha_usu['RPG']; ?> </td>
                </tr>

                <tr>
                    <th>Player</th>
                    <td> <?php echo $linha_usu['Player']; ?> </td>
                </tr>

                <tr>
                    <th>Nome</th>
                    <td> <?php echo $linha_usu['Nome']; ?> </td>
                </tr>

                <tr>
                    <th>Sexo</th>
                    <td> <?php echo $linha_usu['Sexo']; ?> </td>
                </tr>

                <tr>
                    <th>Raça</th>
                    <td> <?php echo $linha_usu['Raça']; ?> </td>
                </tr>

                <tr>
                    <th>Classe</th>
                    <td> <?php echo $linha_usu['Classe']; ?> </td>
                </tr>

                <tr>
                    <th>Afiliações</th>
                    <td> <?php echo $linha_usu['Afiliações']; ?> </td>
                </tr>

                <tr>
                    <th>Cargo</th>
                    <td> <?php echo $linha_usu['Cargo']; ?> </td>
                </tr>

                <tr>
                    <th>LV</th>
                    <td> <?php echo $linha_usu['LV']; ?> </td>
                </tr>

                <tr>
                    <th>Hp Max</th>
                    <td> <?php echo $linha_usu['HP_Max']; ?> </td>
                </tr>

                <tr>
                    <th>Hp Atual</th>
                    <td> <?php echo $linha_usu['HP_Atual']; ?> </td>
                </tr>

                <tr>
                    <th>AC</th>
                    <td> <?php echo $linha_usu['AC']; ?> </td>
                </tr>

                <tr>
                    <th>Gold</th>
                    <td> <?php echo $linha_usu['Gold']; ?> </td>
                </tr>

                <tr>  
                    <th>Habilidade</th>
                    <td> <?php echo $linha_usu['Habilidades']; ?> </td>
                </tr>

                <tr>
                    <th>Itens</th>
                    <td> <?php echo $linha_usu['Itens']; ?> </td>
                </tr>

            </table>
        </section>
        
    <?php } ?>
        </main>
</div>
</body>
</html>