<?php
// if(!empty($_POST['hn'])){
    $data = array();
    
    include 'connect.php';
    
    $hn = $_POST['hn'];

    //get user data from the database
    $query = $conn->query("SELECT
    person.an,
    person.hn,
    person.fname,
    person.lname,
    person.pname,
    person.birthDay,
    YEAR (CURRENT_TIMESTAMP) - YEAR (person.birthDay) - (
            RIGHT (CURRENT_TIMESTAMP, 5) < RIGHT (birthDay, 5)
        ) AS age,
    person.pay_typedes,
    person.ward_name,
    person.contCode
    FROM person WHERE hn = '".$hn."'");
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