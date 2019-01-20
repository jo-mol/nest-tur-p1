

<?php
include "connection.php";
include_once("main_head.php");
$sqq="SELECT b.* FROM  tour_package b  WHERE b.active=1";
$sqq.=" order by rand() limit 20";
$ress1=mysqli_query($conn,$sqq);	
$rows= mysqli_fetch_array($ress1);	
?>
<?php

$id = $_REQUEST['code'];
?>


		<div class="sparky_cell mp_search sparkle2">
							<div class="moduletable">
						<div class="search">
	
</div>
		</div>
	
				</div>
                        </div>
    </div>
	
	
    <div  class="sparky_row5 sparky_full contentrow">
        <div class="sparky_container">
                        <main class="sparky_cell content_sparky sparkle9">
                    <div id="system-message-container">
	</div>

                                        <div class="item-page" itemscope itemtype="https://schema.org/Article">
	<meta itemprop="inLanguage" content="en-GB" />
	
		
			<div class="page-header">
					<h2 itemprop="name">
				Tour Packages In Munnar			</h2>
									</div>
					
	<img
				 src="../images/slide14.jpg"
						itemprop="image"
		/>
            
	
				<div class="pull-none item-image">
					<div  class="sparky_row3 sparky_full advertrow">
        <div class="sparky_container">
         
							
							<div class="sparky_cell mp_advert1 sparkle3">
<div class="detail-row">
					<div class="row">

<?php
	mysqli_data_seek($ress1,0);
	$query="SELECT t_overview FROM tour_package where t_id='".$id."'";

	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($result))
{
echo "<p>" . $row['t_overview'] . "</p>";
}
?>
	


<?php  ?>
			</div>
     </div>           		
                        </div>
    </div>
	
	</div>
	<?php
		include_once("rightside.php");
	
	?>
	
<?php
	include_once("../footer.php");
?>
	
<script type="text/javascript" src="../templates/sparky_framework/js/sparky-footer-id83-180526075302.js"></script>
</body>

<!-- Mirrored from demo.hot-themes.com/joomla/paradise/index.php/about-us by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Dec 2018 06:23:20 GMT -->
</html>