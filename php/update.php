<?php 

    include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        
        $lastname = $request->lastname;
        $firstname = $request->firstname;
        $address = $request->address;
        $id = $request->id;
        
        $sql = "UPDATE student
            SET
                lastname='$lastname',
                firstname='$firstname',
                address='$address'
            WHERE id = $id";
        $result = array();
        if(mysqli_query($conn,$sql)) {
            $result["success"] = true;
            $result["msg"] = "Student record updated!";
        } else {
            $result["success"] = false;
            $result["msg"] = "error";
        }

        echo json_encode($result);
    }

?>