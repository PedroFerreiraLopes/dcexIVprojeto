<?php

include ("validateemail.php");

use validateemail\whitelist as whitelist;

$dbc = mysqli_connect("localhost", "id18807347_dcexusuario", "f/0S5C>U[YB>Z+nq", "id18807347_sqldcex");
if(!$dbc) {
die("DATABASE CONNECTION FAILED:" .mysqli_error($dbc));
exit();
}
$db = "id18807347_sqldcex";
$dbs = mysqli_select_db($dbc, $db);
if(!$dbs) {
die("DATABASE SELECTION FAILED:" .mysqli_error($dbc));
exit();
}
$CPF = mysqli_real_escape_string($dbc, $_GET['CPF']);
$Nome = mysqli_real_escape_string($dbc, $_GET['Nome']);
$Email = mysqli_real_escape_string($dbc, $_GET['Email']);
$Senha = mysqli_real_escape_string($dbc, $_GET['Senha']);
if(validateEmailDomain($Email, whitelist) == false) {
die($Email . " IS NOT A VALID EMAIL");
};
$query = "INSERT INTO usuario(CPF, Nome, Email, Senha) VALUES ('$CPF', '$Nome', '$Email', '$Senha')";
if(mysqli_query($dbc, $query)){
echo "Records added successfully";
} 
else{
echo "ERROR: Could not able to execute". $query." ". mysqli_error($dbc);
}
mysqli_close($dbc);
?>