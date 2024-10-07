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
    $permitted = [];
    
   $password = "";
   
   $permitted = [...$letters, ...$numbers, ...$special];
   //var_dump($permitted);
   
        for($i = 1; $i <= $length; $i++) {
            $activeIndex = random_int(0, count($permitted) - 1);
            $password .= $permitted[$activeIndex];
         }

    return $password;
}

?>