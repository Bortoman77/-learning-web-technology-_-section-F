<?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        echo "your email is " . $email;
    }
?>

<html lang="en">
<head>
    <title>Email</title>
</head>
<body>
<fieldset>
        <legend>EMAIL</legend>
        Email <br>
        <form action="" method="post">
            <input type="text" name="email"> 
            <input type="submit"  value="i" title="hint: abc@bca.com">
            <br>
            <input type="submit" name="submit" value="submit" id="">
        </form>
    </fieldset>
</body>
</html>