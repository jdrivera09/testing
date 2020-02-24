<?php 

    include 'connection.php';

    $sql = "SELECT * FROM student";
    $res = mysqli_query($conn,$sql);
    $users = array();

    while($row = mysqli_fetch_assoc($res)) {
        array_push($users,$row);
    }

    echo json_encode($users);

?>