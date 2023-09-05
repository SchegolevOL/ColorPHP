<?php
error_reporting(-1);
require_once 'functions.php';
$back_color='white';
if (isset($_POST['color']))$back_color=$_POST['color'];

$colors=getColors();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<div class="container">
<body style="background-color: <?= $back_color?>">
<form method="post">
    <select name="color" class="form-select" aria-label="Default select example">
        <?php foreach ($colors as $color):?>
        <option selected><?= $color['color']?></option>
        <?php endforeach;?>
    </select>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>