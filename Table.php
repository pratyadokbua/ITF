<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'prattya.mysql.database.azure.com', 'it63070100', 'YBPfrp64', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM totalprice');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Product</div></th>
    <th width="350"> <div align="center">Price</div></th>
    <th width="150"> <div align="center">Discount(%)</div></th>
    <th width="150"> <div align="center">Total</div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Product'];?></div></td>
    <td><?php echo $Result['Price'];?></td>
    <td><?php echo $Result[('Discount(%)'/100)*'Price'+'Price'];?></td>
    <td><?php echo $Result['Total'];?></td>
    <td><?php echo '<a href="delete.php?id='.$Result['id'].'">Delete</a>'?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<a href="https://sometable.azurewebsites.net/form.html">Add_Info</a>
</body>
</html>