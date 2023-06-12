<?php
require "connection.php";


if(isset($_POST['add'])){
  $name = $_POST['name'];
  $age = $_POST['age']; 
  $gender = $_POST['gender'];

  $sql = "INSERT INTO information_db(`full_name`, `age`, `gender`) VALUES('$name', '$age', '$gender')";
  $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>ADD USER</h1>
<form>
  <div class="mb-3">
    <label for="InputUname" class="form-label">Username</label>
    <input type="text" class="form-control" id="InputUname" placeholder="Enter your Username" required>
    <br> <br>
  <div class="mb-3">
    <label for="InputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter your Email" required>
   
  </div>
  <br>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="InputPassword" placeholder="Enter your Password" required>
  </div>
  <br>
    <div class="mb-3">
        <label for="InputMnumber" class="form-label">Mobile number</label>
        <input type="number" class="form-control" id="InputMnumber" placeholder="Enter your Mobile number" required>
    </div>
    <br>
    <div class="mb-3">
        <label for="InputGender" class="form-label">Gender</label>
        <input type="text" class="form-control" id="InputGender" placeholder="Enter your Gender" required>
    </div>
    <br>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br><br>
<a href="index.php" class="back">Back</a>
</body>
</html>