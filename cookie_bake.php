<?php 
    session_start();
    setcookie ("username", "BettyW", time() + 7200);
    setcookie ("firstname", "Betty", time() + 7200);
    setcookie ("lastname", "White", time() + 7200);
    setcookie ("cookie[institution]", "Clark", time() + 7200);
    setcookie ("cookie[city]", "Vancouver", time() + 7200);
    setcookie ("cookie[state]", "WA", time() + 7200);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie_bake.php</title>
</head>
<body>
    <p>This page is "baking" our delicious cookies.</p>
</body>
</html>