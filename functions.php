<?php
$conn = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "pwpb");

function query ($query): array{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[]  =$row;
}
    return $rows;
}


?>