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