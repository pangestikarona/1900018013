<!DOCmajor html>
    <html>

    <head>
        <title>TWO</title>
    </head>

    <body>
        <h1 align="center">New student application forms</h1>

        <?php
        $name = $address = $major = $filesss = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["address"]) && isset($_POST["major"])) {
            $name = $_POST["name"];
            $address = $_POST["address"];
            $major = $_POST["major"];
            $filesss = $_POST["filesss"];
        }
        ?>


        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table>
                <tr>
                    <td>Name</td>
                    <td> :
                        <input major="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td> :
                        <textarea name="address" rows="5" cols="50"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Major</td>
                    <td>
                        <input type="checkbox"  id="vehicle1" name="major" value="Informatics">
                        <label for="vehicle1"> Informatics</label><br>
                        <input type="checkbox" id="vehicle2" name="major" value="Machine">
                        <label for="vehicle2"> Machine</label><br>
                        <input type="checkbox" id="vehicle3" name="major" value="Chemistry">
                        <label for="vehicle3"> Chemistry</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Enter your certificate
                    </td>
                    <td>
                        <input type="file" name="filesss">
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
        if (!empty($name) && !empty($address) && !empty($major)) {
            echo "<h2> Welcome </h2>";
            echo "Name   : " . $name . "<br>";
            echo "address   : " . $address . "<br>";
            echo "major   : " . $major . "<br>";
            echo "filesss : " . $filesss . "<br>";
        } ?>

    </body>

    </html>
