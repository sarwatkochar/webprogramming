<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
   <body>
       <?php
        
        $id = $_GET['id'];

         $select = "SELECT * FROM student WHERE id=$id";

        $result = mysqli_query($conn, $select);
        while($row = mysqli_fetch_assoc($result)){
            $name_select = $row [' name' ];
            $email_select = $row['email'];
            $gender_select = $row[' gender'];
        }
   ?>
     
      <div class = "container">
      <from method = "post" action="edit.php<?php echo '?id=' ,$id;?>">
      name: <input type ="text" name = "name"  value =  <?php echo $name_select; ?>  class = "form-control">
      email: <input type = "email" name = "email"  value =  <?php echo $email_select; ?> class = "form-control" >
      Gender : <select name= "gender" class ="form-control">
        <option value = "male">male </option>
        <?php if ($gender_select == "female") {?>
        selected
        <?php} ?>
        >Male</option>

            <option value ="female"
            <?php if ($gender_selecte == "female") {?>
            selected
          <?php  } ?>
          >Female</option>
      </select>
     
       <input type="submit" value = "Update" class = "btn btn-primary form-control">
        </form> 
       </div>
   </body>
  </html>
            
  <?php
        iF (S_SERVER["REQUEST _METHOD"] == "POST") {
        $name = $_POST [' name' ];
        $email = $_POST['email'];
        $gender = $_POST[' gender'];

        $sql = "UPDATE_student SET name ='$name', email='$email', gender = '$geder') WHERE id=$id" ;
     

        if (mysqli_query ($conn, $sql)){
        echo "Data Added";
        header ("Location: view.php");
        } else{

        echo "Error: " .$sql."<br>".mysqli_error ($conn);
        }
    }


        ?>
