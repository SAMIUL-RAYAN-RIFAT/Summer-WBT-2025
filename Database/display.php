<?php
    include_once ('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Display</h1>

    <!-- Search Form -->
    <form method="get" action="">
        <input type="text" name="search" placeholder="Search by name" 
               value="<?php echo isset($_GET['search']) ? $_GET['search'] : '' ?>">
        <button type="submit">Search</button>
    </form>
    <br>

    <table style="border-collapse: collapse;border: 1px solid black;">
        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black;">Name</td>
            <td style="border: 1px solid black;">Profit</td>
            <td style="border: 1px solid black;"></td>
        </tr>
        <?php
            $display="display";

            // Check if search is given
            if(isset($_GET['search']) && $_GET['search'] != ""){
                $search = $_GET['search'];
                $stmt = $conn->prepare("SELECT * FROM products WHERE display=? AND name LIKE ?");
                $likeSearch = "%".$search."%";
                $stmt->bind_param("ss", $display, $likeSearch);
                $stmt->execute();
                $result = $stmt->get_result();
                $pr = $result->fetch_all(MYSQLI_ASSOC);
            } else {
                $pr=$conn->query("SELECT * FROM products WHERE display='$display'"); 
                $pr=$pr->fetch_all(MYSQLI_ASSOC);
            }

            foreach($pr as $row):
                $name=$row['name'];
                $b_price=$row['b_price'];
                $s_price=$row['s_price'];
                $profit=$s_price-$b_price;
        ?>
        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black;"><?php echo($name)?></td>      
            <td style="border: 1px solid black;"><?php echo($profit)?></td>      
            <td style="border: 1px solid black;">
                <a href="edit.php?p_id=<?php echo $row['p_id']?>">edit</a>
                <a href="delete.php?p_id=<?php echo $row['p_id']?>">delete</a>
            </td>      
        </tr>
        <?php endforeach;?>
    </table>
    
</body>
</html>
