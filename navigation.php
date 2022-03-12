<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
			<!-- to enable navigation dropdown when viewed in mobile device -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="products.php">eBag</a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <!-- highlight if $page_title has 'Products' word. -->
                <li <?php echo strpos($page_title, "Product")!==false ? "class='active'" : ""; ?>>
                    <a href="products.php">Products</a>
                </li>

                <li <?php echo $page_title=="Cart" ? "class='active'" : ""; ?> >
                    <a href="cart.php">
											    <?php
											    // count products in cart
//											    $cart_item->user_id=1; // default to user with ID "1" for now
//											    $cart_count=$cart_item->count();
											    ?>
											    Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                    </a>
                </li>
            </ul>
			
			<?php 
			// check if users / customer was logged in
			// if user was logged in, show "Edit Profile", "Orders" and "Logout" options
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_SESSION['access_level']=='Customer'){
			?>
			<ul class="nav navbar-nav navbar-right">
				<li <?php echo $page_title=="Edit Profile" ? "class='active'" : ""; ?>>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						&nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?>
						&nbsp;&nbsp;<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo $home_url; ?>logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
			<?php
			}
			 
			// if user was not logged in, show the "login" and "register" options
			else{
			?>
			<ul class="nav navbar-nav navbar-right">
				<li <?php echo $page_title=="Login" ? "class='active'" : ""; ?>>
					<a href="<?php echo $home_url; ?>login">
						<span class="glyphicon glyphicon-log-in"></span> Log In
					</a>
				</li>
			 
				<li <?php echo $page_title=="Register" ? "class='active'" : ""; ?>>
					<a href="<?php echo $home_url; ?>register">
						<span class="glyphicon glyphicon-check"></span> Register
					</a>
				</li>
			</ul>
			<?php
			}
			?>
        </div><!--/.nav-collapse -->

    </div>
</div>
<!-- /navbar -->
