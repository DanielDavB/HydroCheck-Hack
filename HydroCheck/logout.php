<?php
    session_start();
    session_destroy();
    echo 'si';
    header("Location: index.php");

    
?>