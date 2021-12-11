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
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/script.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
   
    <meta charset="utf-8">
    <title><?php echo $title; ?> | Goldenlangur.github.io</title>
</head>

<body>
    <div class="view">
        <div class="script-header">
        <?php include "ui/header.php"; ?>
        </div>
        <div class="content">
            <div class="script-container">
                <p><?php echo nl2br(file_get_contents($path)); ?></p>
            </div>
        </div>
        <?php include "ui/footer.php"; ?>
    </div>
</body>
</html>