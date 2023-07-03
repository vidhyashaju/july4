<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num=$_POST['num'];
    $count=0;
    for($i=1;$i<=$num;$i++)
    {
        if($num%$i==0)
        {
          $count++;
        }
    }
    if($count==2)
    {
        echo "Number is prime";
    }
    else{
        echo "Not prime";
    }
    ?>
    <form action="" method="POST">
        <center>
            <table>
                <tr>
                    <label for="">Enter a number:</label>
                    <input type="number" name="num">
                </tr>
                <tr>
                    <button name="submit">Check</button>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>