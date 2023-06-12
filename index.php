        <!DOCTYPE html>
        <html lang="en">

        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>myrna_web_development_env_1_project</title>

        <link rel="stylesheet" href="assets/css/main.css">
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
							<a href='inex.php'>Home</a>
						</li>
						<li>
							<a href='aboutme.php'>About Me</a>
						</li>
						
					</ul>
				</nav>
			</div>
		</div>
	</header>



        <section class="welcome">
            <div class="text-box">
            <h1>Building The Online Student</h1>
            </div>
        </section>


        <section class="learning">
            <div class="container">
            <h2>Learning</h2>
            <div class="learning-flex">

            <div class="left">
            <div class="image"></div>
            </div>

            <div class="right">
            <div class="info-1">
            <h2>Be Open</h2>
            <p>Be open minded about sharing life, work, and educational experiences as part of the learning process.
            Introverts as well as extroverts find that the online process requires them to utilize their
            experiences.</p>
           <br>
            <h2>Embrace Online Learning</h2>
            <p>Embrace that high quality learning can take place without going to a traditional classroom. If the
            student feels that a traditional classroom is a prerequisite to learning, they may be more comfortable
            in the traditional classroom. Online is not for everybody. </p>
            <br>
    </div>
 
            <div class="info">
            <h2>Get Active</h2>
            <ol>
            <li>Participate in the virtual classroom</li>
            <li>Be able to use the technology properly</li>
            <li>Be able to work with others</li>
            <li>Be able to meet the minimum standards</li>
            <li>Be able to complete assignments on time</li>
            <li>Enjoy communicating in writing</li>
            </ol>
            <br>
            </div>
     
            <div class="info">
            <h2>Keep In Mind</h2>
            <p>A student that wants to be on a traditional
            campus attending a traditional classroom is probably not going to be happy online. While the level of
            social interaction can be very <br>
            high in the virtual classroom given that many barriers come down in the
            online format, it is not the same as living in a dorm on a campus. This should be made known. An online
            student is expected to:</p>
            <br>
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
        </div>
        <a href="">Resources</a>
        </div>
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