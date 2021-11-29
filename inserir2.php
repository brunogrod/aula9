<?php
//include   /include_once
//require  / require_once
include ('conexao.php'); 

$curso = "ANGULAR";
$valor = 500.00;
$cargahoraria = 36;
$docente = "Juan";

$sql1 = "insert into tblcursos (curso,valor,cargahoraria,docente)
        values ('$curso','$valor','$cargahoraria','$docente')";
//conexao --> quuery(comando sql)
$con ->query($sql1);