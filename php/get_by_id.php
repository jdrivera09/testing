<?php 

    include 'connection.php';

    $sql = "SELECT * FROM student WHERE id = " . $_GET['id'];
    $res = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($res);
    echo json_encode($user);

?>