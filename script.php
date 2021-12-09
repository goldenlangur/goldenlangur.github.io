<!DOCTYPE html>
<html>
<head>
    <?php
        //get script name and set to path
        $id = $_GET["id"];
        $path = "text/" . $id . ".txt";

        if (file_exists($path)) {
            $filename = basename($path, ".txt");

            $title = ucwords(str_replace("-", " ", $filename)) . " script";
        } else {
            //redirect to 404 page
            header("Location: err.php?or=404");
        }
    ?>

    <link rel="shortcut icon" href="media/favicon.png">
    <link href="css/index.css" rel="stylesheet" type="text/css">
   
    <meta charset="utf-8">
    <title><?php echo $title; ?> | Goldenlangur.github.io</title>
</head>

<body>
    <div class="view">
        <div class="header">
            <h1><?php echo $title; ?></h1>
            <hr>
        </div>

        <div class="content">
            <object data=<?php echo $path; ?> type="text/plain" width="100%" height="100%">
            </object>
        </div>

        <div class="footer">
            <hr>
            <p>© 2021 Liam & Vincent</p>
        </div>
    </div>
</body>
</html>