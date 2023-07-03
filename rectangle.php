<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $length=$_POST['length'];
    $breadth=$_POST['breadth'];
    $area=$length*$breadth;
    echo "The area of rectangle is $area";
    ?>
    <form action="" method="POST">
        <center>
            <table>
                <tr>
                    <td>
                    <label for="">Enter the length:</label>
                    <input type="number" name="length">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label for="">Enter the breadth</label>
                    <input type="number" name="breadth">
                    </td>
                </tr>
                <tr>
                    <td>
                    <button name="submit">Calculate</button>
                    </td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>