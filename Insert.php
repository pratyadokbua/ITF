<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'prattya.mysql.database.azure.com', 'it63070100', 'YBPfrp64', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Product = $_POST['Product'];
$Price = $_POST['Price'];
$Discount = $_POST['Discount'];


$sql = "INSERT INTO totalprice (Product , Price, Discount) VALUES ('$Product', '$Price', '$Discount'";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
<html>
<body>
  <a href="https://examtotalprice.azurewebsites.net/">Wanna_See_It?</a>
  </body>
</html>