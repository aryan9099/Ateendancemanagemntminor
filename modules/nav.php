<?php
	session_start();
?>

<?php if (isset($_SESSION['islogin']) && $_SESSION['islogin'] == 1) : ?>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
					<li class="sidebar-brand">

							<a href="index.php">
						
							</a>
					</li>
9					<li <?php if ($_GET['page'] == 'dashboard') echo 'class="active"'; ?>>
10							<a href="index.php?page=dashboard"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
11					</li>
12					<li <?php if ($_GET['page'] == 'take-attendance') echo 'class="active"'; ?>>
13							<a href="index.php"><i class="glyphicon glyphicon-calendar"></i> Take Attendance</a>
14					</li>
15					<li <?php if ($_GET['page'] == 'studentinfo') echo 'class="active"'; ?>>
16							<a href="index.php?page=studentinfo"><i class="glyphicon glyphicon-user"></i> Students List</a>
17					</li>
18					<li <?php if ($_GET['page'] == 'reports') echo 'class="active"'; ?>>
19							<a href="index.php?page=reports"><i class="glyphicon glyphicon-duplicate"></i> Reports</a>
20					</li>
21					<li <?php if ($_GET['page'] == 'logout') echo 'class="active"'; ?>>
22							<a href="index.php?page=logout"><i class="glyphicon glyphicon-off"></i> Logout</a>
23					</li>
24			</ul>
	</nav>
<?php else: ?>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
			<ul class="nav sidebar-nav">
					<li class="sidebar-brand">
							<a href="index.php">
								
							</a>
					</li>
					<li>
							<a href="index.php">Login</a>
					</li>
					<li>
							<a href="index.php">Teacher's Section</a>
					</li>
					<li>
							<a href="index.php">Student's Section</a>
					</li>
			</ul>
	</nav>
<?php endif; ?>
