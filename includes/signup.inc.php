<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   $username = $_POST["username"];
   $email = $_POST["email"];
   $number = $_POST["number"];
   $pwd = $_POST["pwd"];
   $repwd = $_POST["repwd"];

   try {
    require_once 'dbh.inc.php';
    require_once 'signup_model.inc.php';
    require_once 'signup_contr.inc.php';

//ERROR HANDLERS
$errors = [];

if (is_input_empty($username, $email, $number, $pwd, $repwd)) 
{
   $errors["empty_input"] = "Fill in all fields!";
}
if (is_email_vaild($email)) 
{
   $errors["invalid_email"] = "Invalid email used!";
}
if (is_username_taken($pdo, $username))
{ 
   $errors["username_taken"] = "Username already taken!";
}
if (is_email_registered($pdo, $email))
{ 
   $errors["email_used"] = "Email already registered!";
}


require_once 'config_session.inc.php';

/*bychance if user is singing up and wents to another
 page the information will remain their it will not 
 desipiar*/

if ($errors) {
    $_SESSION["errors_signup"] = $errors;

    $signupData = [
        "username" => $username,
        "email" => $email,
    ];
    $_SESSION["signup_data"] = $signupData;

    header("Location: ../Register_page.php");
    die();
}

create_user( $pdo, $pwd, $username, $number, $email);
header("Location: ../login_page.php?signup=success");
$pdo = null;
$stmt = null;
    die();


   } catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}
}
else {
    header("Location: ../Register_page.php"); /*to send them to the front page*/
    die();
}