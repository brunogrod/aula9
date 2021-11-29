<?php
//include   /include_once
//require  / require_once
include ('conexao.php'); 

$docente = "Juan";
$especialidade = "Programação";
$salhora = 30;
$disponibilidade = "Dias de semana";

$sql1 = "insert into tbldocente (docente,especialidade,salhora,disponibilidade)
        values ('$docente','$especialidade','$salhora','$disponibilidade')";
//conexao --> quuery(comando sql)
$con ->query($sql1);