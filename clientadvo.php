<?php
$Fir = filter_input(INPUT_POST,'Fir');
$Casedesc = filter_input(INPUT_POST,'Casedesc');
$typ = filter_input(INPUT_POST,'typ');


    $host="localhost";
    $dbusername="root";
    $dbname="glitchmob";
    $dbpassword="";
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);


    if (mysqli_connect_error())
    {
      die('Connect Error('.mysqli_connect_errno().')'.mysqli.mysqli_connect_error());
    }
    else
    {
        $sql="INSERT INTO clientadvo (Fir,Casedesc,typ)
        values ('$Fir','$Casedesc','$typ')";
        if($conn->query($sql))
        {
          header("Location:client-advo.html");
        }
        else {
          echo "Error:".$sql."<br>".$conn->error;
        }
         $conn->close();
    }


?>
