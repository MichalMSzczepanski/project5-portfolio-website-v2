<?php

// testing form contents
// print_r($_POST);

//script to show error instead of server issue (error 500)
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//set default message status - otherwise it'll send each reload 
$message_sent= false;
$invalid_name_message = '';
$invalid_email_message = '';

//check if email is supplied & not empty
if(filter_has_var(INPUT_POST, 'submit')){
  
// get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$topic = $_POST['topic'];

//check required name and email

if(!empty($name)){
  if(!empty($email)){

$to = "michal.m.szczepanski@gmail.com";
$body = "";

$body .= "From: " . $name . "\r\n";
$body .= "Email: " . $email . "\r\n";
$body .= "Topic: " . $topic . "\r\n";
$body .= "Message: " . $message . "\r\n";

$headers = "MIME-Versions: 1.0" . "\r\n";
$headers .= "Content-Type: text/html;charset=UTF-8" . "\r\n";

$headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

mail($to, "email from $name", $body);

$message_sent= true;
        
      } else {      
      $invalid_email_message = 'Please provide a valid email';
      }

      } else {      
      $invalid_name_message = 'Please provide your name';
      }
    }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="marketing and software developer portftolio of michal szczepanski"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta
      name="keywords"
      content="marketing, strategy, b2b, software development"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <title>michal szczepanski portfolio</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon_io/favicon-32x32.png"/>
   
  </head>

  <body>
    <nav id="home">
      <div class="container">
        <div class="logo">mike's site</div>
        <a href="#contact" class="btn-black">get in touch</a>
        <div class="social">
          <a
            href="https://www.linkedin.com/in/szczepanskimichal/"
            class="icon-black"
            target="_blank"
          >
            <i class="fab fa-linkedin-in fa-lg"></i>
          </a>

          <a
            href="https://github.com/MichalMSzczepanski"
            class="icon-black"
            target="_blank"
          >
            <i class="fab fa-github fa-lg"></i>
          </a>

          <a
            href="https://twitter.com/mm_szczepanski?lang=en"
            class="icon-black"
            target="_blank"
          >
            <i class="fab fa-twitter fa-lg"></i>
          </a>

          <a
            href="https://unsplash.com/@mm_szczepanski"
            class="icon-black"
            target="_blank"
          >
            <i class="fas fa-camera fa-lg"></i>
          </a>
        </div>
      </div>
    </nav>

    <section id="first-view" class="first-view">
      <div class="container">
        <div class="intro-content">
          <h2>Hi Stranger</h2>
          <p>
            Glad you're here. I don't get many vistors, so you're already
            special. Since you're here you'd probably like to get to know me a
            little. <br /> <br />
            So, I'm a communications strategist leaning towards product
            management and development. You can take a general look and also vet
            what I've been up to the last few years:
          </p>

          <div class="first-view-buttons">
            <a href="#overview" class="btn-black">overview</a>
            <a href="#freeport-metrics" class="btn-black">work</a>
          </div>
        </div>
        <div class="intro-image">
          <div class="intro-image-mask">
            <img src="images/hero.png" alt="michal szczepanski" />
          </div>
        </div>
      </div>
    </section>

    <section id="overview" class="overview">
      <div class="container">
        <div class="overview-contents">
          <h2>8</h2>
          <p class="headline">
            This i how many years I've spent on exploring marketing roles. From
            copywriter, through account manager to strategist roles. Both on
            agency and client side, working for mid-market brands.
          </p>
          <div class="overview-icons">
            <div class="icon">
              <i
                class="fab fa-google fa-2x"
                title="Google bundle - analyitcs, ads, tag manager, keyword planner and so on."
              ></i>
            </div>
            <div class="icon">
              <i
                class="fas fa-funnel-dollar fa-2x"
                title="Creating consumer journeys/ sales funnels that actually end up with a quantative goal."
              ></i>
            </div>
            <div class="icon">
              <i
                class="fas fa-ad fa-2x"
                title="Performance marketing from scratch - usually without paid traffic it's hard to strike deals."
              ></i>
            </div>
            <div class="icon">
              <i
                class="fas fa-poll fa-2x"
                title="Without analyzing your projects, what worked and where I failed I wouldn't be much help."
              ></i>
            </div>
            <div class="icon">
              <i
                class="fas fa-lightbulb fa-2x"
                title="Working on insights takes up 30% of my time. From time to time."
              ></i>
            </div>
            <div class="icon">
              <i
                class="fas fa-bullseye fa-2x"
                title="Lastly I work with goals and with specific projects. Not just 'ongoing' marketing BS."
              ></i>
            </div>
          </div>
        </div>
        <div class="overview-contents">
          <h2>.25</h2>
          <p class="headline">
            This will most likely not surprise you, but I'm just starting my
            adventure with programming. I prefer when projects/ products work
            rather than just look nice - so a back-end approach seems right.
          </p>
          <div class="overview-icons">
            <div class="icon">
              <i
                class="fab fa-git fa-2x"
                title="Git as a starter, working with github on a daily basis."
              ></i>
            </div>
            <div class="icon">
              <i
                class="fab fa-html5 fa-2x"
                title="This is literally my first published website. And my 4th html project in general. (self hi-five)"
              ></i>
            </div>
            <div class="icon">
              <i
                class="fab fa-css3-alt fa-2x"
                title="So yeah, css3 including flexbox and working with grid. Yipee."
              ></i>
            </div>
            <div class="icon">
              <i
                class="fab fa-sass fa-2x"
                title="It turned out Sass makes life easier."
              ></i>
            </div>
            <div class="icon">
              <i
                class="fab fa-bootstrap fa-2x"
                title="Bootstrap also made life easier but I'm just kicking it off."
              ></i>
            </div>
            <div class="icon">
              <i
                class="fab fa-php fa-2x"
                title="I had to learn a little PHP to make this page work"
              ></i>
            </div>
          </div>
        </div>
      </section>

      <section id="freeport-metrics" class="freeport-metrics">
        <div class="container">
          <div class="freeport-metrics-contents">
            <h2>Freeport Metrics</h2>
            <br>
            <div class="content-body">
            <p>
              Lead generation for a B2B software company creating digital
              solutions for HealthTech, Fintech & AgTech software companies in
              the US. Stationed in Warsaw, Poland.
            </p>
            <br />
            <p>
              Sounds hard and it is.
              <strong>B2B works mainly on recommendations</strong>, and
              performance marketing has to be very detailed and specific and for
              a certain client avatar.
            </p>
            <br />
            <p class="hashtags">
              <strong
                >#SEAStrategy #ConsumerJourney #SalesFunnels
                #MarketingAutomation #EmailMarketing #ContentMarketing
                #PerformanceMarketing
                <a href="https://clutch.co/profile/freeport-metrics">#Clutch</a>
                <a href="https: //dribbble.com/FreeportMetrics">#Dribbble</a>
                <a href="https://www.behance.net/freeportmetrics">#Behance</a>
              </strong>
            </p>
          </div>
        </div>
        <div class="freeport-metrics-gallery">
          <div class="image1">
            <img src="images/fm1.png">
          </div>
          <div class="image2">
            <img src="images/fm2.png">
          </div>
          <div class="image3">
            <img src="images/fm2.png">
          </div>
          <div class="image4">
            <img src="images/fm4.png">
          </div>
          <ul class="example-websites">
            <li><a href="https://freeportmetrics.com/" target="_blank">WWW</a></li>
            <li><a href="https://campaigns.freeportmetrics.com/custom-software-development-for-software-companies/" target="_blank">LP1</a></li>
            <li><a href="https://healthtech.freeportmetrics.com/saving-healthtech-digital-products/" target="_blank">LP2</a></li>
            <li><a href="https://healthtech.freeportmetrics.com/18-software-products-killers/" target="_blank">LP3</a></li>
          </ul>
        </div>
        </div>
      </section>
   
      <section id="agency" class="agency">
        <div class="container">
          <div class="agency-contents">
            <h2>Client Portfolio</h2>
            <br>
            <div class="content-body">
              <p>Working as a strategist or account manager at Cape Morris, Kalicińscy.com, K2Media & MSLGroup it was a great pleasure to work with multiple brands.</p>
            <br>
            <p>(mostly B2C campaigns with a digital landscape)</p>
            <br>
            <p class="hashtags"><strong>#CommunicationStrategy #DigitalTouchPoints #BrandManagement #CreativeDirection #Copywriting #NewBusinessDevelopment</strong></p>
          </div>
        </div>
        <div class="agency-gallery">
          <div class="image1-agency">
            <img src="images/ag1.png">
          </div>
          <div class="image2-agency">
            <img src="images/ag2.png">
          </div>
          <div class="image3-agency">
            <img src="images/ag3.png">
          </div>
          <div class="image4-agency">
            <img src="images/ag4.png">
          </div>
          <div class="image5-agency">
            <img src="images/ag5.png">
          </div>
        </div>
        </div>
      </section>

      <div id="contact" class="contact">
        <div class="container">
            <div class="contact-content">
                <p>You've got this far, so maybe you'd want to get in touch. Cool.</p>
                <br>
                <p>You can reach out to me via <a href="https://www.linkedin.com/in/szczepanskimichal/" target="_blank">LinkedIn</a>, <a href="mailto:michal.m.szczepanski@gmail.com">email</a> or the form on this site.</p>
                <br>
                <p class="font-weight-bold"><strong>I'll do my best to answer in a giffy.</strong> </p>
             </div>
            <form method="post" action=#TYP>
            

              <?php
                if($message_sent):
              ?>

              <h3 id="TYP">Thank you for reaching out. <br> I'll be in touch as soon as possible.</h3>

              <?php
              else:
              ?>

              <?php if($invalid_name_message != ''): ?>
                <div class="alert alert-danger">
                  <?php echo $invalid_name_message; ?>
                </div>
              <?php endif; ?>

              <?php if($invalid_email_message != ''): ?>
                <div class="alert alert-danger">
                  <?php echo $invalid_email_message; ?>
                </div>
              <?php endif; ?>

              <label for="name">your name*</label>
              <input type="text" id="name" name="name" placeholder= "name..."> 
              <label for="email">your email*</label>
              <input type="email" id="email" name="email" placeholder="email..." >
              <label for="message">drop a message if needed</label>
              <textarea id="message" name="message" placeholder="type here..."></textarea>
              <label for="topic">anything specific on your mind?</label>
              <select id="topic" name="topic">
                <option value="software">software communications</option>
                <option value="brand">brand communnication</option>
                <option value="product">product management</option>
                <option value="front-end">front-end design</option>
              </select>
              <button type="submit" name="submit" >submit</button>

              <?php
              endif;
              ?>

            </form>
        </div>
      </div>

      <footer>
        <div class="container">
          <div class="footer">
            <div class="footer-left">
              <a href="#home">up up and away!</a>
            </div>
            <div class="footer-center">
              <ul class="social">
                <li>
                  <a href="https://www.linkedin.com/in/szczepanskimichal/" target="_blank">
                    <i class="fab fa-linkedin-in fa-lg"></i>
                  </a>
                </li>
                <li>
                  <a href="https://github.com/MichalMSzczepanski" target="_blank">
                    <i class="fab fa-github fa-lg"></i>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/mm_szczepanski?lang=en" target="_blank">
                    <i class="fab fa-twitter fa-lg"></i>
                  </a>
                </li>
                <li>
                  <a href="https://unsplash.com/@mm_szczepanski" target="_blank">
                    <i class="fas fa-camera fa-lg"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-right">
              <a href="mailto:michal.m.szczepanski@gmail.com">michal.m.szczepanski@gmail.com</a>
            </div>
          </div>
        </div>
        </div>
      </footer>

  </body>
</html>
