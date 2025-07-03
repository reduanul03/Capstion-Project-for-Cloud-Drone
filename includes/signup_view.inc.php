<?php

declare(strict_types=1);

//if the user name is used or taken by someone else
function signup_inputs(){
    if (isset($_SESSION["signup_data"]["username"])
    && !isset($_SESSION["errors_signup"]["username_taken"]))
     {
        echo '<input id="taptap" type="text" name="username"
         placeholder="Username" value="'
          . $_SESSION["signup_data"]["username"] . '">';
    } else {
        echo ' <input id="taptap" type="text" name="username" 
        placeholder="Username">';
    }
   echo '<input id="taptap" type="password" name="pwd" placeholder="Password">'; 


 //if the email is used by someone else  
   if (isset($_SESSION["signup_data"]["email"])
   && !isset($_SESSION["errors_signup"]["email_used"])
   && !isset($_SESSION["errors_signup"]["invalid_email"])
   )
    {
       echo '<input id="taptap" type="text" name="email" placeholder="E-mail" value="'
         . $_SESSION["signup_data"]["email"] . '">';
   } else {
       echo '<input id="taptap" type="text" name="email"
        placeholder="E-mail">';
   }   


}

//Error and successs messsage in signup
function check_signup_errors(){
    if (isset($_SESSION['errors_signup'])) {
       $errors = $_SESSION['errors_signup'];

       echo "<br>";

       foreach($errors as $error){
        echo '<p class="error_text">' . $error . '</p>';
       }

       unset($_SESSION['errors_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"]
    === "success") {
        echo '<br>';
        echo '<p class="from-success">Signup Success!</p>';
    }
}