<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'prattya.mysql.database.azure.com', 'it63070100', 'YBPfrp64', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['id'];
$sql = "UPDATE FROM totalprice (Price=$Price, Discount=%Discount), WHERE id = $id";
if (mysqli_query($conn, $sql)) {
echo "Record Update successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<html>
<body>
  <a href="https://examtotalprice.azurewebsites.net/">Back_to_Base</a>
  </body>
</html>
