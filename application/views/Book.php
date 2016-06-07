<?php 
$count = 0;
foreach($carts as $cart){
	$count++;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>e-Comix</title>
	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/style.css">


</head>
<body>
	<CENTER><h1>e-Comix: The Best Exotic Comic Books Collection</h1></CENTER>

	<div id="wrapper">
		<?php $this->load->view('search');
		?>
		<div id="nav">
			<span class="welcome"> Welcome <?= $this->session->userdata['currentUser']['first_name'] ?> !</span>
			<a class="login" href="/Books/viewCart">Your Cart(<?= $count ?>)</a>
			<a class="marginleft20" href="/Login/logout">Logout</a>
<?php   	if($admin) {
?>
			<a class="marginleft20" href="admin">Admin</a>
<?php   	}
?>	
		</div>
	
		

		<div id="main">
<?php 
			foreach ($books as $book) {
?>	
				<div class="book">
					<center><a href="/Books/viewBook/<?= $book['id'] ?>"><img src="/assets/images/<?= $book['id']?>.png"></a></center>
					<center><a  class="title" href="/Books/viewBook/<?= $book['id'] ?>"><p><?= $book['title']?></a></p>
					<p class="author">by <?=  $book['author'] ?></p></center>
					<center><p class="price">Price: $<?= $book['price'] ?></p></center>
					<center><a href="/Books/addBookFromHome/<?= $book['id'] ?>"><button>Add to Cart</button></a></center>
				</div>
<?php  	
			}
?>
		</div>
	</div>
</body>
</html>

