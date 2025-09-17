<?php
    include_once ('data.php');

    if(isset($_GET['p_id']))
    {
        $p_id = $_GET['p_id'];
        $result = $conn->query("DELETE FROM products WHERE p_id = $p_id");
        
        if($result) {
            header("Location: display.php?message=Product deleted successfully");
        } else {
            header("Location: display.php?error=Failed to delete product");
        }
        exit();
    }
    else
    {
        header("Location: display.php?error=No product selected");
        exit();
    }
?>