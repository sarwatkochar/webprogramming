<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
   <body>
       <div>
      <from method = "post" action="<?php echo $_SERVER['php_self'];?>">
      name: <input type ="text" name = "name" class = "form-control">
      email: <input type = "email" name = "email" class = "form-control" >
      Gender : <select nme= "gender" class ="form-control">
        <option value = "male">male </option>
        <option value = female>female </option>
      </select>
     
       <input type="submit" value = "save" class = "btn btn-primary form-control">
</form> 
       </div>
   </body>
</html>
<?php
iF (S_SERVER["REQUEST _METHOD"] == "POST") (
$name = $_POST [' name' ];
$email = $_POST['email'];
$gender = $_POST[' gender'];

$sql = "INSERT intO student (name, email, gender) VALUES ('$name', '$email', '$gender')

if (mysqli_query ($conn, $sql)){
 echo "Data Added";
header ("Location: view.php");
} else{

echo "Error: " .$sql."<br>".mysqli_error ($conn);
?>