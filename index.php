<?php 

$letters = [
    "a",
    "b",
    "c",
    "d",
    "e",
    "f",
    "g",
    "h",
    "i",
    "j",
    "k",
    "l",
    "m",
    "n",
    "o",
    "p",
    "q",
    "r",
    "s",
    "t",
    "u",
    "v",
    "w",
    "x",
    "y",
    "z",
    "A",
    "B",
    "C",
    "D",
    "E",
    "F",
    "G",
    "H",
    "I",
    "J",
    "K",
    "L",
    "M",
    "N",
    "O",
    "P",
    "Q",
    "R",
    "S",
    "T",
    "U",
    "V",
    "W",
    "X",
    "Y",
    "Z",
];

function getPassword ($length) {
   //return bin2hex(random_bytes($length));
    
}

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
        <p><?php echo(getPassword($_GET["pwlength"])) ?></p>
    </div>
</body>

</html>