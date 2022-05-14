<?php

$dbc = mysqli_connect("localhost", "id18807347_dcexusuario", "f/0S5C>U[YB>Z+nq", "id18807347_sqldcex");
if(!$dbc) {
die("DATABASE CONNECTION FAILED:" .mysqli_error($dbc));
exit();
}
$db = "id18807347_dcexusuario";
$dbs = mysqli_select_db($dbc,$db );
if(!$dbs) {
die("DATABASE SELECTION FAILED:" .mysqli_error($dbc));
exit();
}
$CPF = mysqli_real_escape_string($dbc, $_GET['CPF']);
$Nome = mysqli_real_escape_string($dbc, $_GET['Nome']);
$Email = mysqli_real_escape_string($dbc, $_GET['Email']);
$Senha = mysqli_real_escape_string($dbc, $_GET['Senha']);
$query = "Update usuario SET Nome='$Nome',Email='$Email',Senha='$Senha' where CPF='$CPF'";
if(mysqli_query($dbc, $query)){
echo "Records Updated successfully";
}
else{
echo "ERROR: Could not able to execute". $query." ". mysqli_error($dbc);
}
mysqli_close($dbc);
?>