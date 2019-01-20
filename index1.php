<?php
include "connection.php";
 include_once("head.php");
 $sqq="SELECT b.* FROM  tour_package b  WHERE b.active=1";
 
	/* if($search_theme)
	{
		$sqq.=" AND (MATCH (b.t_title, b.t_theme, b.t_highlights,b.t_pack_type) AGAINST ('+$search_theme*' IN BOOLEAN MODE))";
	}
if($search_price)
{
	$sqq.=" AND b.t_price='$search_price'";
}
	
if($search_days && $search_nights )
{
	$sqq.=" AND b.t_duration_days='$search_days' AND b.t_duration_nights='$search_nights'";
}

if($search_for)
{
	$sqq.=" AND b.t_for LIKE '%$search_for%'";
}

if($search_type)
{
	$sqq.=" AND b.t_pack_type LIKE '%$search_type%'";
}

/* if($search_from)
{
	$sqq.=" AND b.t_startng_loc LIKE '%$search_from%'";
}
 
 
if($search_loc)
{
	$lsearch_loc=ucwords($search_loc);
	
	$sqq.=" AND ((MATCH (b.t_title, b.plocs, b.t_startng_loc, b.locationmap, b.t_ner_loc, b.t_coverd_locs) AGAINST ('+$search_loc*' IN BOOLEAN MODE)))";
}
 */
$sqq.=" order by rand() limit 5 offset 1";
//echo $sqq;
//exit;
		$ress1=mysqli_query($conn,$sqq);	
	//$rows= mysqli_fetch_array($ress1);	
	//$ploc=strtolower($rows['plocs']);
	
	
?>

		<div class="sparky_cell mp_search sparkle2">
							<div class="moduletable">
						<div class="search">
	</div>
		</div>
	
				</div>
                        </div>
    </div>
    <div  class="sparky_row2 sparky_full carouselrow full">
        <div class="sparky_container">
        				<div class="sparky_cell mp_header1 sparkle12">
							<div class="moduletable">
						
<div class="hot_swipe_carousel_slides">
                        <div class="gallery-cell">
                        <img srcset="http://demo.hot-themes.com/joomla/paradise/images/carousel/slide1-2x.jpg 2x"src="images/carousel/slide14.jpg" alt="slide 1" />
                                                <div class="contents">
                                                        <h2>For Your Leisure</h2>
                            <h3>Tour Packages In Munnar</h3>
<p>Welcome to Munnar- the gem of God’s own country-Kerala. It is South India’s largest tea-growing region, so once you set foot on its lovely terrain, you will be greeted with emerald tea-green plantations on lustrous rolling hills. Munnar is a picturesque piece of land, always fresh and welcoming. It is also known as the High Range of Travancore, and serves as the commercial estate of some of the highest tea-growing estates in the world. <a href="index.php/about-us.html">Read More</a></p>  
                        </div>
                                            </div>
                                <div class="gallery-cell">
                        <img  src="images/carousel/slide21.jpg" alt="slide 2" />
                                                <div class="contents">
                                                        <h2>Places to Stay</h2>
                            <h3>Hotels in Munnar at a Reasonable Price</h3>
<p>Located in Kerala, Munnar in Western Ghats mountain range is famous for hill stations and resorts. If you are planning to visit Munnar then you will have a wonderful time enjoying the beauty of nature. At the same time, you also need to look for the best hotels in Munnar. In order to assist you with hotel bookings, <a href="index.php/beaches-pools.html">Read More</a></p>  
                        </div>
                                            </div>
                                <div class="gallery-cell">
								
                        <!--<img  src="images/carousel/slide31.jpg" alt="slide 3" />-->
						<img  src="images/carousel/devikulam_hills_in_munnar20131031103731_132_1.jpg" alt="slide 3" />
						<!--<img src="images/blog/room.jpg" alt="slide 3" />-->
                                                <div class="contents">
                                                        <!--<h2>Delicious Food</h2>-->
														<h2>Let’s Be Adventurers</h2>
                            <h3>Tourist Places and Attractions</h3>
<p>Munnar is one of the most popular hill stations in South India.  It is nestled in Western Ghats at an altitude of 6000 ft and is located in Idukki district of Kerala.  This picturesque hill station beckons nature lovers from far and near. <a href="index.php/delicious-food.html">Read More</a></p>  
                        </div>
                                            </div>
                              
            </div>

<script>
    jQuery(document).ready(function(){
        jQuery('.hot_swipe_carousel_slides').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            freeScroll: false,
            wrapAround: true,
            prevNextButtons: false,
            pageDots: true,
            autoPlay: 6000,
            imagesLoaded: true        });
        jQuery('.hot_swipe_carousel_slides .contents').css('opacity', 1);
    });
</script>		</div>
	
				</div>
                        </div>
    </div>
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
	
	
	
	
	
    <div  class="sparky_row4 sparky_full countersrow">
        <div class="sparky_container">
        				<div class="sparky_cell mp_header2 sparkle12">
							<div class="moduletable">
						

<div class="counter_container">
      <div class="counter_field">
            <div class="counter_icon">
        <img src="images/counters/fruit_salad.png" alt="" />
      </div>
            <div id="counter1" class="counter_number">12687</div>
      <div class="counter_text">Fruit Salads Served</div>
    </div>
        <div class="counter_field">
            <div class="counter_icon">
        <img src="images/counters/pretzel.png" alt="" />
      </div>
            <div id="counter2" class="counter_number">8321</div>
      <div class="counter_text">Pretzels Oven Baked</div>
    </div>
        <div class="counter_field">
            <div class="counter_icon">
        <img src="images/counters/cocktail.png" alt="" />
      </div>
            <div id="counter3" class="counter_number">17502</div>
      <div class="counter_text">Cocktails Prepared</div>
    </div>
        <div class="counter_field">
            <div class="counter_icon">
        <img src="images/counters/piano.png" alt="" />
      </div>
            <div id="counter4" class="counter_number">769</div>
      <div class="counter_text">Live Music Shows</div>
    </div>
              </div>

<script>
  jQuery(function() {

      jQuery(".counter_container").appear(function() {
                              jQuery('#counter1').animateNumber({ number: 12687, easing: 'easeInQuad' },3000);
                                        jQuery('#counter2').animateNumber({ number: 8321, easing: 'easeInQuad' },4000);
                                        jQuery('#counter3').animateNumber({ number: 17502, easing: 'easeInQuad' },5000);
                                        jQuery('#counter4').animateNumber({ number: 769, easing: 'easeInQuad' },6000);
                                                                                                                                    });

  });
</script>
		</div>
	
				</div>
                        </div>
    </div>
    <div  class="sparky_row5 sparky_full contentrow">
        <div class="sparky_container">
        <h2 class="row_heading">Learn What We Have To Offer</h2> 
			<h3 class="row_subheading">Hotel Facilities In Munnar</h3> 
			                <main class="sparky_cell content_sparky sparkle12">
                    <div id="system-message-container">
	</div>

                                        <div class="blog-featured" itemscope itemtype="https://schema.org/Blog">

	
		
		<div class="items-row cols-1 row-0 row-fluid">
					<div class="item column-1 span12"
				itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
			


		<div class="pull-right item-image">
		<img
		class="img-with-animation" 			data-delay="200" data-animation="fade-in-from-right"
		 src="images/blog/room.jpg" srcset="/joomla/paradise/images/blog/room-@2x.jpg 2x" alt="Room"
					/>
	</div>

	<h2 class="item-title" itemprop="name">
			<a href="index.php/rooms-suites.html" itemprop="url">
			Rooms &amp; Suites		</a>
		</h2>






<p>“The suite room turned into amazing, you could get a breathtaking view of the valleys and a circulation flowing by the facet of the resort from the windows as well as the balcony.”</p><p>“We booked beauty suite, and they upgraded it to royal suite totally free of value which made the stay very comfy.”</p>



	
<p class="readmore">
			<a class="btn" href="index.php/rooms-suites.html" itemprop="url" aria-label="Read more:  Rooms &amp; Suites">
			<span class="icon-chevron-right" aria-hidden="true"></span> 
			Read more ...		</a>
	</p>



			</div>
			
			
		</div>
		
	
		
		<div class="items-row cols-1 row-1 row-fluid">
					<div class="item column-1 span12"
				itemprop="blogPost" itemscope itemtype="https://schema.org/BlogPosting">
			


		<div class="pull-right item-image">
		<img
		class="img-with-animation" 			data-delay="200" data-animation="fade-in-from-right"
		 src="images/blog/restaurant.jpg" srcset="/joomla/paradise/images/blog/restaurant-@2x.jpg 2x" alt="Restaurant"
					/>
	</div>

	<h2 class="item-title" itemprop="name">
			<a href="index.php/restaurant.html" itemprop="url">
			Restaurant Delicious Food		</a>
		</h2>






<p>Munnar the beautiful Hill station is a famous tourist destination of South India which attracts vacationers from all over the world. even though being a popular destination it had maintained its cultural and cuisines. The eating place here offers some real South Indian Cuisines in addition to different other cuisines like Chinese, Continental, and lots of others. nevertheless, there are a number of Munnar eateries that provide multi-cooking nourishment.</p>



	
<p class="readmore">
			<a class="btn" href="index.php/restaurant.html" itemprop="url" aria-label="Read more:  Restaurant A La Cart">
			<span class="icon-chevron-right" aria-hidden="true"></span> 
			Read more ...		</a>
	</p>



			</div>
			
			
		</div>
		
	


</div>

                                    </main>
                    </div>
    </div>
    <div  class="sparky_row6 sparky_full pricingrow">
        <div class="sparky_container">
        <h2 class="row_heading">Tourist Places and Attractions</h2> 
							<div class="sparky_cell mp_user1 sparkle3">
							<div class="moduletable">
							<h3>Kolukkumalai</h3><br/><br/>
						<img src="images/blog/download.jpg"/><br/><br/>
						
						<p style="font:left-justify;">Kollukumalai gives its visitors a danger to revel in a cup of tea at the highest plantation in the world. Right here, one can revel in a wonderful view of the lovely Munnar valley under. At about 7900 feet above sea level, we even get glimpses of the neighboring kingdom of Tamil Nadu.</p>

<div class="custom"  >
	<!--<ul>
<li>Bed and breakfast included</li>
<li>Single room / 20 sq.m</li>
<li>One person max.</li>
<li>Garden view</li>
<li>Private bathroom with shower</li>
<li class="price">$49 / per night*</li>
</ul>-->
<a href="#" class="btn">Read More</a></div>
		</div>
	
				</div>
                				<div class="sparky_cell mp_user2 sparkle3">
							<div class="moduletable">
							<h3>Meesapulimala</h3><br/><br/>
						<img src="images/blog/images (2).jpg"/><br/><br/><br/>
						
						<p>The splendor of Meesapulimala must be loved via trekking. The 8-kilometer lengthy trek from the Rhodovalley, 15 kilometers from Munnar city, offers the trekkers breathtaking views of the grasslands, rainforests and flora and fauna present at the high altitude.</p>

<div class="custom"  >
	<!--<ul>
<li>Half Board included</li>
<li>Double room / 25 sq.m</li>
<li>Two persons max.</li>
<li>Garden view</li>
<li>Private bathroom with jacuzzi</li>
<li class="price">$69 / per night*</li>
</ul>-->
<a href="#" class="btn">Read More</a></div>
		</div>
	
				</div>
                				<div class="sparky_cell mp_user3 sparkle3">
							<div class="moduletable">
							<h3>Mattupetty</h3><br/><br/>
						<img src="images/blog/download (3).jpg"/><br/><br/><br/>
						 <p>Nestled in the hills of Munnar and really close to to the Anamudi height lies Mattupetty, the hill station at a top of 1, 700 m. Mattupetty is placed 13 km far from Munnar.Right here you may revel in the greenish valleys and sense the terrifying weather around. </p>

<div class="custom"  >
	<!--<ul>
<li>All inclusive</li>
<li>Single room / 35 sq.m</li>
<li>Four persons max.</li>
<li>Sea view</li>
<li>Private bathroom with jacuzzi</li>
<li class="price">$99 / per night*</li>
</ul>-->
<a href="#" class="btn">Read More</a></div>
		</div>
	
				</div>
                				<div class="sparky_cell mp_user4 sparkle3">
							<div class="moduletable">
							<h3>Rajamala</h3><br/><br/>
						<img src="images/blog/images (1).jpg"/><br/><br/>
						<p>The Eravikulam countrywide park is unfolded over an intensive region of 97 square km alongside the crest of Western Ghats within the high stages of Idukki district. Placed 15 km from Munnar, it's miles one in all maximum critical traveler destinations in Kerala.</p>
						

<div class="custom"  >
	<!--<ul>
<li>Ultra all inclusive</li>
<li>Living room / 2 bedrooms / 60 sq.m</li>
<li>Six persons max.</li>
<li>Sea view</li>
<li>Private bathroom with jacuzzi</li>
<li class="price">$149 / per night*</li>
</ul>-->
<a href="#" class="btn">Read More</a></div>
		</div>
	
				</div>
                        </div>
    </div>
    <div  class="sparky_row7 sparky_full testimonialsrow">
        <div class="sparky_container">
        <h2 class="row_heading">Testimonials From Our Guests</h2> 
			<h3 class="row_subheading">Guest Book</h3> 
							<div class="sparky_cell mp_advert5 sparkle6">
							<div class="moduletable">
						

<div class="custom"  >
	<div><img src="images/testimonials/helena.jpg" srcset="/joomla/paradise/images/testimonials/helena-@2x.jpg 2x" class="img-with-animation" data-delay="200" data-animation="grow-in"  alt="helena" /></div>
<h3><span>Helena</span> Ray</h3>
<p>Debitis animi impedit numquam facilis iusto porro labore dolorem, maxime magni incidunt.</p></div>
		</div>
	
				</div>
                				<div class="sparky_cell mp_advert6 sparkle6">
							<div class="moduletable">
						

<div class="custom"  >
	<div><img src="images/testimonials/marcus.jpg" srcset="/joomla/paradise/images/testimonials/marcus-@2x.jpg 2x" class="img-with-animation" data-delay="400" data-animation="grow-in"  alt="marcus" /></div>
<h3><span>Mark</span> Smith</h3>
<p>Facilis iusto porro labore dolorem, maxime magni incidunt.</p></div>
		</div>
	
				</div>
                        </div>
    </div>
	
	
	
	<?php
		include_once("footer.php");
	?>
    
	
<script type="text/javascript" src="templates/sparky_framework/js/sparky-footer-id83-180526075302.js"></script>
</body>

<!-- Mirrored from demo.hot-themes.com/joomla/paradise/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Dec 2018 06:22:53 GMT -->
</html>