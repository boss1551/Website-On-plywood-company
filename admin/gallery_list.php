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
  			<div class="typo-grid">
        		<div class="typo-1">
   					<div class="grid_3 grid_5">
     					<h3 class="head-top">Gallery Images</h3>
       				<div class="but_list">
	    		<div class="col-md-6 page_1">
		
<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("jp_db");
$cmd=mysql_query("select * from gallery");
?>
		<table class="table table-bordered">
				<thead>
					<tr>
						<th width="20%">id</th>
						<th width="50%">Pic Name</th>
						<th width="50%">Picture</th>
					</tr>
				</thead>
				<tbody>
<?php
while($row=mysql_fetch_array($cmd))
{
?>
	
					<tr>
						<td><?php echo $row["g_id"]; ?></td>
						<td><?php echo $row["g_name"]; ?></td>
						<td><img width="50" height="50" src="../g_images/<?php echo $row["g_image"]; ?>" /></td>
						
					</tr>
				</tbody>
<?php
}
?>		</table>       
			</div>
			<div class="clearfix"> </div>
	   </div>
    </div>

		<div class="copy">
            <p>Copywrite @ 2017. All Rights Reserved. Design by Yogesh_Prajapati</p>
		</div>
	</div>
		<div class="clearfix"> </div>
</div>
 	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

