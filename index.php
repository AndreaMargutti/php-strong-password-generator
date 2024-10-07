<?php 
require_once __DIR__ . "/functions/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>

<body>
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>
    <?php  ?>
    <!--Inizio Form-->
    <form action="index.php" method="GET">
        <label for="pwlength">Lunghezza Password:</label>
        <input type="number" name="pwlength" id="pwlength">
        <button type="submit">Invia</button>
        <button type="reset">Annulla</button>
    </form>

    <div>
        <p>
            La tua <strong>password</strong> è: <br>
            <?php print (getPassword($_GET["pwlength"])) ?>
        </p>
    </div>
</body>

</html>