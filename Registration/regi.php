<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];

    if (empty($username))
    {
        echo "Username is required.";
    }
    else if (!ctype_alnum(str_replace(array('-', '_','.'), '', $username)))
    {
        echo "Username can only contain letters, numbers, dashes (-), underscores (_) or dots (.)";
    }
    else if (strlen($username) < 2)
    {
        echo "Username must be at least 2 characters long.";
    }
    else if (strlen($password) < 8)
    {
        echo "Password must be at least 8 characters long.";
    }
    else if (!preg_match('/[@#$%]/', $password))
    {
        echo "Password must contain at least one of the special characters (@, #, $, %).";
    }
    else if ($password != $confirmPassword)
    {
        echo "Password and Confirm Password do not match.";
    }
    else
    {
        echo "Registration Successful!";
    }
}
?>
