<!DOCTYPE HTML>

<html>
	<head>
		<title>SCP Foundation by Souza_Luciano</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
        <?php include 'db.php'; ?>
		<!-- Header -->
			<header id="header">
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
				  <li><a href="json.php">JSON</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		
		<?php 
                    
                        // default view of index.php
                        
                        echo "
                        
                        <section id='banner' class='bg-img' data-bg='scp007.jpg'>
			        	<div class='inner'>
					   <header>
						<h1>Secure Contain Protect</h1>
						<h3>WARNING: THE FOUNDATION DATABASE IS<br><h2>CLASSIFIED</h2>
							ACCESS BY UNAUTHORIZED PERSONNEL IS STRICTLY PROHIBITED<br>
							PERPETRATORS WILL BE TRACKED, LOCATED, AND DETAINED
							
						</h3>
					</header>
				    </div>
			        </section>
                        
                        ";
              
              ?>
		
			
            
	
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