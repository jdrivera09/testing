<?php 

    include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        
        $lastname = $request->lastname;
        $firstname = $request->firstname;
        $address = $request->address;
        
        $sql = "INSERT INTO student(lastname,firstname,address)
            VALUES('$lastname','$firstname','$address')";
        $result = array();
        if(mysqli_query($conn,$sql)) {
            $result["success"] = true;
            $result["msg"] = "Student record added!";
        } else {
            $result["success"] = false;
            $result["msg"] = "error";
        }

        echo json_encode($result);
    }

?>