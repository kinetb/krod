<?php

require "connection.php";



if(isset($_POST['delete'])){
    $id = $_POST['erase'];
    $sql = "DELETE FROM information WHERE id = '$id'";
    $con->query($sql);
    header("location: index.php");
}







?>