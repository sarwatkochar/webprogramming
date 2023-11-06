<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
<body>
<?php

include  "db.php";

?>

    <table class="table" align="center">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>gender</td>
                <td>action</td>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>gender</td>
                <td>action</td>
            </tr>
        </tfoot>
        <?php
        
        $select = "SELECT * FROM student";
        $result = mysqli_query($conn , $select);
        while($row = mysqli_fetch_assoc ($result)){
        ?>
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["student_name"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["gender"];?></td>
                <td>
                 <a href="edit.php?id=<? echo $row["id"]; ?>" class="btn btn-success">Edit</a>
    
                 <a href="delete.php?id=<? echo $row["id"]; ?>" class="btn btn-danger">Delet</a>
                </td>

        </tr>
        <?php
        }
         ?>
    </table>

   



</body>
</html>










<br>



<?php
$sql = "insert into student (student_name, email, gender) values ('sahand','sahand.ary@gmail.com','male')";
if(mysqli_query($conn,$sql)){
    echo "new record created seccessfully";

}
else{
    echo mysqli_error($conn);
}
?>



    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>