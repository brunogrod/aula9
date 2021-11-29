<?php

include ('conexao.php'); 

$iddocente = 2;
$sql = "delete from tbldocente where iddocente='$iddocente'";
$con ->query($sql);