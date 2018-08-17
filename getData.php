<?php
// if(!empty($_POST['hn'])){
    $data = array();
    
    include 'connect.php';
    
    $hn = $_POST['hn'];

    //get user data from the database
    $query = $conn->query("SELECT * FROM person WHERE hn = '213598'");
    // $query = $conn->query("SELECT * FROM user WHERE UserName = 'admin'");
    
    if($query->num_rows > 0){
        $userData = $query->fetch_assoc();
        $data['status'] = 'ok';
        $data['result'] = $userData;
    }else{
        $data['status'] = 'err';
        $data['result'] = '';
    }
    
    //returns data as JSON format
    echo json_encode($data);
// }
?>