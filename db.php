<?php
if (!empty($_POST['name'] )){
    $name =$_POST['name'];
    
    $connect = mysqli_connect ("localhost","root","","students");

    $query = mysqli_query($connect,"INSERT INTO stud (name_stud) values ('$name')");
}
$_POST
?>