<?php 
    require_once 'conn.php';
    
    $result_array = array();

    $sql = "SELECT * FROM form ";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($result_array, $row);
        }
    }
    echo json_encode($result_array);
    

