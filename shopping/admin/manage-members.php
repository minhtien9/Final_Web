
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

<<<<<<< HEAD

if(isset($_POST['submit']))
{
	$fullname=$_POST['fullame'];
	$idCard=$_POST['idCard'];
$sql=mysqli_query($con,"insert into members(fullname,idcard) values('$fullname','$idcard')");
$_SESSION['msg']="Thành công !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from members where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Thành công !!";
=======
if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from products where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Product deleted !!";
>>>>>>> 31d3de0199750c504607828c3fe068449e0e2021
		  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
	<title>Quản trị viên| Tạo danh mục</title>
=======
	<title>Quản trị viên |  Quản lý thành viên </title>
>>>>>>> 31d3de0199750c504607828c3fe068449e0e2021
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

<<<<<<< HEAD
						<div class="module">
							<div class="module-head">
								<h3>Thành viên nhóm</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
=======
	<div class="module">
							<div class="module-head">
								<h3>Quản lý thành viên</h3>
							</div>
							<div class="module-body table">
	<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
>>>>>>> 31d3de0199750c504607828c3fe068449e0e2021
									</div>
<?php } ?>

									<br />

<<<<<<< HEAD
			<form class="form-horizontal row-fluid" name="members" method="post" >
									
<div class="control-group">
<label class="control-label" for="basicinput">Tên thành viên</label>
<div class="controls">
<input type="text"  name="members" class="span8 tip" required>
</div>
</div>


<div class="control-group">
											<label class="control-label" for="basicinput">Mã số sinh viên</label>
											<div class="controls">
												<textarea class="span8" name="mssv" rows="5"></textarea>
											</div>
										</div>

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Tạo</button>
											</div>
										</div>
									</form>
							</div>
						</div>


	<div class="module">
							<div class="module-head">
								<h3>Quản lý Thành viên</h3>
							</div>
							<div class="module-body table">
=======
							
>>>>>>> 31d3de0199750c504607828c3fe068449e0e2021
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
<<<<<<< HEAD
											<th>Họ và Tên</th>
											<th>Mã số sinh viên</th>
											<th>Hoạt động</th>
											
=======
											<th> Tên</th>
											<th>Mã số sinh viên</th>
										
>>>>>>> 31d3de0199750c504607828c3fe068449e0e2021
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from members");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['fullname']);?></td>
											<td><?php echo htmlentities($row['idcard']);?></td>
<<<<<<< HEAD
											<td> <?php echo htmlentities($row['position']);?>
										
											
											<a href="edit-members.php?id=<?php echo $row['id']?>" ><i class="icon-edit"></i></a>
											<a href="manage-members.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Bạn có muốn xóa không?')"><i class="icon-remove-sign"></i></a></td>
										</tr>
=======
											
											
>>>>>>> 31d3de0199750c504607828c3fe068449e0e2021
										<?php $cnt=$cnt+1; } ?>
										
								</table>
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>