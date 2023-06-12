    <?php include 'header.php'; ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myrna_web_development_env_1_project</title>

    <link rel="stylesheet" href="assets/css/about.css">
    </head>

    <body>
<header class="page-header">
		<div class="container">
			<div class="header-flex">
				<div class="logo">
					<a href="index.php">
						<img src='../assets\images\starryai-0-794568397-1-0-photo.png' alt="" width="75" height="75">
					</a>
				</div>

				<div class="andres">
					<i class="fa-solid fa-bars"></i>
				</div>

				<nav>
					<ul class="header-menu">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="aboutme.php">About Me</a>
						</li>
						
					</ul>
				</nav>
			</div>
		</div>
	</header>


    <section class="banner">
    <div class="text-box">
        <h1>About Me</h1>
    </div>
    </section>

    <section class="about">
        <div class="container">
                <h2>Determination</h2>
        <div class="about-flex">
            
        <div class="left"></div>
        <div class="right">
                <p>As an online student I have to be resilient and determined. That is the key factors in success. </p>
                <br>
                <p>Adult learners face many obstacles and setbacks, such as work and family responsibilities, financial constraints, and personal challenges. But we have experiance that allows us to deal with it.</p>
        </div>        
        </div>
        </div>
    </section>

        <section class="cta">
        <div class="cta-contain">
        <div class="resources">
        <h3>Top eLearning Resources For Effective Learning Today</h3>
        <ul>
        <li>Coursera</li>
        <li>edX</li>
        <li>YouTube</li>
        <li>Lynda</li>
        <li>Udemy</li>
        <li>Alison</li>
        <li>Khan Academy</li>
        <li>MIT Open Courseware</li>
        <li>Open Culture</li>
        <li>Free Code camp</li>
        </ul>

        <a href="">Resources</a>
        </div>
        </div>
        </section>

        <section class="footer">
		<footer>
			<div class="container">
				<div class="footer-flex">
					<div class="ft-about">
						<h4>About Craft</h4>
						<br>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

						<div class="img-icons">
							<a href="">
								<img src="images/icons-removebg-preview.png" alt="" width="75" height="75">
							</a>
						</div>
					</div>

					<div class="contact">
						<h4>Contact Info</h4>
						<h6>Address </h6>
						<p>34 St.urbin, Montreal, Canada</p>
						<h6>Telephone</h6>
						<p>+1 514 678 9034</p>
						<h6>Email </h6>
						<p>info@lai.ca</p>
					</div>

					<div class="quick-links">
						<h4>Quick Links</h4>
						<ul class="links">
							<li>
								<a href="">About</a>
							</li>
							<li>
								<a href="">Terms Of Use</a>
							</li>
							<li>
								<a href="">Disclaimers</a>
							</li>
							<li>
								<a href="">Contact</a>
							</li>
						</ul>
					</div>

				</div>

			</div>

		</footer>
	</section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
        $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
        $(".page-header").addClass("has-bg");
        } else {
        $(".page-header").removeClass("has-bg");
        }
        });
        </script>
        
        </body>
        </html>
   