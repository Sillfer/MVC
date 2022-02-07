 <?php
include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $usersObj = new UsersView();
        $usersObj->showUser("Elmahdi");

        // $usersObj = new UsersContr();
        // $usersObj-> createUser("Jane", "Doe", "1845-03-34");

    ?>
</body>
</html>