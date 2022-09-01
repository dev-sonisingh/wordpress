<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		


		<?php wp_head();?>


		
	</head>



	<body>
		<div class="main_page">


			<!-- Header *******************************  -->
			<header>
				<div class="top_header">
					<div class="container">
						<div class="pull-left header_left">
							<ul>
		        				<li><a href="#">Order On Phone: <span>+321 453 68 739</span></a></li>
		        				<li><i class="fa fa-envelope-o s_color" aria-hidden="true"></i><a href="#">organicstore@gmail.com</a></li>
		        			</ul>
						</div>

						<div class="pull-right header_right">
							<div class="state" id="value1">
								<ul>
			        				<li><i class="fa fa-user s_color" aria-hidden="true"></i><a href="#">Account</a></li>
			        				<li><i class="fa fa-heart s_color" aria-hidden="true"></i><a href="#">Whishlist </a></li>
			        				<li><i class="fa fa-truck s_color" aria-hidden="true"></i><a href="#">Whishlist</a></li>
			        			</ul>
			        			<div id="polyglotLanguageSwitcher">
									<form action="#">
										<select id="polyglot-language-options">
											<option id="en" value="en" selected>English</option>
											<option id="fr" value="fr">French</option>
											<option id="de" value="de">German</option>
											<option id="it" value="it">Italian</option>
											<option id="es" value="es">Spanish</option>
										</select>
									</form>
								</div>
							</div>

								
						</div>
					</div> <!-- End of .container -->
				</div> <!-- End of .top_header -->

				<div class="bottom_header">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="search-box">
									<form action="#" class="clearfix">
										<input type="text" placeholder="Search...">
										<button><i class="fa fa-search"></i></button>
									</form>
								</div>
							</div>
							<div class="col-md-4 col-sm-5 col-xs-6 logo-responsive">
								<div class="logo-area">
									<a href="" class="pull-left logo">
										
										<?php
										if(function_exists('the_custom_logo')){
											the_custom_logo();
// 										$custom_logo_id = get_theme_mod('custom_logo');
// 										$logo = wp_get_attachment_image_src($custom_logo_id);
											
										}?>
																	
									</a>
								</div>
							</div>
							<div class="col-md-4 col-sm-7 col-xs-6 pdt-14">
								<div class="login_option float_left">
							   		<div class="login_form">
							   			<div class="user">
							   				<i class="icon-photo"></i>
							   			</div>
							   			<div class="login-info">
								   			<div class="welcome">Welcome!</div>
									   		<!-- select menu -->
									            <form action="#" class="select-form">
							                        <div class="g-input f1 mb-30">
							                            <select class="text-capitalize selectpicker" data-style="g-select" data-width="100%">
							                                <option value="0" selected="">Sign In</option>
							                                <option value="1">Sign In</option>
							                                <option value="2">Register Here</option>
							                            </select>
							                        </div>
							                    </form>
								   		</div>
							   		</div> <!-- End of .cart_list -->
							    </div>
							    <div class="cart_option float_left">
							   		<button class="cart tran3s dropdown-toggle" id="cartDropdown"><i class="fa icon-icon-32846" aria-hidden="true"></i><span class="s_color_bg p_color">2</span></button>
							   		<div class="cart-info">
							   			<div>My Cart</div>
								   		<div class="doller">84.00$</div>
							   		</div>
								   		
							   		<div class="cart_list color2_bg" aria-labelledby="cartDropdown">
							   			<ul>
							   				<li>
							   					<div class="cart_item_wrapper clear_fix">
							   						<div class="img_holder float_left"><img src="images/shop/9.png" alt="Cart Image" class="img-responsive"></div> <!-- End of .img_holder -->

							   						<div class="item_deatils float_left">
							   							<h6>Turmeric Powde</h6>
							   							<ul>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
														</ul>
														<span class="font_fix">$ 34.99</span>
							   						</div> <!-- End of .item_deatils -->
							   					</div> <!-- End of .cart_item_wrapper -->
							   				</li>

							   				<li>
							   					<div class="cart_item_wrapper clear_fix">
							   						<div class="img_holder float_left"><img src="images/shop/10.png" alt="Cart Image" class="img-responsive"></div> <!-- End of .img_holder -->
							   						
							   						<div class="item_deatils float_left">
							   							<h6>Pure Jeans Coffee</h6>
							   							<ul>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
														</ul>
														<span class="font_fix">$ 26.99</span>
							   						</div> <!-- End of .item_deatils -->
							   					</div> <!-- End of .cart_item_wrapper -->
							   				</li>

							   				<li>
							   					<div class="cart_item_wrapper clear_fix">
							   						<div class="img_holder float_left"><img src="images/shop/11.png" alt="Cart Image" class="img-responsive"></div> <!-- End of .img_holder -->
							   						
							   						<div class="item_deatils float_left">
							   							<h6>Columbia Chocolate</h6>
							   							<ul>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
														</ul>
														<span class="font_fix">$ 26.99</span>
							   						</div> <!-- End of .item_deatils -->
							   					</div> <!-- End of .cart_item_wrapper -->
							   				</li>
							   			</ul>

							   			<div class="cart_total clear_fix">

							   				<span class="total font_fix float_left">Total - 140$</span>
							   				<a href="#" class="s_color_bg float_right tran3s">View Cart</a>
							   			</div>
							   		</div> <!-- End of .cart_list -->
							    </div>

							</div>

						</div>

					</div>
				</div> <!-- End of .bottom_header -->
			</header>





			<!-- Menu ******************************* -->
			<div class="theme_menu color1_bg">
				<div class="container">
					<nav class="menuzord pull-left" id="main_menu">
						
						<?php wp_nav_menu(
						array(
						'menu' => 'primary',
						'container' => '',
						'theme_loaction' => 'primary',	
						'items_wrap' => '<ul id="" class="menuzord-menu">%3$s</ul>'	
						)

						);?>
<!-- 					   <ul class="menuzord-menu">
					      <li class="current_page"><a href="index.html">Home</a></li>
					      <li><a href="about-us.html">About us</a></li>
					      <li><a href="#">store</a>
					      	<ul class="dropdown">
					            <li><a href="shop.html">Shop With Sidebar</a></li>
					            <li><a href="shop-single.html">Product Detail</a></li>
					            <li><a href="shop-cart.html">Cart Page</a></li>
					            <li><a href="checkout.html">Checkout Page</a></li>
					            <li><a href="account.html">My Account</a></li>
					         </ul>
					      </li>
					      <li><a href="#">News</a>
					      	<ul class="dropdown">
					            <li><a href="blog-Standard.html">News Standard</a></li>
					            <li><a href="blog-list-sidebar.html">News With Sidebar</a></li>
					            <li><a href="blog-grid.html">News Masonary</a></li>
					            <li><a href="blog-details.html">News Single</a></li>
					         </ul>
					      </li>
					      <li><a href="#">gallery</a>
					      	<ul class="dropdown">
					            <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                <li><a href="gallery-masonry.html">Gallery Masonary</a></li>
                                <li><a href="gallery-single.html">Gallery Single</a></li>
					         </ul>
					      </li>

					      <li><a href="#">Pages</a>
					      	<ul class="dropdown">
					            <li><a href="Testimonials.html">Testimonials</a></li>
					            <li><a href="404.html">404v page</a></li>
					            <li><a href="faq.html">FAQ</a></li>
					         </ul>
					      </li>
					      
					      <li><a href="contact.html">Contact us</a></li>
					   </ul> <!-- End of .menuzord-menu --> 
				   </nav> <!-- End of #main_menu -->


				   <!-- ******* Cart And Search Option ******** -->
				   <div class="nav_side_content pull-right">
				   		<ul class="icon_header">
							<li class="border_round tran3s"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="border_round tran3s"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="border_round tran3s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="border_round tran3s"><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
				   </div> <!-- End of .nav_side_content -->
				     
			   </div> <!-- End of .conatiner -->
			</div> <!-- End of .theme_menu -->

