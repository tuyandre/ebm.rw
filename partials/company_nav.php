<nav class="navbar navbar-default" role="navigation" style="background-color:#66C2C0;margin-top:0px;">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/company/index.php">HOME</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-left ">
<!--			<li><a href="http://--><?php //echo $_SERVER['HTTP_HOST']; ?><!--/admin/category.php">Category</a></li>-->


		</ul>
		<ul class="nav navbar-nav navbar-left pull-right" style="margin-top: 9px;">
			<li class="dropdown">
				<button class="navbar-btn" data-toggle="dropdown" aria-expanded="false">
					<strong><?php echo escape($user->data()->USERNAME);?></strong>
				</button>
				<ul class="dropdown-menu">
					<li><a href="../logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>

				