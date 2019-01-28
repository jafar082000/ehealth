<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eHealth Africa</title>
     <link rel="icon" href="images/icon2.png">



    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">

	
</head>

<style type="text/css"></style>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="">
        <div class="container">
        
            
              
          
        
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="image/ehealth-logo.png" style="width: 200px; height: 50px;">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="story.php">News</a>
                    </li>
					    <li>
                        <a href="gallary.php">Gallery</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                     <li>
                        <select name="forma" onchange="location = this.value;" style="margin-top: 17px; background-color: #008efa; color: white;">
                        <option>-- Login--</option>
                        <option value="admin.html">Admin</option>
                        <option value="login.html">Intern</option>
                      </select>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
           <div class="col-md-12">
			<div class="carousel slide" data-ride="carousel" id="slider">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>
					<li data-target="#slider" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="image/2.jpg">
						
					</div>
					<div class="item">
						<img src="image/1.jpg">
					</div>
					<div class="item">
						<img src="image/3.jpg">
					</div>
						<div class="item">
						<img src="image/1.jpg">
					</div>
					
				</div>
				<a href="#slider" data-slide="prev" class="left carousel-control">
				<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#slider" data-slide="next" class="right carousel-control">
				<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>	
            <!-- /.col-md-8 -->
            
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                   <strong> eHA Internship Programmes</strong>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
			<?php
include("admin/includes/db.php");

	$query="select * from post";
	$run=mysql_query($query);
	
while($row=mysql_fetch_array($run)){
	$news_id = $row['id'];
	$title = $row['title'];
	$image = $row['image'];
	$desc = $row['content'];
?>
            <div class="col-md-4">
              <div class="thumbnail">
      				<img src="admin/post_images/<?php echo $image; ?>" alt="5" style="width:400px; height:200px;">
      			<div class="caption">
        			<h3><?php echo $title; ?></h3>
        				<p><?php echo $desc; ?> </p>
        			<p><a href="#" class="btn btn-success" role="button">Apply&nbsp;<span class="glyphicon glyphicon-plus"></span></a>
        			 </a></p>
      			</div>
    		</div>
            </div>
            <!-- /.col-md-4 -->
          <?php }?>
			
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 alert alert-success">
                    <p>Designed By &copy;<a href="http:www.hamujtechnology.com.ng"> Jafar Mohammad Musa</a></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
