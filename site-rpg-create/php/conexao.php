<?php
define('HOST', 'localhost:3308');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'ficha_personagem');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');