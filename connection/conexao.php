<?php
define('HOST', 'localhost');
define('USUARIO', 'eduqube');
define('SENHA', '&3eduq7kb3@');
define('DB', 'eduqube');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');