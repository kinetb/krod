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
    <a href="adduser.php" class="add">Add</a>
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
                            <a href="edit.php?id= <?php echo $table['id']?>" >Edit</a>
                            <button type="submit" name="delete">Delete</button>
                            <input type="hidden" name="erase" value="<?php echo $table['id']?>">
                        </form>
                        </td>
    
                    </tr>
                    <?php }while($table = $content->fetch_assoc())?>

            <?php } ?>
        </tbody>
        

  </table>
   
</body>
</html>