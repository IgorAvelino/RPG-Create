<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset= "UTF-8">
    <link rel= stylesheet href="css/estilo.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="shortcut icon" href="img/fav.png">
    <title>Cadastrar Personagem</title>
</head>
<body>
    <span class="bola1"></span>
    <span class="bola2"></span>
    <div class="interface">

    <h1>Cadastrar Personagem</h1>

    <form action="php/registrar_personagem.php" method="post">
    <table>
        <h3>Inserir Dados:</h3>
        
        <tr><td><label for="rpg">RPG: </label></td><td><input type="text" name="rpg" id="rpg" placeholder="Nome do RPG..." required></td></tr>

        <tr><td><label for="player">Player: </label></td><td><input type="text" name="player" id="player" placeholder="Seu nome..." required></td></tr>

        <tr><td><label for="nome">Nome: </label></td><td><input type="text" name="nome" id="nome" placeholder="Nome do personagem..." required></td></tr>

        <tr><td><label for="sexo">Sexo: </label></td><td>
            <div class="custom-select" style="width: 200px;">
                <select name="sexo" id="sexo" required>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Não Definido">Não Definido</option>
                </select>
            </div>
    </td></tr>

        <tr><td><label for="raca">Raça: </label></td><td><input type="text" name="raca" id="raca" placeholder="Raça do personagem..." required></td></tr>

        <tr><td><label for="classe">Classe: </label></td><td><input type="text" name="classe" id="classe" placeholder="Classe do personagem..." required></td></tr>

        <tr><td><label for="afiliacoes">Afiliações: </label></td><td><input type="text" name="afiliacoes" id="afiliacoes" placeholder="Afiliações do personagem..." value="Nenhuma" required></td></tr>

        <tr><td><label for="cargo">Cargo: </label></td><td><input type="text" name="cargo" id="cargo" placeholder="Cargo do personagem..." value="Nenhum" required></td></tr>

        <tr><td><label for="lv">LV: </label></td><td><input type="number" name="lv" id="lv" placeholder="Nível do personagem..." required></td></tr>

        <tr><td><label for="hp_max">HP Max: </label></td><td><input type="number" name="hp_max" id="hp_max" placeholder="HP máximo do personagem..." required></td></tr>

        <tr><td><label for="hp_atual">HP Atual: </label></td><td><input type="number" name="hp_atual" id="hp_atual" placeholder="HP Atual do personagem..." required></td></tr>

        <tr><td><label for="ac">AC: </label></td><td><input type="number" name="ac" id="ac" placeholder="AC do personagem..." required></td></tr>

        <tr><td><label for="g">Gold: </label></td><td><input type="number" name="g" id="g" placeholder="Gold do personagem..." required></td></tr>

        <tr><td><label for="habilidades">Habilidades: </label></td><td><textarea name="habilidades" id="habilidades" cols="30" rows="10" placeholder="Liste as Habilidades do personagem..." required></textarea></td></tr>

        <tr><td><label for="itens">Itens: </label></td><td><textarea name="itens" id="itens" cols="30" rows="10" placeholder="Liste os Itens do personagem..." required></textarea></td></tr>
    </table>

    <div class="bot">
        <input type="submit" value="Cadastrar Personagem" class="botao">
    </div>

    </form>

    <div class="bot">
        <input type="button" value="VOLTAR" class="botao" onclick="location.href='index.html'">
    </div>

    <div class="rodape">
        <footer>
            <span id="dev"><p>Conheça o Desenvolvedor! <a href="desenvolvedor.html">Igor Avelino</a></p></span>
        </footer>
    </div>

</div>
</body>
</html>