<?php
  $GLOBALS['page_title'] = 'Dance Marathon at UF';
  include("includes/head.php");
?>
<!-- intro -->
<div class="top visible-md visible-lg">
  <div class="intro">
    <div id="top-carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#top-carousel" data-slide-to="0" class="active"></li>
        <!-- <li data-target="#top-carousel" data-slide-to="1"></li>
        <li data-target="#top-carousel" data-slide-to="2"></li> -->
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img class="img-responsive"  src="assets/images/slider/TotalDM2017.png">
          <div class="carousel-caption text-center">
            <div class="row animate_fade_in">
              <div class="col-md-6">
                <div class="logo">
                  <img src="assets/images/logo_ftk_homepage.png">
                </div>
              </div>
              <div class="col-md-6">
                <h2 style="color: #fff; font-size: 3em;" class="student-title"><span id="student-counter">0</span>Students Making Miracles</h2>
                <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=2610" target="_blank" class="top_btn">Donate Now</a>
              </div>
            </div>
          </div>
        </div>

        <!-- End Item -->

      </div>
      <!-- End Carousel Inner -->

      <!-- Controls -->

      <!-- <a class="left carousel-control" href="#top-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#top-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->
    </div>
  </div>
</div>
<?php include("includes/navbar.php"); ?>
<div class="container">

<?php if ($dance_marathon_event_started == true) { ?>

	 	<div id="event_banner">
		<div class="row mt mb">
			<div class="col-xs-12 welcome_txt text-center">
				<h1 class="event_banner_title">
					Dance Marathon <?php echo $dm_year; ?>
					</h1>
			</div>
			<div class="col-xs-12 welcome_txt text-center">
				<h1 class="event_banner_title">
						<span style="color: #F79B63; background-color: white;">Is Here</span>
					</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">
				<a id="event_page_button" class="btn hvr-underline-from-center" href="/dance-marathon">View Livestream</a>
			</div>
		</div>
	</div>

	<?php } ?>

  <!--  -->
  <!--  -->
  <!--  -->
  <!--  -->

<div style="margin: 45px 0;">
  <div class="row">
    <div class="col-md-12">
      <div class="text-center">
        <h2 style="margin: 45px 0;"> Transform Today Leaderboard </h2>
        <div class="leaderboard"></div>
      </div>
    </div>
  </div>
</div>



  <script>

   // ID of the Google Spreadsheet
   var spreadsheetID = "1hIBtefZpWls8oPe3_075MdWQiHQ0h_iwwFCYzvGdJPk";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
      // Column names are name, age, etc.
      $('.leaderboard').append('<p>'+this.gsx$organizations.$t+'</p>');
    });

   });
  </script>


    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->
  <div class="row">
    <div class="col-md-12 welcome_txt text-center">
<!--       <p><a class="btn btn-default huge-button" href="dm2015">Follow the event live here!</a></p> -->
      <p style="padding-top:0;">Welcome to the online home of <i style="color:#f79b63;"><b>Dance Marathon</b></i> at the <i style="color:#f79b63;"><b>University of Florida</b></i><br/> DM at UF is the most successful student-run philanthropy in the southeastern United States <br/> and just celebrated its 23rd year. This year, DM at UF raised a historic <i style="color:#617ba6;"><b>$2,724,324.19</b></i>!<br/>Join us in <b> 2018</b> as we continue to make bigger and better miracles <ii style="color:#f79b63;">
        <b> For The Kids!</b></i></br> <i  >
           <a href="/blog" style="color:#617ba6;"> <b>Keep up with everything DM on our offical DM at UF blog</b></a>
</i></p>
    </div>
  </div>
</div>
<div class="education">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-3">
        <i class="fa icon-foot"></i>
        <h3>Our Story</h3>
        <p>DM at UF is one of the first five founding Dance Marathon programs in the nation and since our start, we have raised more than $15.2 million for the kids at UF Health Shands Children’s Hospital, our local CMN hospital. Everything we do is For The Kids!</p>
        <p><a class="btn btn-default" href="our-story" role="button">Learn More</a></p>
      </div>
      <div class="col-md-3">
        <i class="fa icon-balloon"></i>
        <h3>CMN Hospitals<br>& UF Health</h3>
        <p>Ranked one of the top 50 pediatric hospitals in the nation in seven categories, UF Health Shands Children’s Hospital and Children’s Miracle Network have created one of the greatest facilities of care for children and young adults.</p>
          <!--Update this information, we are highter than when we made this website -->
        <p><a class="btn btn-default" href="uf-health" role="button">Learn More</a></p>
      </div>
<!--
      <div class="col-md-3">
        <i class="fa icon-shirt"></i>
        <h3>Silent Auction</h3>
        <p>Check out the awesome items available in our silent auction! From exotic vacations to Tiffany's jewelry, we've got anything you could want. And the best part is that it's all For The Kids!</p>
        <p><a class="btn btn-default" href="https://www.winningcause.org/dancemarathonatuf/" role="button" target="_blank">Shop Now</a></p>
      </div>
-->
      <div class="col-md-3">
        <i class="fa fa-mobile" style="font-size: 52px; line-height: 40px;"></i>
        <h3>DM App</h3>
        <p>Get the latest DM updates, learn about our Miracle Children, and more with our new DM app!</p>
        <p><a class="btn btn-default" id="download-app" href="itms://itunes.apple.com/us/app/dance-marathon-at-uf/id955595609" role="button">Download Now</a></p>
      </div>
      <div class="col-md-3">
        <i class="fa fa-heart"></i>
        <h3>Miracle Families</h3>
        <p>Take a moment to meet the heart and soul of our philanthropy. Our Miracle Families are the inspiration for every student who is part of DM at UF.</p>
        <p><a class="btn btn-default" href="family" role="button">Learn More</a></p>
      </div>
    </div>
  </div>
</div>
<!--<div class="counter">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center heading newsletter">Dancing Starts In...</div>
      <div class="col-md-12" id="countdown-wrapper"><div id="countdown"></div></div>
    </div>
  </div>
</div>-->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="assets/images/floridamap.jpg" class="florida-map">
      </div>
      <div class="col-md-6">
        <br><br><br>
        <h3>Many Places, One Common Cause</h3>
        <p>Dance Marathon at the University of Florida is fortunate to be a piece of a larger international movement. Hundreds of Dance Marathon throughout North America raise funds and awareness for Children’s Miracle Network hospitals. UF Health Shands Children’s Hospital is lucky enough to receive support from five Dance Marathons in the region, allowing it to make more miracles each and every day.</p>
        <!--
        <div class="container-fluid" style="padding-top:3em;">
          <div class="row">
            <div class="col-xs-4">
              <img class="img-responsive" src="/assets/images/01.png" />
            </div>
            <div class="col-xs-4">
              <img class="img-responsive" src="/assets/images/02.png" />
            </div>
            <div class="col-xs-4">
              <img class="img-responsive" src="/assets/images/03.png" />
            </div>
            <div class="col-xs-4">
             <img class="img-responsive" src="/assets/images/campaignaward_2014.jpg" />
            </div>
             <div class="col-xs-4">
             <img class="img-responsive" src="/assets/images/moraleaward_2014.jpg" />
            </div>
           <div class="col-xs-4">
           <img class="img-responsive" src="/assets/images/BestMerch_2016.png" />
          </div>
          </div>
        </div>
        -->
     </div>
    </div>
  </div>
</div>

<div class="education">
  <div class="container text-center">
    <div class="row">
      <div class="container-fluid" style="padding-top:3em;">
          <div class="row">
            <table style="width:100%">
              <tr>
                <th><img class="img-responsive" src="/assets/images/awards/Merch 15.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/Morale 14.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/Campaign 14.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/Shirt 13.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/Innovation 12.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/Comma 12.png" /></th>

              </tr>
            </table>
            <table style="width:100%">
              <tr>
                <th><img class="img-responsive" src="/assets/images/awards/Online 10.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/Social.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/Website 08.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/Closing 05.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/Letter 04.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/Opening 03.png" /></th>
              </tr>
            </table>
            <br>
          </div>
          <p></p>
      </div>
    </div>
  </div>
</div>

<?php include("includes/foot.php"); ?>
