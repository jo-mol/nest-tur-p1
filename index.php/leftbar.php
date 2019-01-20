

								<div class="sidebar-inner hidden-xs">
								<?php  include "owner/includes/theme_list.inc";
												$cate1=array_unique($theme_kerala);
												$i=1;
											 ?>
									<div class="sidebar-module">
										<h4 class="sidebar-title">By Themes</h4>
										
										<div class="sidebar-module-inner">
										
											<ul class="sidebar-category">
											<?php 
												foreach($cate1 as $cc1)
												{
													$i++;
													$ccc1=str_replace(" ","-",strtolower($cc1));
												?>
										
												<?php if($i <= 10){ ?><li class="active"><a href="<?php echo $ccc1;?>-tour-packages-in-<?php if($plocs) echo strtolower($plocs); else  echo $search_loc;?>"><i class="fa fa-check-square"></i>&nbsp;<?php echo $cc1; ?></a></li>
												<?php } } ?>												
											</ul>
											
											<div class="more-less-wrapper">
												
												<div id="property_type_more_less1" class="collapse" aria-expanded="false" style="height: 0px;"> 
													<div class="more-less-inner">
													
														<ul class="sidebar-category">
												
												
												<?php $j=1;
												foreach($cate1 as $cc1)
												{
													$j++;
												$ccc1=str_replace(" ","-",strtolower($cc1));
												?>
										
												<?php if($j > 10){ ?><li class="active"><a href="<?php echo $ccc1;?>-tour-packages-in-<?php echo $search_loc;?>"><i class="fa fa-check-square"></i>&nbsp;<?php echo $cc1; ?></a></li>
												<?php } } ?>
											</ul>
														
													</div>
												</div>
												<button class="btn btn-more-less collapsed" data-toggle="collapse" data-target="#property_type_more_less1" aria-expanded="false">Show more</button>
												
											</div>
											
										</div> 
									</div>
									<?php  include "owner/includes/loc_list.inc";
												$plc=array_unique($loc_tour);
												$r=1;
											 ?>
	
									<div class="sidebar-module">
										<h4 class="sidebar-title">By Locations</h4>
										<div class="sidebar-module-inner">
											<ul class="sidebar-category">
												<?php 
												foreach($plc as $pl)
												{
													$r++;
												$plc1=str_replace(" ","-",strtolower($pl));
												?>
										
												<?php if($r <= 10){ ?><li class="active"><a href="tour-packages-in-<?php echo $plc1;?>"><i class="fa fa-check-square"></i>&nbsp;<?php echo $pl; ?></a></li>
												<?php } } ?>
											</ul>
											
											<div class="more-less-wrapper">
												
												<div id="property_type_more_less2" class="collapse" aria-expanded="false" style="height: 0px;"> 
													<div class="more-less-inner">
													
														<ul class="sidebar-category">
												
												<?php 
												$t=1;
												foreach($plc as $pl)
												{
													$t++;
												$plc1=str_replace(" ","-",strtolower($pl));
												?>
										
												<?php if($t > 10){ ?><li class="active"><a href="tour-packages-in-<?php echo $plc1;?>"><i class="fa fa-check-square"></i>&nbsp;<?php echo $pl; ?></a></li>
												<?php } } ?>
											</ul>
														
													</div>
												</div>
												<button class="btn btn-more-less collapsed" data-toggle="collapse" data-target="#property_type_more_less2" aria-expanded="false">Show more</button>
												
											</div>
											
										</div>
									</div>
									
									<?php  $ss1="SELECT distinct `t_price`  FROM `tour_package` ";
									?>
									<div class="sidebar-module">
										<h4 class="sidebar-title">By Price</h4>
										<div class="sidebar-module-inner">
											<ul class="sidebar-category">
											<?php 
										$rs3=mysqli_query($conn,$ss1);
										$q=1;
										 while($ro2=mysqli_fetch_array($rs3))
											{
												$q++;
												?>
												<?php if($q <= 10) { 
											 if($ro2['t_price']){ ?>
												<li class="active"><a href="tour-packages-in-<?php if($plocs) echo strtolower($plocs); else  echo $search_loc;?>-price-<?php echo $ro2['t_price'];?>"><i class="fa fa-check-square"></i>&nbsp;Rs. <?php echo $ro2['t_price'];?>/-</a></li>
											 <?php } } } ?>	
											</ul>
											
											<div class="more-less-wrapper">
												
												<div id="property_type_more_less3" class="collapse" aria-expanded="false" style="height: 0px;"> 
													<div class="more-less-inner">
													
														<ul class="sidebar-category">
												
												<?php 
										$rs4=mysqli_query($conn,$ss2);
										$w=1;
										 while($ro3=mysqli_fetch_array($rs4))
											{
												$w++;
												?>
												<?php if($w > 10) { 
												if($ro3['t_price']){ ?> 
												<li class="active"><a href="tour-packages-in-<?php if($plocs) echo strtolower($plocs); else  echo $search_loc;?>-price-<?php echo $ro3['t_price'];?>"><i class="fa fa-check-square"></i>&nbsp;Rs. <?php echo $ro3['t_price'];?>/-</a></li>
												<?php } } } ?>
											</ul>
														
													</div>
												</div>
												<button class="btn btn-more-less collapsed" data-toggle="collapse" data-target="#property_type_more_less3" aria-expanded="false">Show more</button>
												
											</div>
											
										</div>
									</div>
									<?php $s="SELECT  distinct `t_duration_days`,`t_duration_nights`  FROM `tour_package` ";
						              ?>
									<div class="sidebar-module">
										<h4 class="sidebar-title">By Days/Nights</h4>
										<div class="sidebar-module-inner">
											<ul class="sidebar-category">
									<?php		
									$r=mysqli_query($conn,$s); 
										$k=1;
										 while($r1=mysqli_fetch_array($r))
											{ 
												$k++;
												?>
												<?php if($k <= 10){ ?>
												<li class="active"><a href="tour-packages-in-<?php if($plocs) echo strtolower($plocs); else  echo $search_loc;?>-days-<?php echo $r1['t_duration_days'];?>-nights-<?php echo $r1['t_duration_nights'];?>"><i class="fa fa-check-square"></i>&nbsp;<?php echo $r1['t_duration_days'];?> Day - <?php echo $r1['t_duration_nights'];?> Nights</a></li>
												
											<?php } } ?>	
											</ul>
											
											<div class="more-less-wrapper">
												
												<div id="property_type_more_less4" class="collapse" aria-expanded="false" style="height: 0px;"> 
													<div class="more-less-inner">
													
														<ul class="sidebar-category">
												
												<?php
														
									$rn=mysqli_query($conn,$s); 
										$m=1;
										 while($u=mysqli_fetch_array($rn))
											{  $m++;
												 if($m > 10){ ?>
												<li class="active"><a href="tour-packages-in-<?php if($plocs) echo strtolower($plocs); else  echo $search_loc;?>-days-<?php echo $u['t_duration_days'];?>-nights-<?php echo $u['t_duration_nights'];?>"><i class="fa fa-check-square"></i>&nbsp;<?php
												echo $u['t_duration_days'];?> Day - <?php 
												echo $u['t_duration_nights'];?> Nights</a></li>
												
											<?php } } ?>	
									
											</ul>
														
													</div>
												</div>
												<button class="btn btn-more-less collapsed" data-toggle="collapse" data-target="#property_type_more_less4" aria-expanded="false">Show more</button>
												
											</div>
											
										</div>
									</div>
									
									<div class="sidebar-module">
										<h4 class="sidebar-title">Tours For</h4>
										<div class="sidebar-module-inner">
											<ul class="sidebar-category">
								<?php		include "variablefile.inc"; 

											
												foreach($tripfor as $c)
												{
													$f1=strtolower($c);
												?>			
												<li class="active"><a href="tour-packages-in-<?php if($plocs) echo strtolower($plocs); else  echo $search_loc;?>-for-<?php echo $f1;?>"><i class="fa fa-check-square"></i>&nbsp;<?php echo $c;?></a></li>
											<?php } ?>		
											</ul>
										</div>
									</div>
								<?php $st="SELECT  distinct `t_startng_loc`  FROM `tour_package` where `plocs` LIKE '$search_loc'";
						              ?>
									<div class="sidebar-module">
										<h4 class="sidebar-title">Tours From</h4>
										<div class="sidebar-module-inner">
											<ul class="sidebar-category">
								<?php 
										$st1=mysqli_query($conn,$st);
										$q=1;
										 while($st2=mysqli_fetch_array($st1))
											{
												$st=str_replace(" ","-",strtolower($st2['t_startng_loc']));
												?>		
												<li class="active"><a href="tour-packages-in-<?php if($plocs) echo strtolower($plocs); else  echo $search_loc;?>-from-<?php echo $st;?>"><i class="fa fa-check-square"></i>&nbsp;<?php echo $st2['t_startng_loc'];?></a></li>
											<?php } ?>		
											</ul>
										</div>
									</div>
									
								</div>




					   