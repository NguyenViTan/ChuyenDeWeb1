<!DOCTYPE html>
<html lang="en">

    <title>@yield('title')</title>
</head>
<body>

<div class="header-top">
			<div class="container">
				<div class="row">
					<!-- HEADER-LEFT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-left-menu">
							<div class="welcome-info">
								Welcome <span>BootExperts</span>
							</div>
							<div class="currenty-converter">
								<form method="post" action="#" id="currency-set">
									<div class="current-currency">
										<span class="cur-label">Currency : </span><strong>USD</strong>
									</div>
									<ul class="currency-list currency-toogle">
										<li>
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
										<li>
										<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
									</ul>
								</form>									
							</div>
							<div class="selected-language">
								<div class="current-lang">
									<span class="current-lang-label">Language : </span><strong>English</strong>
								</div>
								<ul class="languages-choose language-toogle">
									<li>
										<a href="#" title="English">
											<span>English</span>
										</a>
									</li>
									<li>
										<a href="#" title="Français (French)">
											<span>Français</span>
										</a>
									</li>
								</ul>										
							</div>
						</div>
					</div>
					<!-- HEADER-LEFT-MENU END -->
					<!-- HEADER-RIGHT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-right-menu">
							<nav>
								<ul class="list-inline">
									<li><a href="checkout.html">Check Out</a></li>
									<li><a href="wishlist.html">Wishlist</a></li>
									<li><a href="my-account.html">My Account</a></li>
									<li><a href="cart.html">My Cart</a></li>
									<li><a href="registration.html">Sign in</a></li>
								</ul>									
							</nav>
						</div>
					</div>
					<!-- HEADER-RIGHT-MENU END -->
				</div>
			</div>
		</div>
		<!-- HEADER-TOP END -->
		<!-- HEADER-MIDDLE START -->
		<section class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!-- LOGO START -->
						<div class="logo">
							<a href="index.html"><img src="img/logo.png" alt="bstore logo" /></a>
						</div>
						<!-- LOGO END -->
						<!-- HEADER-RIGHT-CALLUS START -->
						<div class="header-right-callus">
							<h3>call us free</h3>
							<span>0123-456-789</span>
						</div>
						<!-- HEADER-RIGHT-CALLUS END -->
						<!-- CATEGORYS-PRODUCT-SEARCH START -->
						<div class="categorys-product-search">
							<form action="#" method="get" class="search-form-cat">
								<div class="search-product form-group">
									<select name="catsearch" class="cat-search">
										<option value="">Categories</option>
										<option value="2">--Women</option>
										<option value="3">---T-Shirts</option>
										<option value="4">--Men</option>
										<option value="5">----Shoose</option>
										<option value="6">--Dress</option>
										<option value="7">----Tops</option>
										<option value="8">---Casual</option>
										<option value="9">--Evening</option>
										<option value="10">--Summer</option>
										<option value="11">---sports</option>
										<option value="12">--day</option>
										<option value="13">--evening</option>
										<option value="14">-----Blouse</option>
										<option value="15">--handba</option>
										<option value="16">--phone</option>
										<option value="17">-house</option>
										<option value="18">--Beauty</option>
										<option value="19">--health</option>
										<option value="20">---clothing</option>
										<option value="21">---kids</option>
										<option value="22">--Dresse</option>
										<option value="22">---Casual</option>
										<option value="23">--day</option>
										<option value="24">--evening</option>
										<option value="24">---Blouse</option>
										<option value="25">-handb</option>
										<option value="66">--phone</option>
										<option value="27">---house</option>									
									</select>
									<input type="text" class="form-control search-form" name="s" placeholder="Enter your search key ... " />
									<button class="search-button" value="Search" name="s" type="submit">
										<i class="fa fa-search"></i>
									</button>									 
								</div>
							</form>
						</div>
						<!-- CATEGORYS-PRODUCT-SEARCH END -->
					</div>
				</div>
			</div>
		</section>
		<!-- HEADER-MIDDLE END -->
		<!-- MAIN-MENU-AREA START -->
		<header class="main-menu-area">
			<div class="container">
				<div class="row">
					<!-- SHOPPING-CART START -->
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
						<div class="shopping-cart-out pull-right">
							<div class="shopping-cart">
								<a class="shop-link" href="cart.html" title="View my shopping cart">
									<i class="fa fa-shopping-cart cart-icon"></i>
									<b>My Cart</b>
									<span class="ajax-cart-quantity">2</span>
								</a>
								<div class="shipping-cart-overly">
									<div class="shipping-item">
										<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
										<div class="shipping-item-image">
											<a href="#"><img src="img/shopping-image.jpg" alt="shopping image" /></a>
										</div>
										<div class="shipping-item-text">
											<span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Watch</a></span>
											<span class="pro-quality"><a href="#">S,Black</a></span>
											<p>$22.95</p>
										</div>
									</div>
									<div class="shipping-item">
										<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
										<div class="shipping-item-image">
											<a href="#"><img src="img/shopping-image2.jpg" alt="shopping image" /></a>
										</div>
										<div class="shipping-item-text">
											<span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Women Bag</a></span>
											<span class="pro-quality"><a href="#">S,Gary</a></span>
											<p>$19.95</p>
										</div>
									</div>
									<div class="shipping-total-bill">
										<div class="cart-prices">
											<span class="shipping-cost">$2.00</span>
											<span>Shipping</span>
										</div>
										<div class="total-shipping-prices">
											<span class="shipping-total">$24.95</span>
											<span>Total</span>
										</div>										
									</div>
									<div class="shipping-checkout-btn">
										<a href="checkout.html">Check out <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<!-- SHOPPING-CART END -->
					<!-- MAINMENU START -->
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
						<div class="mainmenu">
							<nav>
								<ul class="list-inline mega-menu">
									<li class="active"><a href="index.html">Home</a>
										<!-- DROPDOWN MENU START -->
										<div class="home-var-menu">
											<ul class="home-menu">
												<li><a href="index.html">Home variation 1</a></li>
												<li><a href="index-2.html">Home variation 2</a></li>
											</ul>												
										</div>
										<!-- DROPDOWN MENU END -->
									</li>
									<li>
										<a href="shop-gird.html">Women</a>
										<!-- DRODOWN-MEGA-MENU START -->
										<div class="drodown-mega-menu">
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Watch</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- DRODOWN-MEGA-MENU END -->
									</li>
									<li>
										<a href="shop-gird.html">Men</a>
										<!-- DRODOWN-MEGA-MENU START -->
										<div class="drodown-mega-menu">
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- DRODOWN-MEGA-MENU END -->
									</li>
									<li>
										<a href="shop-gird.html">clothing</a>
										<!-- DRODOWN-MEGA-MENU START -->	
										<div class="drodown-mega-menu">
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">new product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Watch</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
										</div>	
										<!-- DRODOWN-MEGA-MENU END -->										
									</li>
									<li>
										<a href="shop-gird.html">Tops</a>
										<!-- DRODOWN-MEGA-MENU START -->
										<div class="drodown-mega-menu">
											<div class="left-mega col-xs-4">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-4">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-4">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">top rate product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">Latest product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>	
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">popular product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>											
										</div>
										<!-- DRODOWN-MEGA-MENU END -->
									</li>
									<li>
										<a href="shop-gird.html">T-shirts</a>
										<!-- DRODOWN-MEGA-MENU START -->
										<div class="drodown-mega-menu">
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">new product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Watch</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- DRODOWN-MEGA-MENU END -->
									</li>
									<li><a href="#">Delivery</a></li>
									<li><a href="about-us.html">About us</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- MAINMENU END -->
				</div>
				<div class="row">
					<!-- MOBILE MENU START -->
					<div class="col-sm-12 mobile-menu-area">
						<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
							<span class="mobile-menu-title">MENU</span>
							<nav>
								<ul>
									<li><a href="index.html">Home</a>
										<ul>
											<li><a href="index.html">Home variation 1</a></li>
											<li><a href="index-2.html">Home variation 2</a></li>
										</ul>														
									</li>								
									<li><a href="shop-gird.html">Women</a>
										<ul>
											<li><a href="shop-gird.html">Tops</a>
												<ul>
													<li><a href="shop-gird.html">T-Shirts</a></li>
													<li><a href="shop-gird.html">Blouses</a></li>
												</ul>													
											</li>
											<li><a href="shop-gird.html">Dresses</a>
												<ul>
													<li><a href="shop-gird.html">Casual Dresses</a></li>
													<li><a href="shop-gird.html">Summer Dresses</a></li>
													<li><a href="shop-gird.html">Evening Dresses</a></li>	
												</ul>	
											</li>

										</ul>
									</li>
									<li><a href="shop-gird.html">men</a>
										<ul>											
											<li><a href="shop-gird.html">Tops</a>
												<ul>
													<li><a href="shop-gird.html">Sports</a></li>
													<li><a href="shop-gird.html">Day</a></li>
													<li><a href="shop-gird.html">Evening</a></li>
												</ul>														
											</li>
											<li><a href="shop-gird.html">Blouses</a>
												<ul>
													<li><a href="shop-gird.html">Handbag</a></li>
													<li><a href="shop-gird.html">Headphone</a></li>
													<li><a href="shop-gird.html">Houseware</a></li>
												</ul>														
											</li>
											<li><a href="shop-gird.html">Accessories</a>
												<ul>
													<li><a href="shop-gird.html">Houseware</a></li>
													<li><a href="shop-gird.html">Home</a></li>
													<li><a href="shop-gird.html">Health & Beauty</a></li>
												</ul>														
											</li>
										</ul>										
									</li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">tops</a></li>
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="#">Delivery</a></li>
									<li><a href="about-us.html">About us</a></li>
								</ul>
							</nav>
						</div>						
					</div>
					<!-- MOBILE MENU END -->
				</div>
			</div>
		</header>
   @yield('content')
   <section class="latest-news-area">
			<div class="container">
				<div class="row">
					<div class="latest-news-row">
						<div class="center-title-area">
							<h2 class="center-title"><a href="#">latest news</a></h2>
						</div>	
						<div class="col-xs-12">
							<div class="row">
								<!-- LATEST-NEWS-CAROUSEL START -->
								<div class="latest-news-carousel">
									<!-- LATEST-NEWS-SINGLE-POST START -->
									<div class="item">
										<div class="latest-news-post">
											<div class="single-latest-post">
												<a href="#"><img src="img/latest-news/1.jpg" alt="latest-post" /></a>
												<h2><a href="#">What is Lorem Ipsum?</a></h2>
												<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
												<div class="latest-post-info">
													<i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
												</div>
												<div class="read-more">
													<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- LATEST-NEWS-SINGLE-POST END -->
									<!-- LATEST-NEWS-SINGLE-POST START -->
									<div class="item">
										<div class="latest-news-post">
											<div class="single-latest-post">
												<a href="#"><img src="img/latest-news/2.jpg" alt="latest-post" /></a>
												<h2><a href="#">Share the Love for printing</a></h2>
												<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
												<div class="latest-post-info">
													<i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
												</div>
												<div class="read-more">
													<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- LATEST-NEWS-SINGLE-POST END -->
									<!-- LATEST-NEWS-SINGLE-POST START -->								
									<div class="item">
										<div class="latest-news-post">
											<div class="single-latest-post">
												<a href="#"><img src="img/latest-news/3.jpg" alt="latest-post" /></a>
												<h2><a href="#">Answers your Questions P..</a></h2>
												<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
												<div class="latest-post-info">
													<i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
												</div>
												<div class="read-more">
													<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- LATEST-NEWS-SINGLE-POST END -->
									<!-- LATEST-NEWS-SINGLE-POST START -->								
									<div class="item">
										<div class="latest-news-post">
											<div class="single-latest-post">
												<a href="#"><img src="img/latest-news/4.jpg" alt="latest-post" /></a>
												<h2><a href="#">What is Bootstrap? – History</a></h2>
												<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
												<div class="latest-post-info">
													<i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
												</div>
												<div class="read-more">
													<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- LATEST-NEWS-SINGLE-POST END -->
									<!-- LATEST-NEWS-SINGLE-POST START -->								
									<div class="item">
										<div class="latest-news-post">
											<div class="single-latest-post">
												<a href="#"><img src="img/latest-news/5.jpg" alt="latest-post" /></a>
												<h2><a href="#">Share the Love for..</a></h2>
												<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
												<div class="latest-post-info">
													<i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
												</div>
												<div class="read-more">
													<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- LATEST-NEWS-SINGLE-POST END -->
									<!-- LATEST-NEWS-SINGLE-POST START -->								
									<div class="item">
										<div class="latest-news-post">
											<div class="single-latest-post">
												<a href="#"><img src="img/latest-news/6.jpg" alt="latest-post" /></a>
												<h2><a href="#">What is Bootstrap? – The History a..</a></h2>
												<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
												<div class="latest-post-info">
													<i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
												</div>
												<div class="read-more">
													<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- LATEST-NEWS-SINGLE-POST END -->	
									<!-- LATEST-NEWS-SINGLE-POST START -->								
									<div class="item">
										<div class="latest-news-post">
											<div class="single-latest-post">
												<a href="#"><img src="img/latest-news/3.jpg" alt="latest-post" /></a>
												<h2><a href="#">Answers your Questions P..</a></h2>
												<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
												<div class="latest-post-info">
													<i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
												</div>
												<div class="read-more">
													<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- LATEST-NEWS-SINGLE-POST END -->
									<!-- LATEST-NEWS-SINGLE-POST START -->								
									<div class="item">
										<div class="latest-news-post">
											<div class="single-latest-post">
												<a href="#"><img src="img/latest-news/4.jpg" alt="latest-post" /></a>
												<h2><a href="#">What is Bootstrap? – History</a></h2>
												<p>Lorem Ipsum is simply dummy text of the printing and Type setting industry. Lorem Ipsum has been...</p>
												<div class="latest-post-info">
													<i class="fa fa-calendar"></i><span>2015-06-20 04:51:43</span>
												</div>
												<div class="read-more">
													<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
												</div>
											</div>
										</div>
									</div>
									<!-- LATEST-NEWS-SINGLE-POST END -->									
								</div>	
								<!-- LATEST-NEWS-CAROUSEL START -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- LATEST-NEWS-AREA END -->
		<!-- BRAND-CLIENT-AREA START -->
		<section class="brand-client-area">
			<div class="container">
				<div class="row">
					<!-- BRAND-CLIENT-ROW START -->
					<div class="brand-client-row">
						<div class="center-title-area">
							<h2 class="center-title">BRAND & CLIENTS</h2>
						</div>
						<div class="col-xs-12">
							<div class="row">
								<!-- CLIENT-CAROUSEL START -->
								<div class="client-carousel">
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/1.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/2.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->								
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/3.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->								
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/4.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->								
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/5.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->								
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/1.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->									
									<!-- CLIENT-SINGLE START -->								
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/3.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/2.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->								
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/3.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->								
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/4.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->								
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/5.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->								
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/1.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->									
									<!-- CLIENT-SINGLE START -->								
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/3.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->								
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/4.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->								
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/5.png" alt="brand-client" />
											</a>
										</div>									
									</div>
									<!-- CLIENT-SINGLE END -->									
								</div>
								<!-- CLIENT-CAROUSEL END -->
							</div>
						</div>
					</div>
					<!-- BRAND-CLIENT-ROW END -->
				</div>
			</div>
		</section>
		<!-- BRAND-CLIENT-AREA END -->
		<!-- COMPANY-FACALITY START -->
		<section class="company-facality">
			<div class="container">
				<div class="row">
					<div class="company-facality-row">
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-rocket"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">FREE SHIPPING</h3>
									<span>on order over $100</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-umbrella"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">24/7 SUPPORT</h3>
									<span>online consultations</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->						
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-calendar"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">DAILY UPDATES</h3>
									<span>Check out store for latest</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->						
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-refresh"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">30-DAY RETURNS</h3>
									<span>moneyback guarantee</span>
								</div>
							</div>
						</div>		
						<!-- SINGLE-FACALITY END -->					
					</div>
				</div>
			</div>
		</section>
		<!-- COMPANY-FACALITY END -->
   <section class="footer-top-area">
			<div class="container">
				<div class="footer-top-container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
							<!-- FOOTER-TOP-LEFT START -->
							<div class="footer-top-left">
								<!-- NEWSLETTER-AREA START -->
								<div class="newsletter-area">
									<h2>Newsletter</h2>
									<p>Subscribe to our mailing list to receive updates on new arrivals, special offers and other discount information.</p>
									<form action="#">
										<div class="form-group newsletter-form-group">
										  <input type="text" class="form-control newsletter-form" placeholder="Enter your e-mail">
										  <input type="submit" class="newsletter-btn" name="submit" value="Subscribe" />
										</div>
									</form>
								</div>
								<!-- NEWSLETTER-AREA END -->
								<!-- ABOUT-US-AREA START -->
								<div class="about-us-area">
									<h2>About Us</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								</div>
								<!-- ABOUT-US-AREA END -->
								<!-- FLLOW-US-AREA START -->
								<div class="fllow-us-area">
									<h2>Follow us</h2>
									<ul class="flow-us-link">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-rss"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
								<!-- FLLOW-US-AREA END -->
							</div>
							<!-- FOOTER-TOP-LEFT END -->
						</div>
						<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
							<!-- FOOTER-TOP-RIGHT-1 START -->
							<div class="footer-top-right-1">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-sm">
										<!-- STATICBLOCK START -->
										<div class="staticblock">
											<h2>static block</h2>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s<br />when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
										</div>
										<!-- STATICBLOCK END -->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<!-- STORE-INFORMATION START -->
										<div class="Store-Information">
											<h2>Store Information</h2>
											<ul>
												<li>
													<div class="info-lefticon">
														<i class="fa fa-map-marker"></i>
													</div>
													<div class="info-text">
														<p>My Company, 42 avenue des Champs Elysées 75000 Paris France </p>
													</div>
												</li>
												<li>
													<div class="info-lefticon">
														<i class="fa fa-phone"></i>
													</div>
													<div class="info-text call-lh">
														<p>Call us now : 0123-456-789</p>
													</div>
												</li>
												<li>
													<div class="info-lefticon">
														<i class="fa fa-envelope-o"></i>
													</div>
													<div class="info-text">
														<p>Email : <a href="mailto:sales@yourcompany.com"><i class="fa fa-angle-double-right"></i> sales@yourcompany.com</a></p>
													</div>
												</li>
											</ul>
										</div>
										<!-- STORE-INFORMATION END -->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<!-- GOOGLE-MAP-AREA START -->
										<div class="google-map-area">
											<div class="google-map">
												<div id="googleMap" style="width:100%;height:150px;"></div>
											</div>
										</div>
										<!-- GOOGLE-MAP-AREA END -->
									</div>
								</div>
							</div>
							<!-- FOOTER-TOP-RIGHT-1 END -->
							<div class="footer-top-right-2">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<!-- FOTTER-MENU-WIDGET START -->
										<div class="fotter-menu-widget">
											<div class="single-f-widget">
												<h2>Categories</h2>
												<ul>
													<li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Women </a></li>
													<li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Men</a></li>
													<li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>clothing</a></li>
													<li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>kids</a></li>
												</ul>
											</div>
										</div>
										<!-- FOTTER-MENU-WIDGET END -->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
										<!-- FOTTER-MENU-WIDGET START -->
										<div class="fotter-menu-widget">
											<div class="single-f-widget">
												<h2>Information</h2>
												<ul>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>Specials</a></li>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>New products</a></li>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>Best sellers</a></li>
													<li><a href="contact-us.html"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
												</ul>
											</div>
										</div>
										<!-- FOTTER-MENU-WIDGET END -->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<!-- FOTTER-MENU-WIDGET START -->
										<div class="fotter-menu-widget">
											<div class="single-f-widget">
												<h2>My account</h2>
												<ul>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>My orders</a></li>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>My credit slips</a></li>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>My addresses</a></li>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>My personal info</a></li>
													<li><a href="#"><i class="fa fa-angle-double-right"></i>Sign out</a></li>
												</ul>
											</div>
										</div>
										<!-- FOTTER-MENU-WIDGET END -->
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<!-- PAYMENT-METHOD START -->
										<div class="payment-method">
											<img class="img-responsive pull-right" src="img/payment.png" alt="payment-method" />
										</div>
										<!-- PAYMENT-METHOD END -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- FOOTER-TOP-AREA END -->
		<!-- COPYRIGHT-AREA START -->
		<footer class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="copy-right">
							<address>Copyright © 2015 <a href="http://bootexperts.com/">BootExperts</a> All Rights Reserved</address>
						</div>
						<div class="scroll-to-top">
							<a href="#" class="bstore-scrollertop"><i class="fa fa-angle-double-up"></i></a>
						</div>
					</div>
				</div>
			</div>
		</footer> 
</body>
</html>
