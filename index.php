<?php
$refcode = $_GET['ref'];
$splittedref = preg_split('//', $refcode, -1, PREG_SPLIT_NO_EMPTY);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php
        echo $refcode . " Error occured!";
        ?>
    </title>
    <!--===================================================================================================-->
    <link rel=" icon" href="assets/icons/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--===================================================================================================-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Concert+One">
    <!--===================================================================================================-->
</head>
<body>
<div class="container">
    <h1 class="title">
        <div class="errorheader">
            <?php
            echo "<h1 class=\"big-title\" id=\"char-1\">$splittedref[0]</h1>";
            echo "<h1 class=\"big-title\" id=\"char-2\">$splittedref[1]</h1>";
            echo "<h1 class=\"big-title\" id=\"char-3\">$splittedref[2]</h1>";
            ?>
        </div>
    </h1>
    <?php
    if ($refcode == 404) {
        echo "<p class=\"errordescription\">We're sorry, but the requested URL was not found on this server! Please check for misspelling, or simply return to the <a class=\"link\" href=\"/\">Homepage</a></p>";
    } elseif ($refcode == 403) {
        echo "<p class=\"errordescription\">We're sorry, but you don't have access to this content! You can return to the <a class=\"link\" href=\"/\">Homepage</a> here</p>";
    } elseif (strpos($refcode, "50") !== false) {
        echo "<p class=\"errordescription\">We're sorry, but it seems, as if our server couldn't handle that request! Please try again in a moment, or return to the <a class=\"link\" href=\"/\">Homepage</a></p>";
    } else {
        echo "<p class=\"errordescription\">Seems like something went wrong! Please try again in a moment, or return to the <a class=\"link\" href=\"/\">Homepage</a></p>";
    }
    ?>
</div>
</body>
</html>
