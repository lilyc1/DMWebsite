<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Press Releases | Press | Florida Dance Marathon';
	$GLOBALS['parent'] = 'press';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax press">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Press Releases</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
  			<div class="sub-nav">
          <ul>
						<li><a href="/nomenclature.php">Nomenclature</a></li>
						<li><a class="active">Press Releases</a></li>
						<li><a href="/press-contacts.php">Press Contacts</a></li>
						<li><a href="/fast-facts.php">Fast Facts</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
			  <h3>2014-2015 Press Releases</h3>
        <ul>
          <li><a href="Transform-Today-Press-Release.pdf">Transform Today</a></li>
          <li><a href="DMKickball2014.pdf">DM Kickball 2014</a></li>
          <li><a href="CYMplify-Food-Truck-Rally-Press-Release.pdf">CYMplify Food Truck Rally</a></li>
        </ul>
        <p>If you have any questions, please contact Melissa Dukes, Public Relations Overall at <a href="mailto:mdukes@floridadm.org">mdukes@floridadm.org</a>.</p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>