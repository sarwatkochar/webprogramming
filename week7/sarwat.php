<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>
            <?php

$sql = "INSERT INTO student (first_name, last_name, email, gender, date_of_birth)
VALUES (‘Ara’, ‘Kocher', ‘ara@gmail.com’,’male’,’2023-04-09’)";

if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo mysqli_error($conn);
}






            ?>  
</body>
</html>