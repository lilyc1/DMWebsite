<?php
$status = "open";
$GLOBALS['page_title'] = 'Delegates | Students | Dance Marathon at UF';
$GLOBALS['parent'] = 'get-involved';
include("includes/head.php");
include("includes/navbar.php");
?>

<div class="page-heading parallax delegates">
  <div class="inner-wrapper">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1>Delegates</h1>
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
            <li><a href="/alumni">Alumni</a></li>
						<li><a href="/applications">Applications</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a class="active">Delegates</a></li>
						<li><a href="/emerging-leaders">Emerging Leaders</a></li>
						<li><a href="/ftkrew">FTKrew</a></li>
						<li><a href="/organizations">Organizations</a></li>

          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
      <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#become-a-delegate" aria-controls="become-a-delegate" role="tab" data-toggle="tab">Become a Delegate</a></li>
          <li role="presentation"><a href="#starting-a-team" aria-controls="starting-a-team" role="tab" data-toggle="tab">Starting a Team</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="become-a-delegate">
            <h3>What is a Delegate?</h3>
            <p><em>del·e·gate</em> (noun): A Delegate is the representative from an organization participating in Dance Marathon whose primary responsibility is to convey information to the members of his or her organization and to motivate them. Delegates are at the heart of our organization and we are extremely thankful for the hard work and passion they dedicate For The Kids. Each Delegate has a designated Dancer Relations Captain to serve as his or her primary point of contact to answer any questions.</p>
            <p>Synonyms: motivator, representative, leader, rockstar</p>
            <h3>Responsibilities:</h3>
            <ul>
              <li>Attend bi-weekly Delegate meetings led by the Dancer Relations Overall</li>
              <li>Inform your organization's members of all information they need to participate including events, dates, incentives, etc.</li>
              <li>Recruit and motivate members of your organization to fundraise and participate at their highest potential</li>
            </ul>
            <h3>Responsibilities during Dance Marathon:</h3>
            <ul>
              <li>Be available in case of any emergencies</li>
              <li>Help assign Dancer buddies to each Dancer from your organization</li>
              <li>Be positive and upbeat!</li>
            </ul>
            <p class="alert alert-info"><strong>Note:</strong> Delegates can also be Dancers at the event!</p>
            <h3>Delegate Tips</h3>
            <ul>
              <li>Attend all Delegate meetings. This is the most effective way to receive and relay information in the clearest way possible.</li>
              <li>Utilize your designated Dancer Relations Captain. They want to answer questions and be as helpful as possible!</li>
            </ul>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="starting-a-team">
            <p>To participate as an organization in Dance Marathon, you must register your team each year. To register your team, please complete the following steps:</p>
            <ol>
              <li>Go to <a href="http://floridadm.org">floridadm.org</a> and click “Donate.”</li>
              <li>Scroll down and click "Register Now."</li>
              <li>Input your information and create a new organization.</li>
              <li>Fill out the proceeding information for your team and once your team has been registered, your members can join your team by following the steps and joining your existing organization team.</li>
            </ol>
            <p>Each team will need a Delegate to represent them. Please email the Dancer Relations Overall, Eric Rice, at <a href="mailto:erice@floridadm.org">erice@floridadm.org</a> to inform him you have created a team and will be serving as the Delegate or have plans of selecting a Delegate in the near future. The Dancer Relations Overall will not be able to get in contact with you unless you email him to let him know you started a team.</p>
          </div>
        </div>

      </div>
      <?php } else { echo 'This page is currently closed.'; } ?>
    </div>
  </div>
</div>
</div>

<?php include("includes/foot.php"); ?>
