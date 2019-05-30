<?php

echo "<h2> Dados do Formulário</h2>";
//receber os dados pelo "name" de cada um
//a "posição" do request é o "name"  do campo do formulário
$login=$_REQUEST['login'];
$senha=$_REQUEST['senha'];

echo "O login: $login possui a senha: $senha";


 ?>
