<?php
$servidor = "localhost";
$login = "root";
$senha = "";
$base = "guia";
$con = mysqli_connect($servidor,$login, $senha) or die("MySql Error!");
mysqli_select_db($con, $base) or die("Database Error!"); 
?>