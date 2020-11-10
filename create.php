<!DOCTYPE HTML>
<html>
	<head>
		<title>SCP Foundation by Souza_Luciano</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

	  <?php include 'db.php'; ?>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">SCP Foundation <span>by Souza_Luciano</span></a></div>
				<a href="#menu"><span>Menu</span></a>
				
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
						<!--loop thru table to retrieve pg names that will serve as our menu-->
                  <?php foreach($record as $menu): ?>
                  
                    <a href="scp.php?scp='<?php echo $menu['item']; ?>'"><?php echo $menu['item']; ?></a>
                    <br>
				  <?php endforeach; ?>
					<li><a href="create.php">Create new record</a></li>
				</ul>
			</nav>


		<!-- Content -->
		
			<section id="post" class="wrapper bg-img" data-bg="SCP0013.jpg">
				<div class="inner">
					<article class="box">
						
						<div class="content">
							<form method="post" action="db.php">
							    <label>Input SCP Item Number:</label>
							    <br>
							    <input type="text" name="item" placeholder="Use this format - SCP-###">
							    <br>
							     <label>Input SCP Class:</label>
							    <br>
							    <input type="text" name="class" placeholder="Euclid, Safe, Keter">
							    <br>
							     <label>Containment:</label>
							    <br>
							    <input type="text" name="containment" placeholder="SCP Containment">
							    <br>
							     <label>Description:</label>
							    <br>
							    <input type="text" name="description" placeholder="SCP description">
							    <br>
							     <label>Image:</label>
							    <br>
							    <input type="text" name="image" placeholder=" SCP image">
							    <br>
							     <label>Extra 1:</label>
							    <br>
							    <input type="text" name="Extra 1" placeholder="SCP extra 1">
							    <br>
							     <label>Extra 2:</label>
							    <br>
							    <input type="text" name="Extra 2" placeholder="SCP Extra 2">
							    <br>
							    <label>Extra 3:</label>
							    <br>
							    <input type="text" name="Extra 3" placeholder="SCP Extra 3">
							    <br>
							    
							    
							    <input type="submit" name="submit">
							</form>
							
							
						</div>
						<footer>
							<ul class="actions">
								<li><a href="page_1.html" class="button alt icon fa-chevron-left"><span class="label">Previous</span></a></li>
								<li><a href="page_3.html" class="button alt icon fa-chevron-right"><span class="label">Next</span></a></li>
							</ul>
						</footer>
					</article>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h2>Contact Us</h2>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<ul class="icons">
						<li><a href="https://twitter.com/" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/?hl=pt" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>