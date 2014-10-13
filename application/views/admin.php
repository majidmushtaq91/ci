<?php include('header.php');?>

<div id="main_top">
				<div class="main_holder">
					<div id="main_top_inner">
						AdminCP
										</div>
				</div>
			</div>


	
	
	
		
		<div class="col-md-3" style="margin: 0 auto;float: none;clear: both;padding-top: 30px;">
		<h3> <span class="glyphicon glyphicon-user"></span> Login Panel</h3>

		<hr />

		<form class="form-horizontal" role="form" method="post" action="">
		  <div class="form-group">
		
		    <div class="col-sm-10">
		      <input name="username" class="form-control" id="inputEmail3" placeholder="Username">
		    </div>
		  </div>
		  <div class="form-group">
		    
		    <div class="col-sm-10">
		      <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-10">
		      <div class="checkbox">
		        <label>
		          <input type="checkbox"> Remember me
		        </label>
		      </div>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class=" col-sm-10">
		      <button name="login" type="submit" class="btn btn-default">Sign in</button>
		    </div>
		  </div>
		</form>
		</div>


<?php include('footer.php'); ?>