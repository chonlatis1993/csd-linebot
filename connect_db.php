<?php
    $host = 'us-cdbr-gcp-east-01.cleardb.net';
    $user = 'bca00ec7295698';
    $pass = '6db4fcae';
    $db = 'gcp_554dcbf9bb5e3298f5b6';
    $conn = new mysqli ($host,$user,$pass);
    mysqli_query($conn, "SET NAME utf8");
?>