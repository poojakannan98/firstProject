<?php //require 'conn.php'?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UFT-8">
    <title>Dashboard</title>
</head>

<body>
    <form method="POST" action="">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="e_name" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="e_email" required></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="tel" name="e_phno" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="e_add"></td>
            </tr>
        </table>
    </form><br>
    <p><a href="employee.php">View Employee</a></p>

<?php

if(isset($_POST['e_add'])){
  $e_name = $_POST['e_name'];
  $e_email = $_POST['e_email'];
  $e_phno = $_POST['e_phno'];

  $sql = "INSERT INTO employee (e_name, e_email, e_phno) VALUES ('$e_name','$e_email','$e_phno')";

    if(mysqli_query($con,$sql) != null){
        header('Location: employee.php');
    }else{
        echo "error: " . $sql . "<br>" . mysqli_error($con);
    }
  }
?>
</body>
</html>
</html>
