<?php

$dbc = mysqli_connect("localhost", "id18807347_dcexusuario", "f/0S5C>U[YB>Z+nq", "id18807347_sqldcex");
if(!$dbc) {
die("DATABASE CONNECTION FAILED:" .mysqli_error($dbc));
exit();
}
$db = "id18807347_dcexusuario";

$dbs = mysqli_select_db($dbc, $db);
if(!$dbs) {
die("DATABASE SELECTION FAILED:" .mysqli_error($dbc));
exit();
}
$CPF = mysqli_real_escape_string($dbc, $_GET['CPF']);

$query = "DELETE FROM usuario where CPF=$CPF";
if(mysqli_query($dbc, $query)){
echo "Record Deleted successfully";
} 
else{
echo "ERROR: Could not able to execute". $query." ". mysqli_error($dbc);
}
mysqli_close($dbc);
?>