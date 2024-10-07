<?php 

function getPassword ($length) {
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
    $numbers = [
        1,
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9,
        0,
    ];
    $special = [
        "!",
        ",",
        "£",
        "$",
        "%",
        "/",
        ".",
        "=",
        "^",
        "(",
        ")",
        "{",
        "}",
    ];
    
   //return bin2hex(random_bytes($length));
   $pwString = "";
   $pwInt = "";
   $pwSpecial = "";
   $password = "";
   
    for($i = 1; $i <= $length / 3; $i++) {
         $activeIndex = random_int(0, count($letters) - 1);
         $pwString .= $letters[$activeIndex];
    }

    for($i = 1; $i <= $length / 3; $i++) {
        $activeIndex = random_int(0, count($numbers) - 1);
        $pwInt .= $numbers[$activeIndex];
   }

   for($i = 1; $i <= $length / 3; $i++) {
    $activeIndex = random_int(0, count($special) - 1);
    $pwSpecial .= $special[$activeIndex];
    }
    

    return str_shuffle($password .= $pwString . $pwInt . $pwSpecial);

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
        <p>
            La tua <strong>password</strong> è: <br>
            <?php echo(getPassword($_GET["pwlength"])) ?>
        </p>
    </div>
</body>

</html>