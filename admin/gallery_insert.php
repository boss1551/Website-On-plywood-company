<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel </title>
<link rel="shortcut icon" href="../images/logo1.jpg" />
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/custom.css" rel="stylesheet">

</head>
<body>
<div id="wrapper">
        <nav class="navbar-default navbar-static-top">
            <div class="navbar-header">
                <h1> <a class="navbar-brand" href="index1.php">Admin</a></h1>         
			</div>
			<div class="clearfix"></div>
     
		    <div class="navbar-default sidebar">
                <div class="sidebar-nav navbar-collapse">
                	<ul class="nav" id="side-menu">
						<li>
                	        <a href="index1.php"><i class="fa fa-home nav_icon "></i><span class="nav-label">Home page</span> </a>
                    	</li>
                    	<li>
                        	<a href="gallery_insert.php"><i class="fa fa-picture-o nav_icon"></i><span class="nav-label">Add Gallery</span> </a>
                    	</li>
                    	<li>
                        	<a href="gallery_list.php"><i class="fa fa-picture-o nav_icon"></i><span class="nav-label">Gallery List</span> </a>
                    	</li>
                    	<li>
                        	<a href="product_insert.php"><i class="fa fa-product-hunt nav_icon"></i><span class="nav-label">Add Product</span> </a>
                    	</li>
                    	<li>
                        	<a href="product_list.php"><i class="fa fa-product-hunt nav_icon"></i><span class="nav-label">Product List</span></a>
                    	</li>
	                    <li>
    	                    <a href="logout.php" ><i class="fa fa-sign-out nav_icon"></i><span class="nav-label">Logout</span> </a>
        	            </li>
        	        </ul>
            	</div>
			</div>
       </nav>
    </div> 

	<div id="page-wrapper" class="gray-bg dashbard-1">
       		<div class="content-main">
 				<div class="grid-form">
 					<div class="grid-form1">
 						<h3 id="forms-example" class="">Add Gallery Images</h3>
		 				<form name="forms.php" action="" method="post" enctype="multipart/form-data">
		  					<div class="form-group">
								<input type="name" class="form-control" name="name" placeholder="Enter Image Name"><br>
								<label for="exampleInputFile">File input</label>
								<input type="file" id="exampleInputFile" name="flupload">        
		   					</div>	
							<input type="submit" class="btn-primary btn" name="submit" Value"submit">
						</form>
		
<?php
if(isset($_REQUEST["submit"])==true)
{
	$name=$_POST["name"];	
	$image=$_FILES["flupload"]["name"];
	$tname=$_FILES["flupload"]["tmp_name"];
	$path="../g_images/$image";
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("jp_db");
	
	if(move_uploaded_file($tname,$path)==true)
	{
		$cmd=mysql_query("insert into gallery(g_name,g_image) values('$name','$image') ");
		echo "Data inserted Successfully...";
		header("location:gallery_list.php");
	}
	else
	{
			echo "Data inserted Unsuccessfully...";
	}
	mysql_close($con);
}
?>		
			</div>
		</div>
			<div class="copy">
            	<p>Copywrite @ 2017. All Rights Reserved. Design by Yogesh_Prajapati</p>
            </div>
	</div>
			<div class="clearfix"> </div>
</div>
</body>
</html>

