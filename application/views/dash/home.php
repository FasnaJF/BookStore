
<body>

<header id="header"><!--header-->
	<div class="header_top"><!--header_top-->
		<div class="container">

		</div>
	</div><!--/header_top-->

	<div class="header-middle"><!--header-middle-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="logo pull-left">
						<a href="<?php echo base_url();?>"><img src="<?php echo base_url("/images/home/logo.png");?>" alt="" /></a>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="shop-menu pull-right">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url('Admin/loginButton');?>" class="btn btn-default add-to-cart "><i class="fa fa-lock"></i>
									<?php
										$user = (end($books));
									if(is_array($user)){echo "User";}
									else{echo "Logout(".$user.")";}
									?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-middle-->

	<div class="header-bottom"><!--header-bottom-->
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-bottom-->
</header><!--/header-->



<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">

			</div>

			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Features Items</h2>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="<?php echo base_url("/images/home/product1.jpg");?>" alt="" />
									<h2>$<?php echo($books[0]['Price']);?></h2>
									<p>Available Copies : <?php echo($books[0]['Stock']);?></p>
									<a href="<?php echo base_url();?>" class="btn btn-default add-to-cart overlayLink" value="1"><i class="fa fa-shopping-cart"></i>Add to cart</a>

									<p>
										<?php
										if(($books[0]['Stock'])>0){echo 'In Stock';}
										else{echo 'Out of Stock';}
										?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="<?php echo base_url("/images/home/product2.jpg");?>" alt="" />
									<h2>$<?php echo($books[1]['Price']);?></h2>
									<p>Available Copies : <?php echo($books[1]['Stock']);?></p>
									<a href="<?php echo base_url();?>" class="btn btn-default add-to-cart overlayLink" value="2"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									<p>
										<?php
										if(($books[1]['Stock'])>0){echo 'In Stock';}
										else{echo 'Out of Stock';}
										?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="<?php echo base_url("/images/home/product3.jpg");?>" alt="" />
									<h2>$<?php echo($books[2]['Price']);?></h2>
									<p>Available Copies : <?php echo($books[2]['Stock']);?></p>
									<a href="<?php echo base_url();?>" class="btn btn-default add-to-cart overlayLink" value="3"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									<p>
										<?php
										if(($books[2]['Stock'])>0){echo 'In Stock';}
										else{echo 'Out of Stock';}
										?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="<?php echo base_url("/images/home/product4.jpg");?>" alt="" />
									<h2>$<?php echo($books[3]['Price']);?></h2>
									<p>Available Copies : <?php echo($books[3]['Stock']);?></p>
									<a href="<?php echo base_url();?>" class="btn btn-default add-to-cart overlayLink" value="4"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									<p>
										<?php
										if(($books[3]['Stock'])>0){echo 'In Stock';}
										else{echo 'Out of Stock';}
										?>
									</p>
								</div>
								<img src="<?php echo base_url("/images/home/new.png");?>" class="new" alt="" />
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="<?php echo base_url("/images/home/product5.jpg");?>" alt="" />
									<h2>$<?php echo($books[4]['Price']);?></h2>
									<p>Available Copies : <?php echo($books[4]['Stock']);?></p>
									<a href="<?php echo base_url();?>" class="btn btn-default add-to-cart overlayLink" value="5"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									<p><?php
										if(($books[4]['Stock'])>0){echo 'In Stock';}
										else{echo 'Out of Stock';}
										?>
									</p>
								</div>
								<img src="<?php echo base_url("/images/home/sale.png");?>" class="new" alt="" />
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="<?php echo base_url("/images/home/product6.jpg");?>" alt="" />
									<h2>$<?php echo($books[5]['Price']);?></h2>
									<p>Available Copies : <?php echo($books[5]['Stock']);?></p>
									<a href="<?php echo base_url();?>" class="btn btn-default add-to-cart overlayLink" value="6"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									<p>
										<?php
										if(($books[5]['Stock'])>0){echo 'In Stock';}
										else{echo 'Out of Stock';}
										?>
									</p>
								</div>
							</div>
						</div>
					</div>

				</div><!--features_items-->




			</div>
		</div>
	</div>
</section>


