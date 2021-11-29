<?php

include ('conexao.php'); 

$idaluno = 3;
$sql = "delete from tblaluno where idaluno='$idaluno'";
$con ->query($sql);