<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>OSAIPL - Coimbatore | Tirupur | Hyderabad - Best JAVA, PHP, AngularJS, Selenium, Web Designing Training institute in Coimbatore, Tirupur</title>
<meta name="description" content="Open Source Software Training, Placements, Courses, Training Institute" />
<meta name="keywords" content="Open Source Academy, Software Training, Java Training, PHP Training" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<!-- Custom Style sheet Link -->
<link rel="stylesheet" type="text/css" href="css/osaipl-min.css"/>
<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet"> 



</head>
<body>
 <div class="main-content">
<header>

<nav class="navbar navbar-light">
  <div class="container-fluid">
  <div class="col-sm-4">
	<div class="logo"> <!-- logo here -->
    <div class="navbar-header" >

<a href="#"><img src="img/logo-osaipl.png" alt="Open Source Academy" class="img-responsive"/></a></div>
     </div><!-- logo close -->
</div>
<div class="col-sm-8">
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="http://osaipl.com/">Home</a></li>
      <li><a href="about-open-source-academy.html">About Us</a></li>
      <li><a href="Training-programs.html">Courses</a></li>
      <li ><a href="our-training-reviews.html">Testimonials</a></li>
      <li><a href="contact-us.html">Contact Us</a></li>
<li>
<a class="btn btn-primary" href="tel:+91-97870-12121" style="padding:10px;background-color:#02D1BF">
 <span class="glyphicon glyphicon-earphone" style="padding-left:5px; padding-right:10px;"></span>97870-12121
</a>


</li>
    </ul>
    </div>
  </div>
</nav>
</header>

<div class="container">
<div class="row">
<div class="col-sm-12"><!-- col-sm-12 starts here -->
<div class="com-page-content">
<h1>What our Students Say</h1>
<p>We appreciate all our customers to for writing a review, below is some of our reviews from Google and Facebook.</p>
<p><a class="btn btn-warning" role="button"  id="btns" href="https://www.google.co.in/search?q=open+source+academy+india+pvt+ltd" target="_blank">Write about Us</a></button></p>
</div>
</div>
</div><!-- col-sm-12 Ends here -->
</div>
</div><!-- Common page - top content ends here -->

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "hari@osaipl.com";
    $email_subject = "Submission from - Contact form Osaipl.com - Footer";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['mobile']) ||
        !isset($_POST['course'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $last_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['mobile']; // not required
    $comments = $_POST['course']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
  
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Lead Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Mobile: ".clean_string($telephone)."\n";
    $email_message .= "Course: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 <script>
alert("Thank you for contacting us. We will be in touch with you very soon.");
window.location = "http://www.osaipl.com";
 </script>
<?php
 
}
?>

<div class="foot"><!-- Footer Begins here -->

<footer>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<h3>Lets Get ready for a Job / Promotion </h3>
<h4>Just drop your details below</h4>
<p>One of our Career Advisor will call you back</p>
<form class="form-inline" action="send-us.php" method="POST" >

<input type="text" placeholder="Your Name" class="form-control" id="name" name='name' required />
<input type="email" placeholder="Your Email id" class="form-control" id="Email" name="email" required />
<input type="text" placeholder="Your Mobile No." class="form-control" id="Mobile" name="mobile" required />
<input type="text" class="form-control" id="email" placeholder="Course required" name='course' required>
<button type="submit" class="btn btn-success">Submit</button>
</form>

</div>
<div class="col-sm-4">
<h3> Coimbatore </h3>
<p>
Open Source Academy India Pvt Ltd,<br/>
No.134, 4th Street, Cross Cut Road <br/>
Gandhipuram, Coimbatore - 12 <br/>
<a  href="mailto:info@osaipl.com" >
 <span class="glyphicon glyphicon-envelope" style="padding-left:5px; padding-right:10px;"></span>info@osaipl.com
</a><br/>
<a class="btn btn-success" href="tel:+91-97870-12121" >
 <span class="glyphicon glyphicon-earphone" style="padding-left:5px; padding-right:10px;"></span>97870-12121
</a>

</p>
</div>
<div class="col-sm-4">
<h3> Tirupur </h3>
<p>
Open Source Academy Tirupur,<br/>
Near Sleek Showroom, Pushpa Theatre Stop <br/>
Odakadu, Tirupur - 2 <br/>
<a  href="mailto:rafi@osaipl.com" >
 <span class="glyphicon glyphicon-envelope" style="padding-left:5px; padding-right:10px;"></span>info.trp@osaipl.com
</a><br/>
<a class="btn btn-success" href="tel:+91-97874-12121" >
 <span class="glyphicon glyphicon-earphone" style="padding-left:5px; padding-right:10px;"></span>97874-12121
</a>

</p>
</div>
<div class="col-sm-4">
<h3> Locate Us</h3>
<p>
<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d125320.57171541592!2d76.89777843864374!3d11.01851796868856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ba8585430bf8e75%3A0xb5e05c66ba107fea!2sopen+source+academy!3m2!1d11.018526!2d76.96781899999999!5e0!3m2!1sta!2sin!4v1503391439823" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe><br/>
</p>
</div>

</div>
</div>
</div>
<div class="fot-b">
<div class="container">
<h1>Open Source Academy India  Pvt Ltd is a open source software training, development, research institue in coimbatore, we provide training on technologies like selenium, bootstrap, Angular JS, JAVA, PHP, Python, Machine Learning, 
Ruby on rails, Wordpress, Drupal, Cloud, AWS. We also provide online training, Onsite training.</h1>
<h1> &copy; www.osaipl.com</h1>
</div>
</div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42161684-2', 'auto');
  ga('send', 'pageview');

</script>
</html>







