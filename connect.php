<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $phone = $_POST['phone'];
    $gender = $_POST[ 'gender'];
    $subject = $_POST['subject'];

    $conn =new mysqli('localhost','root','','test1');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{  
        $stmt = $conn->prepare("insert into registration(name, email, password, confirm_password, phone, gender, subject) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiss", $name, $email, $password, $confirm_password, $phone, $gender, $subject);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();

}    
?>