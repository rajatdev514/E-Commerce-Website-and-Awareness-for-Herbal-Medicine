<?php require('top.php') ?>
<div class="body__overlay"></div>

<!-- Start Slider Area -->
<div class="slider__container slider--one bg__cat--3 ">
	<div class="slide__container slider__activation__wrap owl-carousel">
		<!-- Start Single Slide -->
		<div class="single__slide animation__style01 slider__fixed--height">
			<div class="container ">
				<div class="row align-items__center">
					<div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
						<div class="slide">
							<div class="slider__inner">
								<!-- <h2>collection 2018</h2>  -->
								 <h1>Immunity Booster</h1>
								<div class="cr__btn">
									
									<a href="index.php">Shop Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
						<div class="slide__thumb">
							<img src="images/slider/fornt-img/1.png" alt="slider images">
				<!-- <img src="HerbalCare/photos/Immunity Booster.jpeg"  	alt="slider images"> -->
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Single Slide -->
		<!-- Start Single Slide -->
		<div class="single__slide animation__style01 slider__fixed--height">
			<div class="container">
				<div class="row align-items__center">
					<div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
						<div class="slide">
							<div class="slider__inner">
								<!-- <h2>collection 2018</h2> -->
								<h1>What's Your Dosha?</h1>
								<div class="cr__btn">
									<a href="Responsive Blog Template/index.html">Read
										More</a>
									<a
										href="Simple-Personality-Quiz-master/personality-quiz.html">Quiz
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
						<div class="slide__thumb">
							<img src="HerbalCare/photos/Dosa.jpeg" alt="slider images">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Single Slide -->
	</div>
</div>
<!-- Start Slider Area -->
<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section__title--2 text-center">
					<h2 class="title__line">New Arrivals</h2>
					<!-- <p>But I must explain to you how all this mistaken idea</p> -->
					<p>
					<h3><B>Product you wished for</B></h3>
					</p>
				</div>
			</div>
		</div>
		<div class="htc__product__container">
			<div class="row">
				<div class="product__list clearfix mt--30">
					<?php
					$get_product = get_product($con, 4);
					foreach ($get_product as $list) {
					?>
					<!-- Start Single Category -->
					<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
						<div class="category">
							<div class="ht__cat__thumb">
								<a href="product.php?id=<?php echo $list['id'] ?>">

									<img src="<?php echo 'media/product/' . $list['image'] ?>"
										alt="product images">
									<!-- <img src="../media/product/ <?php echo  $list['image'] ?>" alt="product images"> -->

									<!-- <img src="<?php echo 'media/product/' . $list['image'] ?>" /> -->


								</a>
							</div>

							<div class="fr__product__inner">
								<h4><a href="product.php?id=<?php echo $list['id'] ?>">
										<?php echo $list['name'] ?>
									</a>
								</h4>
								<ul class="fr__pro__prize">
									<li class="old__prize">
										<?php echo $list['mrp'] ?>
									</li>
									<li>
										<?php echo $list['price'] ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End Single Category -->
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Category Area -->
<!-- Start Product Area -->
<section class="ftr__product__area ptb--100">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section__title--2 text-center">
					<h2 class="title__line">Best Seller</h2>
					<!-- <p>But I must explain to you how all this mistaken idea</p> -->
					<p>
					<h3><B>Product you wished for</B></h3>
					</p>
					<p></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="product__wrap clearfix">
				<!-- Start Single Category -->
				<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
					<div class="category">
						<div class="ht__cat__thumb">
							<a href="index.php">
								<img src="HerbalCare/photos/Pure Tulsi Ark.jpeg"
									alt="product images">
							</a>
						</div>
						<div class="fr__hover__info">
							<ul class="product__action">
								<li><a href="wishlist.html"><i
											class="icon-heart icons"></i></a>
								</li>

								<li><a href="cart.html"><i
											class="icon-handbag icons"></i></a>
								</li>

								<li><a href="#"><i class="icon-shuffle icons"></i></a>
								</li>
							</ul>
						</div>
						<div class="fr__product__inner">
							<h4><a href="product-details.html">Pure Tulsi Ark</a></h4>
							<ul class="fr__pro__prize">
								<li class="old__prize">₹30</li>
								<li>₹25</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Single Category -->
				<!-- Start Single Category -->
				<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
					<div class="category">
						<div class="ht__cat__thumb">
							<a href="index.php">
								<img src="HerbalCare/photos/Pure Wild Honey.jpeg"
									alt="product images">
							</a>
						</div>
						<div class="fr__hover__info">
							<ul class="product__action">
								<li><a href="wishlist.html"><i
											class="icon-heart icons"></i></a>
								</li>

								<li><a href="cart.html"><i
											class="icon-handbag icons"></i></a>
								</li>

								<li><a href="#"><i class="icon-shuffle icons"></i></a>
								</li>
							</ul>
						</div>
						<div class="fr__product__inner">
							<h4><a href="product-details.html">Pure Wild Honey </a>
							</h4>
							<ul class="fr__pro__prize">
								<li class="old__prize">₹30</li>
								<li>₹25</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Single Category -->
				<!-- Start Single Category -->
				<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
					<div class="category">
						<div class="ht__cat__thumb">
							<a href="index.php">
								<img src="HerbalCare/photos/Anandam - De-stress & Relax Green Tea.jpeg"
									alt="product images">
							</a>
						</div>
						<div class="fr__hover__info">
							<ul class="product__action">
								<li><a href="wishlist.html"><i
											class="icon-heart icons"></i></a>
								</li>

								<li><a href="cart.html"><i
											class="icon-handbag icons"></i></a>
								</li>

								<li><a href="#"><i class="icon-shuffle icons"></i></a>
								</li>
							</ul>
						</div>
						<div class="fr__product__inner">
							<h4><a href="product-details.html">Anandam - De-stress & Relax
									Green Tea</a></h4>
							<ul class="fr__pro__prize">
								<li class="old__prize">₹30</li>
								<li>₹25</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Single Category -->
				<!-- Start Single Category -->
				<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
					<div class="category">
						<div class="ht__cat__thumb">
							<a href="index.php">
								<img src="HerbalCare/photos/Healthy Hair Biotin Supplement.jpeg"
									alt="product images">
							</a>
						</div>
						<div class="fr__hover__info">
							<ul class="product__action">
								<li><a href="wishlist.html"><i
											class="icon-heart icons"></i></a>
								</li>

								<li><a href="cart.html"><i
											class="icon-handbag icons"></i></a>
								</li>

								<li><a href="#"><i class="icon-shuffle icons"></i></a>
								</li>
							</ul>
						</div>
						<div class="fr__product__inner">
							<h4><a href="product-details.html">Healthy Hair Biotin
									Supplement</a></h4>
							<ul class="fr__pro__prize">
								<li class="old__prize">₹30</li>
								<li>₹25</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Single Category -->
			</div>
		</div>

		<div class="row">
			<div class="product__wrap clearfix">
				<!-- Start Single Category -->
				<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
					<div class="category">
						<div class="ht__cat__thumb">
							<a href="index.php">
								<img src="HerbalCare/photos/Wheatgrass Juice.jpg"
									alt="product images">
							</a>
						</div>
						<div class="fr__hover__info">
							<ul class="product__action">
								<li><a href="wishlist.html"><i
											class="icon-heart icons"></i></a>
								</li>

								<li><a href="cart.html"><i
											class="icon-handbag icons"></i></a>
								</li>

								<li><a href="#"><i class="icon-shuffle icons"></i></a>
								</li>
							</ul>
						</div>
						<div class="fr__product__inner">
							<h4><a href="product-details.html">Wheatgrass Juice</a></h4>
							<ul class="fr__pro__prize">
								<li class="old__prize">₹30</li>
								<li>₹25</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Single Category -->
				<!-- Start Single Category -->
				<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
					<div class="category">
						<div class="ht__cat__thumb">
							<a href="index.php">
								<img src="HerbalCare/photos/Chyavanprash.jpg"
									alt="product images">
							</a>
						</div>
						<div class="fr__hover__info">
							<ul class="product__action">
								<li><a href="wishlist.html"><i
											class="icon-heart icons"></i></a>
								</li>

								<li><a href="cart.html"><i
											class="icon-handbag icons"></i></a>
								</li>

								<li><a href="#"><i class="icon-shuffle icons"></i></a>
								</li>
							</ul>
						</div>
						<div class="fr__product__inner">
							<h4><a href="product-details.html">Chyavanprash</a>
							</h4>
							<ul class="fr__pro__prize">
								<li class="old__prize">₹30</li>
								<li>₹25</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Single Category -->
				<!-- Start Single Category -->
				<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
					<div class="category">
						<div class="ht__cat__thumb">
							<a href="index.php">
								<img src="HerbalCare/photos/Giloy Juice.jpg"
									alt="product images">
							</a>
						</div>
						<div class="fr__hover__info">
							<ul class="product__action">
								<li><a href="wishlist.html"><i
											class="icon-heart icons"></i></a>
								</li>

								<li><a href="cart.html"><i
											class="icon-handbag icons"></i></a>
								</li>

								<li><a href="#"><i class="icon-shuffle icons"></i></a>
								</li>
							</ul>
						</div>
						<div class="fr__product__inner">
							<h4><a href="product-details.html">Giloy Juice</a></h4>
							<ul class="fr__pro__prize">
								<li class="old__prize">₹30</li>
								<li>₹25</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Single Category -->
				<!-- Start Single Category -->
				<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
					<div class="category">
						<div class="ht__cat__thumb">
							<a href="index.php">
								<img src="HerbalCare/photos/Aloevera Gel.jpg"
									alt="product images">
							</a>
						</div>
						<div class="fr__hover__info">
							<ul class="product__action">
								<li><a href="wishlist.html"><i
											class="icon-heart icons"></i></a>
								</li>

								<li><a href="cart.html"><i
											class="icon-handbag icons"></i></a>
								</li>

								<li><a href="#"><i class="icon-shuffle icons"></i></a>
								</li>
							</ul>
						</div>
						<div class="fr__product__inner">
							<h4><a href="product-details.html">Aloevera Gel</a></h4>
							<ul class="fr__pro__prize">
								<li class="old__prize">₹30</li>
								<li>₹25</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Single Category -->
			</div>
		</div>

	</div>
</section>
<!-- End Product Area -->
<?php require('footer.php') ?>
