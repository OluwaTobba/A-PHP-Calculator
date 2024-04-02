<?php
    $cookie_name1="num";
    $cookie_value1="";
    $cookie_name2="op";
    $cookie_value2="";

    if(isset($_POST["num"])){
        $num=$_POST["input"].$_POST["num"];
    }
    else{
        $num="";
    }

    if(isset($_POST["op"])){
        $cookie_value1=$_POST["input"];
        setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

        $cookie_value2=$_POST["op"];
        setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
        $num="";
    }

    if(isset($_POST["equal"])){
        $num=$_POST["input"];
        switch($_COOKIE["op"]){
            case "+":
                $result=$_COOKIE["num"]+$num;
                break;
            case "-":
                $result=$_COOKIE["num"]-$num;
                break;
            case "*":
                $result=$_COOKIE["num"]*$num;
                break;
            case "/":
                $result=$_COOKIE["num"]/$num;
                break;
        }
        $num=$result;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI PHP Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calc {
            margin: auto;
            border: 4px solid hsla(240, 15%, 86%, 0.7);
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .maininput {
            width: calc(100% - 40px);
            padding: 10px;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: right;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-weight: 500;
        }

        .numbtn, .calcbtn, .equalbtn {
            width: calc(25% - 20px);
            padding: 15px;
            font-size: 20px;
            margin: 5px;
            border: none;
            border-radius: 18px;
            cursor: pointer;
            background-color: #4CAF50;
            color: #fff;
        }

        .equalbtn{
            width: calc(100% - 30px);
        }

        .numbtn:hover {
            background-color: #45a049;
        }

        .calcbtn, .equalbtn {
            background-color: #f44336;
        }

        .calcbtn:hover, .equalbtn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <br>
            <input type="text" class="maininput" name="input" value="<?php echo @$num?>"> <br> <br>
            <input type="submit" class="numbtn" name="num" value="7">
            <input type="submit" class="numbtn" name="num" value="8">
            <input type="submit" class="numbtn" name="num" value="9">
            <input type="submit" class="calcbtn" name="op" value="+"> <br>
            <input type="submit" class="numbtn" name="num" value="4">
            <input type="submit" class="numbtn" name="num" value="5">
            <input type="submit" class="numbtn" name="num" value="6">
            <input type="submit" class="calcbtn" name="op" value="-"> <br>
            <input type="submit" class="numbtn" name="num" value="1">
            <input type="submit" class="numbtn" name="num" value="2">
            <input type="submit" class="numbtn" name="num" value="3">
            <input type="submit" class="calcbtn" name="op" value="*"> <br>
            <input type="submit" class="calcbtn" name="C" value="C">
            <input type="submit" class="numbtn" name="num" value="0">
            <input type="submit" class="numbtn" name="num" value=".">
            <input type="submit" class="calcbtn" name="op" value="/"> <br>
            <input type="submit" class="equalbtn" name="equal" value="=">
        </form>
    </div>
</body>
</html>