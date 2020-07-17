<?php require_once ("./app/models/PostsContent.php");?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

    <title>Posts</title>
</head>
<body>
<?php include "templates/Header.php"?>
<div class="container">
    <div class="row">
        <div class="main col-sm-8 col-md-5 col-lg-6">
            <ul class="list-group">
                <li class="list-group-item"><?php echo $PostsContent["Post1"]?></li>
                <li class="list-group-item"><?php echo $PostsContent["Post2"]?></li>
                <li class="list-group-item"><?php echo $PostsContent["Post3"]?></li>
                <li class="list-group-item"><?php echo $PostsContent["Post4"]?></li>
                <li class="list-group-item"><?php echo $PostsContent["Post5"]?></li>
            </ul>
        </div>
    </div>
    <?php include "templates/Navigation.php"?>
</div>
<?php include "templates/Footer.php"?>

</body>
</html>