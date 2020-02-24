<?php 

    include 'connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $postdata = file_get_contents("php://input");
        $request = json_decode($postdata);
        
        $id = $request->id;

        $sql = "DELETE FROM student WHERE id = $id";
        $result = array("msg"=>$id);
       
        if(mysqli_query($conn,$sql)) {
            $result["success"] = true;
            $result["msg"] = "deleted";
        } else {
            $result["success"] = false;
            $result["msg"] = "error";
        }

        echo json_encode($result);
    }

?>