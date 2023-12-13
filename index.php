<?php
include __DIR__ . "/partials/function.php";

$email_valid = '';

if (isset($_GET['InputEmail'])) {
    $input_email =  $_GET['InputEmail'];
    $array_email = str_split($input_email, 1);
    
    $email_valid = emailValidator($array_email);
} else {
    $email_valid = 'email non presente';
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>

    <form action="index.php" method="GET">
        <div class="mb-3">
            <label for="InputEmail" class="form-label">Email</label>
            <input type="text" class="form-control" id="InputEmail" name="InputEmail">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div><?php echo $email_valid ?></div>

</body>

</html>