 <div  class="sparky_row3 sparky_full advertrow">
        <div class="sparky_container">
        <h2 class="row_heading">Summer You'll Never Forget</h2> 
			<h3 class="row_subheading">Tour Packages In Munnar</h3> 
							
							<div class="sparky_cell mp_advert1 sparkle3">
					<div class="row">
<?php while($rr=mysqli_fetch_array($ress1)){
	echo $id=$rr['t_id'];
?>
	
<div class="col-md-4">
<div class="moduletable">
<div class="custom"  >
	<div class="advert_image">
<a href="index.php/sport-activities.html"><img src="images/services/download.jpg" srcset="/joomla/paradise/images/services/beach_volley-@2x.jpg 2x" class="img-with-animation" data-delay="200" data-animation="grow-in" alt="beach volley" /></a>
</div>
<div class="advert_text">
<h3><span><?php echo $rr['t_title']; ?></span></h3>
<p><?php echo $rr['t_theme']; ?><a href="index.php/tour-package-detail.php?code=<?php echo $id;?> ">Read More</a></p>
</div>
<div class="clr"></div></div>
		
		</div>
		</div>
<?php } ?>
			</div> 	
     </div>           		
                        </div>
    </div>
	
	
	