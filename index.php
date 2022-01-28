<html>
<body>

<form action="index.php" method="get">
 <input type="number" name="numero">
<input type="submit" value="submit">

</form>


<?php



    echo "salvo il numero";

    $name = $_GET['numero'];
    $value = $_GET['numero'];
    $expire = 86000;
    $path = "/";
    $domain = "";
    $secure = "";
    $httponly = true;

    $arr = array();
    

    setcookie ($name, $value);

    echo "<br>".$_COOKIE['numero'];

    for ($i= 0; $i <100; $i++){
        if ( $_COOKIE[$i] == true){

           

         
            echo $_COOKIE[$i];
        }

    }
    


?>

</body>
</html>


