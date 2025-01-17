<?php
	include_once "lib/php/functions.php";

	$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=" .$_GET['id'])[0];

	$cart_product = cartItemById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php" ?>

	<!-- Page Title -->
	<title>Landing Page</title>
</head>
<body>
	<?php include "parts/navbar.php" ?>
	<main class="container">
		<div class="card soft">
			<h2>You Added <?= $product->name ?> To Your Cart</h2>
			<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> in your cart</p>

			<div class="display-flex">
				<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>	
				<div class="flex-stretch"></div>	
				<div class="flex-none"><a href="cart.php">Go to Cart</a></div>	
			</div>
		</div>
	</main>
	<div class="to_cart_footer">
		<?php include "parts/footer.php" ?>
	</div>
	<script src="js/main.js" type="text/javascript"></script>
</body>

</html>
