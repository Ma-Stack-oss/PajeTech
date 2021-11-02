<?php 

    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName =  'pajetech'; 

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conexao->connect_errno) {
    	echo "ERRO de conexao";
    }else{
    	echo "Conexao Efetuada Com Sucesso";
    }

?>