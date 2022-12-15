<?php
echo "hello php"
$Fname = $Lname  = $email = $comment = '';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty($_POST['Fname'])){
        $Fname ="first name is required";
    }
    else{
        $Fname =$_POST['Fname'];
    }
    if(empty($_POST['Lname'])){
        $Lname ="last name is required";
    }
    else{
        $Lname =$_POST['Lname'];
    }
    if(empty($_POST['email'])){
        $email ="naemail is required";
    }
    else{
        $email =$_POST['email'];
    }
}

?>