<?php


if (!empty($_POST)) {
   
    session_start();
    
    if ($_POST['code'] == "2021") {

        $_SESSION["allowed"] = true;

        header("Location: welcome.php");
        
    } else {
        $error = "sorry, probeer nog eens";
    }

    
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Kluis</title>
</head>

<body>
    <div class="container">
        <div class="text">OPEN DE KLUIS!</div>
        <div class="page">
            <div class="title">
                <img src="images/closed-locker.svg">

            </div>

            <form action="#" method="POST">

                <p><?php echo $error; ?><?php echo $success; ?></p>

                <label>Vul de code in</label>
                <input type="password" id="code" name="code" placeholder="Voer de code in">
                <button type="submit" name="open" id="btnSubmit">CONTROLEER CODE</button>

            </form>

</body>

</html>
