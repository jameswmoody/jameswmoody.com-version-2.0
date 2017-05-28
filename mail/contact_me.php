<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>James W Moody</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="stylesheets/main.css">
  <script src="javascript/script.js"></script>
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">&#60;JamesWMoody&#62;</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a class="nav-link border-one" href="http://jameswmoody.com/">HOME<span class="sr-only">(current)</span></a></li>
          <li><a class="nav-link border-two" href="/webdev/">WEBDEV</a></li>
          <li><a class="nav-link border-three" href="/voiceover/">VOICEOVER</a></li>
          <li><a class="nav-link border-four" href="/travel/">TRAVEL</a></li>
          <li><a class="nav-link border-five" href="#contact">CONTACT</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FIND ME <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="dropdown-header">SOCIAL</li>
              <li><a href="https://www.facebook.com/jwmradio">Facebook</a></li>
              <li><a href="http://instagram.com/jwm___">Instagram</a></li>
              <li><a href="https://www.linkedin.com/in/moodyjames">LinkedIn</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">DEV STUFF</li>
              <li><a href="https://github.com/jameswmoody">GitHub</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

<?php

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  function IsInjected($str)
  {
    $injections = array('(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
        );

    $inject = join('|', $injections);
    $inject = "/$inject/i";

    if(preg_match($inject,$str)) {
          return true;
      } else {
          return false;
      }
  }

  if(IsInjected($visitor_email)) {
      echo "Bad email value!";
      exit;
  }

    $email_from = 'james@jameswmoody.com';
    $email_subject = "New Form submission";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $visitor_email\n\nPhone: $phone\n\nMessage:\n$message";

    $to = "jamesmoodyradio@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
?>

    <!-- Content -->
  <div class="container content-head">
    <div class="row">
      <div class="col-md-12">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h1>Thanks!</h1>
          <p>I'll be in touch shortly.</p>
      </div>
    </div>
  </div>

    <!-- JS -->

  <script>
    var timer = setTimeout(function() {
      window.location='http://jameswmoody.com/'
    }, 3000);
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
