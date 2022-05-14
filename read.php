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

$query = "SELECT * FROM `usuario`";
$res = mysqli_query($dbc,"SELECT * FROM `usuario`");
$row = mysqli_fetch_array($res);



if(mysqli_query($dbc, $query)){


} 
else{
echo "ERROR: Could not able to execute". $query." ". mysqli_error($dbc);
}
?>

<h2>Users Details</h2>

<table border="2">
  <tr>
    <td>CPF.</td>
    <td>Nome</td>
    <td>Email</td>
    <td>Senha</td>
  </tr>

<?php

while($data = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $data['CPF']; ?></td>
    <td><?php echo $data['Nome']; ?></td>
    <td><?php echo $data['Email']; ?></td>
    <td><?php echo $data['Senha']; ?></td>
  </tr>	
<?php
}
?>
</table>



<php
mysqli_close($dbc);
?>