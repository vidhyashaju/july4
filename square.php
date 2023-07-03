<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit']))
    {
        $side=$_POST['side'];
        $area=$side*$side;
        echo " Area of square is :$area";
    }

    ?>
    <form action="" method="POST">
        <center>
            <table>
                <tr>
                      <label for="">Enter the side</label>
                      <input type="number" name="side">
                </tr>
                <tr>
                     <button name="submit">Calculate</button>
                </tr>
        
        </table>
        </center>
    </form>
</body>
</html>