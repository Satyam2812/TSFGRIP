<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="basic_banking_systems";

    $conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn) {
        echo "connection failed: ".mysqli_connect_error();
        exit;
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address=$_POST['address'];
    $account_no=$_POST['account_number'];
    $curr_balance=$_POST['curr_balance'];

    $sql ="INSERT INTO customers (name,email,address,account_no,curr_balance) VALUES ('$name','$email','$address','$account_no','$curr_balance')";

    $result= mysqli_query($conn,$sql);
    if (!$result) {
        echo "error:".mysqli_error($conn);
        exit;
    }
    echo "Registration Successful";

?>