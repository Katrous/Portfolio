<?php

// server side validation
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
        $content = $_POST['email-body'] . "<br> From: " . $_POST['name'] ;
        $headers = "FROM: ". $_POST['email'];
        
        if(mail($emailTo, $subject, $content, $headers)) {
            $successMessage =  "Your message was sent! I'll get back to you ASAP!";
        } else {
            $phpError = "Your message couldnt be sent - please try again later.";
        }
    }
}
// $errors = [];
// $errorMessage = '';

// if (!empty($_POST)) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     if (empty($name)) {
//         $errors[] = 'Name is empty';
//     }

//     if (empty($email)) {
//         $errors[] = 'Email is empty';
//     } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $errors[] = 'Email is invalid';
//     }

//     if (empty($message)) {
//         $errors[] = 'Message is empty';
//     }


//     if (empty($errors)) {
//         $toEmail = 'richardslaura24@gmail.com';
//         $emailSubject = 'New email from your contant form';
//         $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

//         $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
//         $body = join(PHP_EOL, $bodyParagraphs);

//         if (mail($toEmail, $emailSubject, $body, $headers)) {
//             header('Location: thank-you.html');
//         } else {
//             $errorMessage = 'Oops, something went wrong. Please try again later';
//         }
//     } else {
//         $allErrors = join('<br/>', $errors);
//         $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Web Development</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="icon" href="assets/images/favicon.ico" type="image/icon type">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@700&display=swap" rel="stylesheet"> 
    <script src="https://d3js.org/d3.v7.min.js"></script>
</head>
<body>

    <header class="header">
        <div class="container flex container header-container">
            <div class="navbrand">
                <a href="index.php"><img src="assets/images/favicon.ico" alt=""></a>
            </div>
            <nav class="nav">
                <ul class="navList flex"> 
                    <li class="navItem active"><a href="index.php">Home </a></li>
                    <li class="navItem"><a href="#about">About Me </a></li>
                    <li class="navItem"><a href="#projects">Projects </a></li>
                    <li class="navItem"> <a href='#contact'> Contract Me </a></li>
                </ul>
            </nav>
          
        </div>
    </header>


        <div class="header-main flex">
            <div class="headings">
                <h1>Hi, I'm Laura</h1>
                <h3>Junior Web Developer</h3> 
                <button class="contactButton">
                    Contact Me
                </button>    
            </div>
        </div>
    
    

    <main>

    <div class='wrapper'>

        <section id='about' class="container about-me">
            <h2 class="sectionTitle-text">About Me</h2>
            <h3 class='d3Graph-header'>Experience In Languages/Technologies I Know</h3>
           <div id="d3-container">

           </div>

           <div class='d3Graph-header'>
               Laura Richards
               <img src="" alt="face picture">
               <div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum nunc a sem blandit vehicula. Mauris at semper risus. Maecenas luctus eget turpis ut blandit. Nunc vitae sodales orci. Cras euismod nisi sit amet pulvinar pretium. Duis iaculis mi augue, non consequat dolor aliquam nec. Nullam vitae nisl eu nisi congue maximus eget eu nisl. Duis nec finibus nunc. Morbi fringilla, quam nec rutrum pharetra, nisi mi sagittis odio, non commodo odio ex vel urna. Sed euismod laoreet libero, vel iaculis augue eleifend quis.

                Nullam consectetur est sit amet mi semper tincidunt. Sed vehicula lectus vel urna ullamcorper molestie. Quisque sed pellentesque est, quis luctus quam. Vestibulum egestas mollis lacus, ut dapibus mauris dapibus in. Quisque eget tortor sapien. Proin iaculis lacus eget tincidunt cursus. Donec vestibulum egestas cursus. Integer nec mi convallis, sagittis orci id, consequat ex. Integer rhoncus aliquam varius. Sed eget quam eget velit sodales malesuada. In tincidunt, leo at tempor sodales, elit urna efficitur lectus, sed tempus mi mi ut massa. Cras viverra tincidunt ex, id cursus nibh imperdiet at.
               </div>

               <div>
                   I've got an interest in frontend and backend development. I enjoy building things from scratch and really understanding my code and the theory behind each line.
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
                            <p>A fully functional social media site built using PHP, MySQL, Javascript and CSS. This website was created using Object Orientated Programming (OOP).
                                It uses AJAX to load more posts when users near the bottom of a section.
                            </p>

                            <p>The site treats every postm notification and message as seperate classes and assigns them to their own table in the database.</p>
                            <span>Langauges Used: PHP, CSS3, Javascript, Jquery, HTML5</span>
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
                            <p>A fully responsive and functionial blog using bootstrap and node.js.</p>
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
                            <p>A fully responsive, animated site using advanced css technics. All animations were done in pure css. Layout was created using the modern practice 
                                of mixing CSS Grid and CSS Flexbox together. Grid for layout and flexbox for alignments.
                            </p>
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
                           </div>
                        </div>
                        <img src="assets/images/natours-thumbnail.PNG" id='project-frame' class='project-img' onmouseover="this.className='blur';" onmouseout="this.className='';">
                    </a>
                </div>

                
             
                <!-- <div class="project grey"> <img src="assets/images/project-3.PNG" alt=""></div>
                <div class="project brown"><img src="assets/images/project-4.png" alt=""></div>
                <div class="project brown"><img src="assets/images/project-5.png" alt=""></div>
                <div class="project grey"><img src="assets/images/project-6.png" alt=""></div> -->

            </div>

           

            <!-- <div class="photoGrid tablet">
                <div class="row">
                    <div class="col-1"> <img src="assets/images/project-1.PNG" alt=""></div>
                    <div class="col-2"> <img src="assets/images/project-2.PNG" alt=""></div>
                </div>
                <div class="row">
                    <div class="col-3"> <img src="assets/images/project-3.PNG" alt=""></div>
                    <div class="col-1"><img src="assets/images/project-4.png" alt=""></div>
                </div>
                <div class="row">
                    <div class="col-2"><img src="assets/images/project-5.png" alt=""></div>
                    <div class="col-3"><img src="assets/images/project-6.png" alt=""></div>
                </div> -->

               
       
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