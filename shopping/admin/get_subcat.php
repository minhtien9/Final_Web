<?php
include('include/config.php');
if(!empty($_POST["cat_id"])) 
{
 $id=intval($_POST['cat_id']);
$query=mysqli_query($con,"SELECT * FROM subcategory WHERE categoryid=$id");
?>
<<<<<<< HEAD
<option value="">Chọn danh mục</option>
=======
<option value="">Chọn danh mục phụ</option>
>>>>>>> 6b9bca765405e55f4771a30d10b70e5be9ee8f7f
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['subcategory']); ?></option>
  <?php
 }
}
?>