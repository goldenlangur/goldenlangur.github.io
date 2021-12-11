<!DOCTYPE html>
<html>
<head>
    <?php
        $sessionActive = false;
    ?>

    <link href="css/style.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <meta charset="utf-8">
</head>    
<body>
    <div class="header" id="header">
        <div class="session-container">
            <div class="session-negative" <?php if ($sessionActive == true) { ?> style="display: none"<?php } ?>>
                <a class="button-login" href="session.php">Inloggen</a>
                <a class="button-register" href="/session.php">Aanmelden</a>
            </div>
            <div class="session-positive" <?php if ($sessionActive == false) { ?> style="display: none"<?php } ?>>
                <button class="button-login">Uitloggen</button>
            </div>
        </div>
    </div>
</body>
</html>