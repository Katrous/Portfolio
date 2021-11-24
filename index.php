<?php

// server side validation
    $error = "";
    $phpError = "";
    $successMessage = "";
if($_POST) {
    
    if (!$_POST['name']) {
        $error .= "Your name is required. <br>";
    }
        if (!$_POST['email']) {
        $error .= "Your email address is required. <br>";
    }
          if (!$_POST['email-body']) {
        $error .= "Your content is required. <br>";
    }
    
    if($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        $error .= "The email address is invalid. <br>";
    }
    
    if ($error != "") {
        $phpError = $error;
    } else {
        $emailTo = "richardslaura24@gmail.com";
        $subject = "Portfolio Email";
        $content = $_POST['email-body'] . "From: " . $_POST['name'] ;
        $headers = "FROM: ". $_POST['email'];
        
        if(mail($emailTo, $subject, $content, $headers)) {
            $successMessage =  "Your message was sent! I'll get back to you ASAP!";
        } else {
            $phpError = "Your message couldnt be sent - please try again later.";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Dev: Laura</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="icon" href="assets\images\LargeLrLogoSvg.svg" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@700&display=swap" rel="stylesheet"> 
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://kit.fontawesome.com/4f8be11c15.js" crossorigin="anonymous"></script>

</head>
<body>

    <header class="header">
        <div class="container flex container header-container">
            <div class="navbrand">
                <a href="index.php"><img src="assets\images\LrLogoSvg.svg" alt=""></a>
            </div>
            <nav class="nav">
                <ul class="navList flex nav-menu"> 
                    <li class="navItem nav-item"><a class='navA active' href="index.php">Home </a></li>
                    <li class="navItem nav-item"><a class='navA active' href="#about">About Me </a></li>
                    <li class="navItem nav-item"><a class='navA active' href="#projects">Projects </a></li>
                    <li class="navItem nav-item"> <a class='navA active' href='#contact'> Contact Me </a></li>
                    <li class="navItem nav-item"> <a class='navA active'href="resume.pdf"> Resume </a></li>
                </ul>

                <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            </nav>
          
        </div>
    </header>

        <div class="header-main flex">
            <div class="headings">
                <h1>Hi, I'm Laura</h1>
                <h3>A Web Developer</h3> 
                <a href="#contact">
                    <button class="contactButton">
                        Contact Me
                    </button>    
                </a>
                <div class="links">
                   <a href="https://github.com/Katrous?tab=repositories"><i class="fab fa-github"></i></a>
                   <a href="https://www.linkedin.com/in/laura-richards-4562aa226/"><i class="fab fa-linkedin-in"></i></a>
               </div>
            </div>
        </div>
    
    

    <main>

    <div class='wrapper'>

        <section id='about' class="container about-me">
            <h2 class="sectionTitle-text">About Me</h2>
            <div id="d3-container">
               <h3 class='d3Graph-header'>Experience In Languages/Technologies I Know</h3>
           </div>

           <div class='d3Graph-header'>

                <!-- <div class="picture-container">
                    <img src="" alt="face picture">
                </div>               -->
                <div class='about-met-text'>
                    <p>
                        Hey There! Im a web developer based in perth with a passion to learn new languages and skills.
                    </p>
                    <p>
                        I've got an interest in frontend and backend development. I enjoy building things from scratch and really understanding my code and the theory behind each line.
                    </p> 
                </div>

               <div class="list-wrap">
                   <label class='Language-cell' for="">Languages I Speak</label>
                   <ul class='lang-list'>
                       <li>CSS3</li>
                       <li>SCSS</li>
                       <li>Javascript</li>
                       <li>PHP</li>
                       <li>Node.js</li>
                   </ul>
                   <label class='dev-cell' for="">Developer Tools</label>
                   <ul class='dev-list'>
                       <li>Github</li>
                       <li>Terminal</li>
                       <li>Bootstrap</li>
                       <li>Jquery</li>
                       <li>Express</li>
                   </ul>

                   <!-- <p>Langauges I speak: CSS3, HTML5, Javascript, PHP, Node.js</p>
                   <p>Developer Tools: Github, Terminal, Bootstrap, Jquery, Express</p> -->
               </div>

               <div class="links links-about">
                   <a href="https://github.com/Katrous?tab=repositories"><i class="fab fa-github-square"></i></a>
                   <a href="https://www.linkedin.com/in/laura-richards-4562aa226/"><i class="fab fa-linkedin"></i></a>
               </div>
          

           </div>
           </section>

           
           
        <section class="projectContainer container grey-container"  id='projects'>
            <div class="container sectionTitle">
                <h2>Projects</h2>
            </div>

            <div class="grid desktop container photoGrid">
                <div class="project" class="project-img">
                    <a href="Demo/index.php">
                        <div class='project-span brown'>
                           <div class="project-span-text">
                            <h3>Swirlfeed</h3>
                            <p>A fully functional social media website. Created using Object Orientated Programming (OOP) the site
                                uses AJAX to load more content to avoid unnecessary refreshes.
                            </p>
                            <p>Langauges Used: PHP, CSS3, Javascript, Jquery, HTML5</p>
                           </div>
                        </div>
                        <img src="assets/images/swirlfeed-thumbnail.PNG" id='project-frame' class='project-img' onmouseover="this.className='blur';" onmouseout="this.className='';">
                    </a>
                </div>
 
                <div class="project" class="project-img">
                    <a href="Blog Project/index.html">
                        <div class='project-span grey'>
                           <div class="project-span-text">
                            <h3>Englighten</h3>
                            <p>A fully responsive frontend of a travel blog created using bootstrap</p>
                            <p>Langauges Used: HTML5, CSS3, Javascript, Bootstrap</p>
                           </div>
                        </div>
                        <img src="assets/images/nodeBlog-thumbnail.PNG" id='project-frame' class='project-img' onmouseover="this.className='blur';" onmouseout="this.className='';">
                    </a>
                </div>

                <div class="project" class="project-img">
                    <a href="hotel-del-luna/index.html">
                        <div class='project-span grey'>
                           <div class="project-span-text">
                            <h3>Hotel Del-Luna</h3>
                            <p>A fully responsive, animated site using advanced css technics. Layout was created using the modern practice 
                                of using CSS Grid and CSS Flexbox together. Css Grid for layout and flexbox for alignments.
                            </p>
                            <p>Langauges Used: HTML5, CSS3</p>
                           </div>
                        </div>
                        <img src="assets/images/hotel-del-luna-thumbnail.PNG" id='project-frame' class='project-img' onmouseover="this.className='blur';" onmouseout="this.className='';">
                    </a>
                </div>

                <div class="project" class="project-img">
                    <a href="DrinkingGame/index1.html">
                        <div class='project-span brown'>
                           <div class="project-span-text">
                            <h3>Truth Or Drink</h3>
                            <p>A fully functional drinking game built using pure javascript. This game was created using Javascript modules/immediately invoking functions(IIFEs) . Simply enter in the name of every player who wants to join,
                                click Play Game, and youll have endless hours of fun!.
                            </p>
                            <p>Langauges Used: HTML5, CSS3, Javascript</p>
                           </div>
                        </div>
                        <img src="assets/images/drinkingGame-thumbnail.PNG" id='project-frame' class='project-img' onmouseover="this.className='blur';" onmouseout="this.className='';">
                    </a>
                </div>

               
                <div class="project" class="project-img">
                    <a href="starter/index.html">
                        <div class='project-span brown'>
                           <div class="project-span-text">
                            <h3>Natours</h3>
                            <p>A fully responsive, animated site using advanced sass technics. All animations were done in pure scss/css</p>
                            <p>Langauges Used: HTML5, CSS3, SASS, NPM</p>
                           </div>
                        </div>
                        <img src="assets/images/natours-thumbnail.PNG" id='project-frame' class='project-img' onmouseover="this.className='blur';" onmouseout="this.className='';">
                    </a>
                </div>

                <div class="project" class="project-img">
                    <a href="https://web.brickin-it.screencraft.net.au/">
                        <div class='project-span grey'>
                           <div class="project-span-text">
                            <h3>Brickin-It</h3>
                            <p>A fully responsive, functional blog built for a client. The project was done by me and 3 other developers with my role being the primary/lead backend developer and a core front end developer. </p>
                            <p>Langauges Used: HTML5, CSS3, Foundation, Wordpress, PHP</p>
                           </div>
                        </div>
                        <img src="assets/images/brickin-it-thumbnail.PNG" id='project-frame' class='project-img' onmouseover="this.className='blur';" onmouseout="this.className='';">
                    </a>
                </div>
            </div>

            <div class="grid photoGrid tablet">
                <div class="row">
                    <div class="project-tablet"> 
                        <div class="img-container-tablet">
                        <a href="Demo/index.php">
                                <img src="assets/images/swirlfeed-thumbnail.PNG" id='project-frame' class='project-img-tablet'>
                            </a>
                        </div>
                        <div class="project-text">
                        <h3>Swirlfeed</h3>
                            <p>A fully functional social media website. Created using Object Orientated Programming (OOP) the site
                                uses AJAX to load more content to avoid unnecessary refreshes. </p>
                            <p>Langauges Used: PHP, CSS3, Javascript, Jquery, HTML5</p>
                        </div>
                    </div>  
                </div>
               
                <div class="row">
                    <div class="project-tablet"> 
                        <div class="img-container-tablet">
                        <a href="Blog Project/index.html">
                                <img src="assets/images/nodeBlog-thumbnail.PNG" id='project-frame' class='project-img-tablet'>
                            </a>
                        </div>
                        <div class="project-text">
                            <h3>Englighten</h3>
                            <p>A fully responsive frontend of a travel blog created using bootstrap</p>
                            <p>Langauges Used: HTML5, CSS3, Javascript, Bootstrap</p>
                        </div>
                    </div>  
                </div>

                <div class="row">
                    <div class="project-tablet"> 
                        <div class="img-container-tablet">
                        <a href="hotel-del-luna/index.html">
                                <img src="assets/images/hotel-del-luna-thumbnail.PNG" id='project-frame' class='project-img-tablet'>
                            </a>
                        </div>
                        <div class="project-text">
                            <h3>Hotel Del-Luna</h3>
                            <p>A fully responsive, animated site using advanced css technics. Layout was created using the modern practice 
                                of using CSS Grid and CSS Flexbox together. Css Grid for layout and flexbox for alignments.
                            </p>
                            <p>Langauges Used: HTML5, CSS3</p>
                        </div>
                    </div>  
                </div>

                <div class="row">
                    <div class="project-tablet"> 
                        <div class="img-container-tablet">
                        <a href="DrinkingGame/index1.html">
                                <img src="assets/images/drinkingGame-thumbnail.PNG" id='project-frame' class='project-img-tablet'>
                            </a>
                        </div>
                        <div class="project-text">
                        <h3>Truth Or Drink</h3>
                            <p>A fully functional drinking game built using pure javascript. This game was created using Javascript modules/immediately invoking functions(IIFEs) . Simply enter in the name of every player who wants to join,
                                click Play Game, and youll have endless hours of fun!.
                            </p>
                            <p>Langauges Used: HTML5, CSS3, Javascript</p>
                        </div>
                    </div>  
                </div>

                <div class="row">
                    <div class="project-tablet"> 
                        <div class="img-container-tablet">
                            <a href="starter/index.html">
                                <img src="assets/images/natours-thumbnail.PNG" id='project-frame' class='project-img-tablet'>
                            </a>
                        </div>
                        <div class="project-text">
                        <h3>Natours</h3>
                            <p>A fully responsive, animated site using advanced sass technics. All animations were done in pure scss/css</p>
                            <p>Langauges Used: HTML5, CSS3, SASS, NPM</p>
                        </div>
                    </div>  
                </div>

                <div class="row">
                    <div class="project-tablet"> 
                        <div class="img-container-tablet">
                            <a href="https://web.brickin-it.screencraft.net.au/">
                                <img src="assets/images/brickin-it-thumbnail.PNG"  id='project-frame' class='project-img-tablet'>
                            </a>
                        </div>
                        <div class="project-text">
                        <h3>Brickin-It</h3>
                        <p>A fully responsive, functional blog built for a client. The project was done by me and 3 other developers with my role being the primary/lead backend developer and a core front end developer. </p>
                            <p>Langauges Used: HTML5, CSS3, Foundation, Wordpress, PHP</p>
                        </div>
                    </div>  
                </div>


                
           
            </div>

       
        </section>

        <section id='contact' class="contactsection">
            <div class="contactContainer" id="contact">
                <h1>Get In Touch</h1>
                
                <div id='error'>
                    <?php echo $phpError. $successMessage; ?>
                </div>
    
                <form action="" method="POST">
                    <label for="">Your Name</label>
                    <input type="text" name='name' id='name'>
                    <label for="">Your Email Address</label>
                    <input type="email" name='email' id='email'>
                    <label for="">Let Me Know What You Need</label>
                    <textarea cols="30" rows="10" id='emailContent' name='email-body'></textarea>
    
                    <input type="submit">
                </form>
            </div>
           
        </section>
    </div>
    </main>

    
     <script src="assets/js/index.js"></script>
      <script src="assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <script>
        $("form").submit(function(e){
            var error = "";
            
            if($("#name").val() == "") {
                error+= "<p> Please enter your name. </p>";
            }
            
             if($("#email").val() == "") {
                error+= "<p> Please enter your email address so I can get back to you. </p>";
            }
             
            if($("#emailContent").val() == "") {
                error+= "<p> Please let me know what you need. The content field is required. </p>";
            }
            
            if(error != "") {
            $('#error').html(error);
            
            return false;
            } else {
              return true;
            }
        });
    </script>
    
</body>
</html>