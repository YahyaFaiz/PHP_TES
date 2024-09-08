<?php








// var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = HTMLSPECIALCHARS($_POST["firstname"]);
    $lastname = HTMLSPECIALCHARS($_POST["lastname"]);
    $favouritepet = HTMLSPECIALCHARS($_POST["favouritepet"]);

    if (empty($firstname)) {
        exit();
        header("Location: index.php");
    }

    echo "these are the data, that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;

    // header("Location: index.php");
} else {
    header("Location: index.php");
}
