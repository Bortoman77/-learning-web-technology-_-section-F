<?php
    $email = '';
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
            <input type="text" name="email" value="<?php echo $email ?>"> 
            <input type="submit"  value="i" title="hint: abc@abc.com">
            <br>
            <input type="submit" name="submit" value="submit" id="">
        </form>
    </fieldset>
</body>
</html>