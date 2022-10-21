<link rel="stylesheet" href="style3.css">

<form action ="receivecat.php"  method = "post">
<label for="cars">Choose a category status:</label>
    <select class = "statbox" name="status">
    <option value="active">Active</option>
    <option value="inactive">Inactive</option>
  
    </select>
    <br>
    <input type="text" placeholder="Enter category name" name="categoryName">
    <br><br>
  
    <input type="submit" value="submit">
</form>