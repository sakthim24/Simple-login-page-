<?php

require ('helper.php');
// error variable.
$error = array();
// if(isset($_POST['submit'])){

$firstName = validate_input_text($_POST['firstName']);
if (empty($firstName)){
    $error[] = "You forgot to enter your first Name";
}

$lastName = validate_input_text($_POST['LastName']);
if (empty($lastName)){
    $error[] = "You forgot to enter your Last Name";
}

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter your Email";
}

$phone = validate_input_text($_POST['phone']);
if (empty($phone)){
    $error[] = "You forgot to enter your Phone Number";
}
$adress1 = validate_input_text($_POST['adress1']);
if (empty($adress1)){
    $error[] = "You forgot to enter your address";
}

$adress2 = validate_input_text($_POST['adress2']);
if (empty($adress2)){
    $error[] = "You forgot to enter your address";
}
$city = validate_input_text($_POST['city']);
if (empty($city)){
    $error[] = "You forgot to enter your city";
}

$pin = validate_input_text($_POST['pin']);
if (empty($pin)){
    $error[] = "You forgot to enter your pin code";
}
$company = validate_input_text($_POST['company']);
if (empty($company)){
    $error[] = "You forgot to enter your Company";
}
$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)){
    $error[] = "You forgot to enter your Confirm Password";
}

$files = $_FILES['profileUpload'];
$profileImage = upload_profile('./assets/profile/', $files);

if(empty($error)){
    // register a new user
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require ('mysqli_connect.php');

    // make a query
    $query = "INSERT INTO user (userID, firstName, LastName, email, phone, adress1, adress2, city, pin, company, password, profileImage, registerDate )";
    $query .= "VALUES(' ', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";

    // initialize a statement
    $q = mysqli_stmt_init($con);

    // prepare sql statement
    mysqli_stmt_prepare($q, $query);

    // bind values
    mysqli_stmt_bind_param($q, 'sssssssisss', $firstName, $lastName, $email, $phone, $adress1, $adress2, $city, $pin, $company, $hashed_pass, $profileImage);

    // execute statement
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q) == 1){

        // start a new session
        session_start();

        // create session variable
        $_SESSION['userID'] = mysqli_insert_id($con);

        header('location: login.php');
        exit();
    }else{
        print "Error while registration...!";
    }

}else{
    echo 'not validate';
}


















