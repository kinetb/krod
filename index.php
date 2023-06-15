<?php
require "connection.php";

$sql = "SELECT * FROM information";
$content = $con->query($sql);
$table = $content->fetch_assoc();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>More CRUD</title>
</head>
<body>
    <h1>RECORDS</h1>
    <button id="addB" class="addB">ADD</button>
    <br>
    <br>

    <!-- <a href="adduser.php" class="add">Add</a> -->
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Mobile Number</th>
                <th>Gender</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php if($content->num_rows){ ?>

                <?php do {?>
                    <tr>
                        <td><?php echo $table['username']?></td>
                        <td><?php echo $table['email']?></td>
                        <td><?php echo $table['password']?></td>
                        <td><?php echo $table['mobile_number']?></td>
                        <td><?php echo $table['gender']?></td>
                        <td>
                        <form action="delete.php" method="post">
                            <a href="edit.php?id= <?php echo $table['id']?>" id="editB" class="edit">Edit</a>
                            <button type="submit" name="delete" class="delete">Delete</button>
                            <input type="hidden" name="erase" value="<?php echo $table['id']?>">
                        </form>
                        </td>
    
                    </tr>
                    <?php }while($table = $content->fetch_assoc())?>

            <?php } ?>
        </tbody>
        

  </table>



  <?php
require "connection.php";


if(isset($_POST['addbutton'])){;

   $username = $_POST['username'];
   $email = $_POST['email']; 
   $password = $_POST['password']; 
   $mobilenumber = $_POST['mobilenumber']; 
   $gender = $_POST['gender'];

  $sql = "INSERT INTO `information` (`username`, `email`, `password`, `mobile_number`, `gender`) VALUES('$username', '$email', '$password', '$mobilenumber', '$gender')";
  $con->query($sql);

  header ("location: index.php");
}

?>

<div class="containeradd">
<form method="post" class="addform">
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
  <br>  
  <button type="submit" class="submit" name="addbutton">Submit</button>
</form> 

<a href="index.php" class="back">Back</a>
</div>


   <script src="index.js"></script>
</body>
</html>