<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'prattya.mysql.database.azure.com', 'it63070100', 'YBPfrp64', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['Name'];
$comment = $_POST['Comment'];
$link = $_POST['Link'];


$sql = "INSERT INTO guestbook (Name, Comment, Link) VALUES ('$Name', '$Comment', '$Link')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>