<?php
    require_once "dbconnect.php";
?>

<link rel="stylesheet" href="style.css">

 <table id = "t1">
  
    <tr>
        <th>id</th>
        <th>Category name</th>
        <th>Product Name</th>
        <th>price</th>
        <th>status</th>
        <th>Actions </th>
    </tr>


    <?php
        $sqlQuery = "SELECT prod.id, cat.categoryName, prod.productName, prod.price cat.categoryStatus
        FROM prod INNER JOIN cat
        ON   prod.category = cat.catID";
        $res = $conn->query($sqlQuery);
        while($row =mysqli_fetch_object($res)){
            ?>
          
                <tr>
                    <td><?php echo $row->id?></td>
                    <td><?php echo $row->categoryName?></td>
                    <td><?php echo $row->productName?></td>
                    <td><?php echo $row->price?></td>
                    <td><?php echo $row->categoryStatus?></td>
                    <td><a href="deleteCategory.php?id=<?php echo $row->id?>">Delete</a></td>
                </tr>

               
          
        <?php
            }   
        ?>
</table>

 