<?php
// getting user data
$name = strval($_GET['name']);
$email = strval($_GET['email']);
$age = intval($_GET['age']);

if ($name !== "" && $email !== "" && $age !== "" && $age !== 0){
    // name check
    if (strlen($name) > 3){
        echo $name . " " . "it's a valid user name" . "<br>";
    }else{
        echo "The length of " . $name . " should be at leadst 3 characters" . "<br>";
    };

    // email check
    if (strpos($email, '.') !== false && strpos($email, '@') !== false){
        echo $email . " " . "it's a valid email" . "<br>";
    }else {
        echo $email . " " . "should contain a '@' and a '.'" . "<br>";
    };

    // age check
    if (gettype($age) === 'integer'){
        echo $age . " " . "it's a valid age";
    }else {
        echo $age . " " . "it's not an integer number";
    }
}else{
    echo "Enter a valid value";
}
?>