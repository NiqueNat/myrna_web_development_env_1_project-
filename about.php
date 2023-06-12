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
        <a href="index.html">

    </div>

    <div class="andres">
        <i class="fa-solid fa-bars"></i>
    </div>

    <nav>
        <ul class="header-menu">
            <li>
                <a href="index.php">Welcome</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
        </ul>
    </nav>
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
		<div class="container">
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

        <a href="" class="btn">Resources</a>
        </div>
		</div>
	</section>

    <section class="footer">
		<footer>
      <h1>Thanks for stopping by.</h1>
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
    </body>
    </html>