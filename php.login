<?php 

    $email = "g221210378@sakarya.edu.tr";
    $pass = "g221210378";

    $_email = $_POST["mail"];
    $_pass = $_POST["password"];

    if(($_email == $email) && ($_pass == $pass))
    {
        echo "HOŞGELDİNİZ g221210378";
    }
    else
    {
        header("Location:login.html");        
        exit();
    }


?>
