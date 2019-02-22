<?php

if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $radiolist=$_POST['radiolist'];
    $role=$_POST['role'];
    $textarea=$_POST['textarea'];
    
    $to = 'rmarmol85@gmail.com';
    $subject = 'immigration form';
    $message=  "name: ".$name."\n"."email: ".$email."\n"."age: ".$age."\n"."phone: ".$phone."\n"."radiolist: ".$radiolist."\n"."role: ".$role."\n";
    $header= "From:" .$email;

    if(mail($to, $subject,$email,$phone,$age,$radiolist,$radiolist)){
        echo "<h1> Sent Successfully! Thank You"."".$name.", We will Contact you Shortly!</h1>";
    }
    else{
        echo "Something went wrong!";
    }
}
?>