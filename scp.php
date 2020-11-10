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
					<li><a href="json.php">JSON</a></li>
				</ul>
			</nav>

		<!-- Content -->
		       
		<?php
		
		              if(isset($_GET['scp']))
		              {
		                 
		                $item = trim($_GET['scp'], "'");
                        
                        // run sql query based on our $pg value
                        $record = $connection->query("select * from subjects where item='$item'") or die($connection->error());
                        
                        $single = $record->fetch_assoc();
                        
                        // create variables to hold all our field names from table
                        $item = $single['item'];
                        $class = $single['class'];
                        
                        $containment = $single['containment'];
                        $description = $single['description'];
                        $image = $single['image'];
                        
                        $extra1 = $single['extra1'];
                        $extra2 = $single['extra2'];
                        $extra3 = $single['extra3'];
                        
                        $id = $single['id'];
                        $update = "update.php?update=" . $id;


		                 
		                  echo "
		                  
		                  <section id='post' class='wrapper bg-img' data-bg='{$image}'>
				            <div class='inner'>
					        <article class='box'>
						    <header>
						    <h2>SCP Item: {$item}</h2>
						    <h3>SCP Class: {$class}</h3>
						    <h3>Containment Procedures.</h3>
						    <p>{$containment}</p>
						    <h3>Subject Description.</h3>
						    <p>{$description}</p>
						    <p><a href='index.php'>RETURN to main SCP Subject page</a> | <a href='update.php?scp={$item}'>EDIT Record</a> | <a href='db.php?delete={$item}'>DELETE Record</a> </p>
						    </header> 
		                  
		                  ";
		              }
		              else
		              {
		                  echo "
		                  
		                    <section id='post' class='wrapper bg-img'>
				            <div class='inner'>
					        <article class='box'>
						    <header>
						    <h2>Error</h2>
						    <p>There has been an error reading from the system</p>
						    <p><a href='index.php'>Return to main SCP Subject page</a></p>
						    </header> 
						
						";
		              }
              
              ?>
			
						<footer>
							<ul class="actions">
								<li><a href="index.html" class="button alt icon fa-chevron-left"><span class="label">Previous</span></a></li>
								<li><a href="page_2.html" class="button alt icon fa-chevron-right"><span class="label">Next</span></a></li>
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