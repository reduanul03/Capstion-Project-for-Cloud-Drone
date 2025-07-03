<?php

declare(strict_types=1);

//checking fot unique username
function get_username(object $pdo, string $username)
{
    $query = "SELECT username FROM users WHERE
    username = :username;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//Checking Email if it is valid
function get_email(object $pdo, string $email)
{
    $query = "SELECT username FROM users WHERE
    email = :email;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

//password hashing to have giberish pass in the database
function set_user(object $pdo, string $pwd, 
string $username, string $email, string $number)
{
    $query = "INSERT INTO users(username, pwd, email, number) 
    VALUES(:username, :pwd, :email, :number);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hashedPwd);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":number", $number);
    $stmt->execute();
}