<?php
//include   /include_once
//require  / require_once
include ('conexao.php'); 

$aluno = "Giovana";
$turma = "1001";
$mensal = 990.98;

$sql = "insert into tblaluno (aluno,turma,mensal)
        values ('$aluno','$turma','$mensal')";
//conexao --> quuery(comando sql)
$con ->query($sql);

var_dump ($con);

