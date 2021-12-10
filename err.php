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
    <link href="css/error.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <title>Error <?php echo $errorid; ?> | Goldenlangur.github.io</title>
</head>

<body>
    <div class="view">
        <div class="header">
            <h1>Error <?php echo $errorid; ?></h1>
            <p><?php echo $errordesc; ?> :(</p>
        </div>
    </div>
</body>
</html>