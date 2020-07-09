<!DOCTYPE html>
<html>

<head>
    <title>Tabel</title>
    <style type="text/css">
        h1 {
            text-align: center;
        }

        table,
        th,
        td {
            border-collapse: collapse;
            border: 1px solid black;
            width: 50%;
            padding: 15px;
        }

        table,
        thead {
            background-color: #f1f1c1;
        }

        .text {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>New student</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>address</th>
                <th>Major</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $file = __DIR__ . '/newstudent.txt';
            if (file_exists($file)) {
                $lines = file($file);
                $size = sizeof($lines);
                $data = [];
                for ($i = 0; $i < $size; $i++) :
                    $input = (explode("|", $lines[$i]));
            ?>
                    <tr>
                        <td class="text"><?= ($i + 1); ?></td>
                        <td><?= $input[0]; ?></td>
                        <td><?= $input[1]; ?></td>
                        <td><?= $input[2]; ?></td>
                    </tr>
            <?php
                endfor;
            }
            ?>

        </tbody>
    </table>
</body>

</html>
