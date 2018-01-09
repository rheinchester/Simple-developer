<?php
	include_once '../database/Article.php';
	include_once '../header.php';
	include_once ('../database/Category.php');
    include_once ('../database/session.php');
    include_once ('../database/function.php'); 
	if(!$session->is_logged_in()) redirect('logout.php');
	$msg = "";
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Palmline </title>
  <link rel="stylesheet" href="advanced/css/base.css">
  <link rel="stylesheet" href="advanced/css/style.css">
  <script src="advanced/js/modernizr.js"></script>
  <!-- icomoon.com -->
  <link rel="stylesheet" href="css/icomoon/demo-files/demo.css">
  <link rel="stylesheet" href="css/icomoon/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../css/Adic.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome/css/font-awesome.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src ="../js/respond.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../index.php">Palmline</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <!--   <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li> -->
        <li><a href="logout.php">LOG OUT</a></li>
      </ul>
    </div>
  </div>
</nav>
	<div>
		<button>
			<span class='sr-only'>Toggle Navigation</span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span>
			<span class='icon-bar'></span> 
		</button>
		<a href="" class='navbar-brand'>Laundry</a>
	</div>
	<div>
		<ul>

		</ul>
	</div>
</nav>
</header>


<div class='row'>
<article class='col col-lg-9 col-md-8 col-sm-9'>
	<div class='row'>
		<?php echo $msg; ?>
	</div>
	<div class='row'>
		<h3>Category List</h3>
	</div>					
	<section class='row'>
<?php
	$categories= Category::all();
	$table = "<table class='table table-hover table-bordered table-striped'>
				<thead>
					<tr>
						<th>S/No.</th>
						<th>Category ID</th>
						<th>Category Name</th>
						<th>Description</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>";
				$i = 1;
	foreach ($categories as $category) {
		// $service = Service::find($admin->service_id);
		$table .="<tr>
					<td>$i</td>
					<td>{$category->getCategoryId()}</td>
					<td>{$category->name}</td>
					<td>{$category->description}</td>
					<td><a class='btn btn-info' href='Edit_category.php?id={$category->getCategoryId()}'>Edit</a></td>
					<td><a class='btn btn-danger' href='customer_delete.php?id={$category->getCategoryId()}'>Delete</a></td>
				</tr>";
				$i++;
	}
	$table.="</tbody></table>";
	echo $table;
?>
					</section>	
				</article>
			</div>
		</div>
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	</body>
</html>
<?php 
include_once '../footer.php';
 ?>