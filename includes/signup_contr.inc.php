<?php

declare(strict_types=1);
/* error handlers for signup.inc.php*/
function is_input_empty(string $username, 
        string $pwd, string $email, string $number, string $repwd){
    if (empty($username) || empty($pwd) ||  empty($email) || empty($number) || 
    empty($repwd)) {
        return true;
    }
    else {
        return false;
    }
}

function is_email_vaild(string $email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    else {
        return false;
    }
}


function is_username_taken(object $pdo, 
string $username){
    if ( get_username( $pdo, $username)) {
        return true;
    }
    else {
        return false;
    }
}


function is_email_registered(object $pdo, 
string $email){
    if (get_email($pdo, $email)) {
        return true;
    }
    else {
        return false;
    }
}



function create_user(object $pdo, string $pwd, 
string $username, string $email, string $number){
    set_user($pdo, $pwd, $username, $email, $number);
}
/*error handler all above for signup.inc.php */