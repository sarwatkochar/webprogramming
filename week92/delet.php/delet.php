<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<from method = "post" action="<?php echo $_SERVER['PHP_SELF']. '?id=' ,$id;?>">
are you sure want to delet <b style="color:red"> <?php echo $name_select; ?> 
<input t type="submit" value ="Yes delete" class= "btn btn-danger">
<a href = "View.php" class ="btn btn-primary">No </a>

</form>

</body>
<?php


iF (S_SERVER["REQUEST _METHOD"] == "POST") {


$sql = "DELETE FROM student  WHERE id=$id" ;


if (mysqli_query ($conn, $sql)){
echo "Data Deleted";
header ("Location: view.php");
} else{

echo "Error: " .$sql."<br>".mysqli_error ($conn);
}
}


?>



</html>