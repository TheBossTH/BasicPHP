<?php
    $input_password = "e10adc3949ba59abbe56e057f20f883e";
    $email = $_POST['email'];
    $password = trim($_POST['password']);
    if($password != null){
        if(md5($password) == $input_password){
            echo "Password is valid";
        }else {
            echo "Password is Ivalid";
        }
    }
    echo "Email : " . $email . " Password : " . md5($password);
?>