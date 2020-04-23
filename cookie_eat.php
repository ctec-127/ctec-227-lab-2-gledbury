<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie_eat.php</title>
</head>
<body>
    <p>User Name: <?php echo $_COOKIE['username']?></p>
    <p>First Name: <?php echo $_COOKIE['firstname']?></p>
    <p>Last Name: <?php echo $_COOKIE['lastname']?></p>
    <?php  if (isset($_COOKIE["cookie"])) {
        foreach ($_COOKIE["cookie"] as $key=>$val) {
            echo $key . ' is ' . $val . "<br>\n";
        }// end for each
    }// end if?>
    
</body>
</html>