<!DOCTYPE html>
<html>
<head>
    <?php
        if (!empty($_GET["or"])) {
            $errorid = $_GET["or"];
        } else {
            $errorid = "404";
        }

        if ($errorid == "404") {
            $errordesc = "Page not found";
        } else {
            $errordesc = "Oops";
        }
    ?>

    <link rel="shortcut icon" href="media/favicon.png">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/session.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <title>Inloggen | Goldenlangur.github.io</title>
</head>

<body>
    <div class="view">
        <div class="spacing"></div>
        <div class="banner">
            <div class="session-container">
                <h1>Inloggen</h1>
                <div class="session-input">
                    <input type="text" id="mail" placeholder="Email">
                </div>
                <button class="session-submit">Inloggen</button>
            </div>
        </div>
        <div class="spacing"></div>
        <a class="button-home" href="/index.php">Home</a>
    </div>
</body>
</html>