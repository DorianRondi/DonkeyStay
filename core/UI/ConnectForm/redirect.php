<?php

if(isset($_POST['Subscription'])){
    echo "<pre>";
    echo "<br>SOUSCRITPION<br>";
    var_dump($_POST);
    echo "</pre>";
}elseif(isset($_POST['Connection'])){
    echo "<pre>";
    echo "<br>CONNECTION<br>";
    var_dump($_POST);
    echo "</pre>";
}else{
    echo "ERROR";
}

//header("Location:.");
?>