<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        echo 'Name is '. $name;
    }
?>

<html lang="en">
    <head>
        <title>Name</title>
    </head>
    <body>
<fieldset>
        <legend>NAME</legend>
        Name <br>
        <form action="" method="post">
            <input type="text"  name="name"> <br>
            <hr>
            <input type="submit" name="submit" value="submit" id="">
        </form>
    </fieldset>
</body>
</html>