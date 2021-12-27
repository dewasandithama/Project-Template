<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'pkl');
    
    if(mysqli_connect_errno()) {
       mysqli_error();
    }
?>