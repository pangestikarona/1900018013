<!DOCTYPE html>
<html>

<head>
    <title>TWO</title>
</head>

<body>
    <h1 align="center">Patients records</h1>

    <?php
    $name = $room = $type = $gender = $status = $date = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["room"]) && isset($_POST["type"]) && isset($_POST["gender"])) {
        $name = $_POST["name"];
        $room = $_POST["room"];
        $type = $_POST["type"];
        $gender = $_POST["gender"];
        $status = $_POST["status"];
        $date = $_POST["date"];
    }
    ?>


    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table>
            <tr>
                <td>Name</td>
                <td> :
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>Room</td>
                <td> :
                    <input type="text" name="room">
                </td>
            </tr>
            <tr>
                <td>
                    Patient Type
                </td>
                <td>
                    : <input type="radio" name="type" value="child" checked />child
                    <input type="radio" name="type" value="teen" checked />teen
                    <input type="radio" name="type" value="young_adult" checked />young adult
                    <input type="radio" name="type" value="adult" checked />adult
                </td>
            </tr>
            <tr>
                <td>
                    Gender
                </td>
                <td>
                    : <input type="radio" name="gender" value="Female" checked />female
                    <input type="radio" name="gender" value="male" checked />male
                    <input type="radio" name="gender" value="other" checked />other
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td> :
                    <input type="text" name="status">
                </td>
            </tr>
            <tr>
                <td>BDate</td>
                <td> :
                    <input type="Date" name="date">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="save">
                </td>
                <td>
                    <input type="reset" name="reset">
                </td>
            </tr>

        </table>
    </form>

    <?php
    if (!empty($name) && !empty($room) && !empty($type) && !empty($gender)) {
        echo "<h2> Welcome </h2>";
        echo "Name   : " . $name . "<br>";
        echo "Room   : " . $room . "<br>";
        echo "Type   : " . $type . "<br>";
        echo "Gender : " . $gender . "<br>";
        echo "Status : " . $status . "<br>";
        echo "Date   : " . $date . "<br>";
    } ?>

</body>

</html>