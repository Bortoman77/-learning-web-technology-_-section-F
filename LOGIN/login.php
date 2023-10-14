<?php
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
    
        $invalidChars = ['~', '`', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '=', '{', '}', '[', ']', '|', '\\', ';', ':', "'", '"', '<', '>', ',', '.', '?', '/'];
    
        if (strlen($username) < 2)
        {
            echo "Username must contain at least two characters";
        }
        elseif (strlen($password) < 8) 
        {
            echo "Password must be at least eight characters";
        }
        elseif (strpbrk($username, implode('', $invalidChars)) !== false)
        {
            echo "Invalid username format";
        }
        elseif (!preg_match('/[@#$%]/', $password))
        {
            echo "Password must contain at least one of the special characters (@, #, $, %)";
        }
        else
        {
            echo "Valid user";
        }
    }
    ?>
    
?>