<?php
    error_reporting(0);
    session_start();

    
    $_SESSION['cart'][] = array(
        'nama'=> $_GET['product_name']
    );

    foreach($_SESSION['cart'] as $data){
        echo "<tr>";
            echo "<td>".$data['nama']."</td>";
        echo "</tr>";
    }


?>