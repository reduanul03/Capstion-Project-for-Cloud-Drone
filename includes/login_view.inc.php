<?php

declare(strict_types=1);

/*logged in as a user */

function output_username()
{
    if (isset($_SESSION["user_id"])) {
        echo "You are Logged in as " . $_SESSION["user_username"];
        }
    else {
        echo "You are not logged in";
    }    
}

/*logged in user end */
function check_login_errors(){
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        echo "<br>";

        foreach($errors as $error){
            echo '<p class="error_text">' . $error .'</p>';
        }

       unset($_SESSION['errors_login']); 
    }
    else if (isset($_GET['login'])
        && $_GET['login'] == "success") {
            echo '<br>';
            echo '<p class="from-success">Login Success!</p>';
    }

}