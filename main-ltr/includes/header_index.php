<?php

include('config.php');

if(!$_SESSION['alogin'])
{
	header('Location: ./pages/auth_login2.php');
}

$email = $_SESSION['alogin'];

$sql="SELECT * from `users` where email='$email'";
$result=mysqli_query($conn,$sql);
// $row1= mysqli_fetch_array($result1,MYSQLI_ASSOC);
$unique=mysqli_num_rows($result);

if($unique === 1)
{
	$res=mysqli_fetch_assoc($result);
	$name=$res['name'];
}
?>


<header class="main-header">
    <!-- Logo -->
    <!-- <a href="index.php" class="logo"> -->
      <!-- mini logo -->
	  <!-- <div class="logo-mini">
		  <span class="light-logo"><img src="../images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="../images/logo-dark.png" alt="logo"></span>
	  </div> -->
      <!-- logo-->
      <!-- <div class="logo-lg">
		  <span class="light-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
	  	  <span class="dark-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
	  </div>
    </a> -->
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div>
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<i class="ti-align-left"></i>
		  </a>
		  
		  <a href="#" data-provide="fullscreen" class="sidebar-toggle" title="Full Screen">
			<i class="mdi mdi-crop-free"></i>
		  </a> 

				<a onclick="myFunction()" style="cursor:pointer;color:white" >	             
				<i class="mdi mdi-lightbulb-on-outline "></i>
	<!-- <i class="fa fa-lightbulb-o " aria-hidden="true"></i>    -->
	</a>

	<!-- <a onclick="myFunction()" id="demo">	             
	<i class="fa fa-moon-o"  aria-hidden="true"></i>   
	</a>
		 -->
	  </div>
	

      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  <!-- full Screen -->
	      <!-- <li class="search-bar">		  
			  <div class="lookup lookup-circle lookup-right">
			     <input type="text" name="s">
			  </div>
		  </li>			 -->
		  <!-- Messages -->
		  <li class="dropdown messages-menu">
			<a href="#" class="dropdown-toggle"  title="Coins">
			<!-- //COINS DISPLAY	 -->
	
				<!-- <label></label> -->
			  <!-- <i class="mdi mdi-email"></i> -->
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<!-- <div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Messages</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div> -->
			  </li>
			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				 <!-- start message -->
				  <!-- <li>
					<a href="#">
					  <div class="pull-left">
						<img src="../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Lorem Ipsum
						  <small><i class="fa fa-clock-o"></i> 15 mins</small>
						 </h4>
						 <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
					  </div>
					</a>
				  </li> -->
				  <!-- end message -->
				  <li>
					<!-- <a href="#">
					  <div class="pull-left">
						<img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Nullam tempor
						  <small><i class="fa fa-clock-o"></i> 4 hours</small>
						 </h4>
						 <span>Curabitur facilisis erat quis metus congue viverra.</span>
					  </div>
					</a> -->
				  </li>
				  <li>
					<!-- <a href="#">
					  <div class="pull-left">
						<img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Proin venenatis
						  <small><i class="fa fa-clock-o"></i> Today</small>
						 </h4>
						 <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
					  </div>
					</a>
				  </li> -->
				  <li>
					<!-- <a href="#">
					  <div class="pull-left">
						<img src="../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Praesent suscipit
						<small><i class="fa fa-clock-o"></i> Yesterday</small>
						 </h4>
						 <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
					  </div>
					</a> -->
				  </li>
				  <li>
					<!-- <a href="#">
					  <div class="pull-left">
						<img src="../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
					  </div>
					  <div class="mail-contnet">
						 <h4>
						  Donec tempor
						  <small><i class="fa fa-clock-o"></i> 2 days</small>
						 </h4>
						 <span>Praesent vitae tellus eget nibh lacinia pretium.</span>
					  </div>

					</a> -->
				  </li>
				</ul>
			  </li>
			  <li class="footer">				  
				  <!-- <a href="#">See all e-Mails</a> -->
			  </li>
			</ul>
		  </li>
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Notifications">
			  <i class="mdi mdi-bell"></i>
			</a> -->
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<!-- <div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div> -->
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>	
		  
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="User">
              <img src="../images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu animated flipInX">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url('../images/user-info.jpg')" data-overlay="3">
				  <div class="flexbox align-self-center">					  
				  	<img src="../images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">					  
					<h4 class="user-name align-self-center">
					  <span><?php echo $name ?></span><br/>
					  <small><?php echo $email ?></small>
					</h4>
				  </div>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
				    <a class="dropdown-item" href="pages/user_profile.php"><i class="ion ion-person"></i> My Profile</a>
					<a class="dropdown-item" href="pages/view_team.php"><i class="fa fa-circle-o-notch"></i> My Coins</a>
					<!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a> -->
					<div class="dropdown-divider"></div>
					<!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a> -->
					<!-- <div class="dropdown-divider"></div> -->
					<a class="dropdown-item" href='./includes/logout.php?logout-submit=logout'><i class="ion-log-out"></i> Logout</a>
					<div class="dropdown-divider"></div>
					<!-- <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div> -->
              </li>
            </ul>
          </li>	
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar" title="Setting"><i class="fa fa-cog fa-spin"></i></a>
          </li> -->
				
        </ul>
      </div>
    </nav>
  </header>