<?php
require "connection.php";


$id = $_GET['id'];
$sql = "SELECT * FROM `information` WHERE id = '$id'";
$content = $con->query($sql);
$table = $content->fetch_assoc();
// echo 'goods';




if(isset($_POST['addbutton'])){;

    $username = $_POST['username'];
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $mobilenumber = $_POST['mobilenumber']; 
    $gender = $_POST['gender'];

    $sql = "UPDATE `information` SET `username`='$username',`email`='$email',`password`='$password',`mobile_number`='$mobilenumber',`gender`='$gender' WHERE id = '$id'";
    $con->query($sql);


    header("location: index.php?=" .$id);


}else if(isset($_POST['cancel'])){
    header("location: index.php?=" .$id);
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit yarn</title>
</head>
<body>
<h1>ADD USER</h1>
<form method="post">
  <div class="mb-3">
    <label for="InputUname" class="form-label">Username</label>   
    <input type="text" class="form-control" id="InputUname" placeholder="Enter your Username" name="username" required>
    <br> <br>
  <div class="mb-3">
    <label for="InputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter your Email" name="email"required>
   
  </div>
  <br>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="InputPassword" placeholder="Enter your Password" name="password" required>
  </div>
  <br>
    <div class="mb-3">
        <label for="InputNumber" class="form-label">Mobile number</label>
        <input type="number" class="form-control" id="InputMnumber" placeholder="Enter your Mobile number" name="mobilenumber" required>
    </div>
    <br>
    <div class="mb-3">
        <label for="InputGender" class="form-label">Gender</label>
        <input type="text" class="form-control" id="InputGender" placeholder="Enter your Gender" name="gender" required>
    </div>
    <br>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1" >Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="addbutton">Submit</button>
</form>
<br><br>
<a href="index.php" class="back">Back</a>

    
</body>
</html>