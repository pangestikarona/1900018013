<?php
$name = $address = $major = $filesss = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $error = false;

    if (empty($_POST['name'])) {
        $error = true;
    }

    if (empty($_POST["address"])) {
        $error = true;
    }

    if (empty($_POST["major"])) {
        $error = true;
    }

    $data = "";
    foreach ($_POST as $value) {
        $data .= $value . "|";
    }
    $data = trim($data, "|");

    if (false == $error) {
        $file = __DIR__ . '/newstudent.txt';

        $open = fopen($file, "a+");
        @fwrite($open, $data . "\r\n");
        @fclose($open);

        header("location:table.php");
    }
}
