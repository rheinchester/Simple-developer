<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Cookies</h1>
              <h2 class="subheading">How to create modify and delete them</h2>
              <span class="meta">Posted by
                <a href="#">Jacob okoro</a>
                on August 24, 2017</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
          <p>
            If you are in any of the following situations:
            <ul>
              <li> You need to know the number of times a user has visited your website</li>
              <li>You want to save a user’s preference on your website so that next time he visits your website, your services will be geared to his needs</li>
              <li>Or say, a user is undergoing an online tutorial on your website and you want to save his progress,</li>
            </ul>
            You’ll need some level of data persistence to achieve these things.
           </p>
           <p>
           <h4>Data persistence</h4>
            This occurs when data outlives the execution of the program that created it. One way to achieve this is to save the data in a file.
           </p>
            <p>
              <h4>Why do we need these things?</h4>
              Http is a stateless protocol. This means that it treats each request as a new request with no regards for previous encounters between browser and server. A good analogy here is when you have to reintroduce yourself to a person that has Alzheimers every time you meet him (if you’ve watched 50-first dates, you’ll get the point).
              Therefore http cookies is a way to achieve persistence.
            </p>
            
            <p>
              <h4> What is a cookie?</h4>
              A cookie is a text file that a server embeds on a user’s computer. Every time your computer sends a request for a page, it will send the cookie too. This cookie is how a server will identify a browser. This is how Facebook uses the “remember me” feature and keeps you logged in for several days.
            </p>
           <p>
             <h4>Implementation of cookies with PHP</h4>
              In php, you use the setcookie() function to create a cookie. Anytime someone visits your website, the cookie is saved on the person’s computer.
           </p>
           <p>
              Here’s the syntax:
              <code>setcookie(name, value, expire, path, domain, secure, httponly);</code>
           </p>
           <p>
            <h5>Let’s discuss them.</h5>
            name - it specifies the name of the cookie.<br>
            value - This sets the value of the named variable and is the content that you actually want to store. Ensure not to store sensitive info in client’s computer.<br>
            It can only be saved as a string or a number (not object or array). 
            e.g  Assuming the name is 'username', we get the value by entering $_COOKIE['username']
            expire – This is the time the cookie will expire. If this parameter is not set then cookie will automatically expire when the Web Browser is closed.<br>
            We set this parameter by using time() function + sec, where sec is the number of seconds the cookie will expire. E.g: time()+3600*24*30 will set the cookie to expire in 30 days.<br><br>
            path –This is the path on the server in which the cookie will be available. If it is set to ‘/’, the cookie will be available across the entire domain. If set to '/home/', the cookie will only be available within the /home/ directory and all sub-directories. The default value is the current directory that the cookie is being set in.<br> 
            domain- Specifies the domain name of the cookie. To make the cookie available on all subdomains of example.com then you'd set it to ".example.com". Setting it to www.example.com will make the cookie only available in the www subdomain. <br>
            security − Specifies whether or not the cookie should only be transmitted over a secure HTTPS connection. TRUE indicates that the cookie will only be set if a secure connection exists. Default is FALSE.<br>
           </p>

            Cookies can only store numbers and strings. It can’t store objects or arrays

            Note: PHP Cookie must be used before <html> tag. 
            Set cookies
            Delete cookies
            Retrieve value 
            What to store on cookies
            How to start a cookie
            Create a file named setcookie.php
            Here we create a cookie named ‘name’, with a value called ‘raheem’, that will last for 1 minute(60secs).
            <?php 
            //there are three mains arguments here
              $name = 'name'
              $time = time();
              $value =  'raheem';
              setcookie('name',$value, $time + 60);
             ?>
            Note: ensure that the setcookie(), appears before the <html>.

            Once  setcookie.php is loaded in the browser, the cookie is activated. To get the value of the cookie, create a file named view.php and do the following
            <?php
            echo $_COOKIE[$name] ;
              ?>
            Now load it in the browser. And you see
             
            If ever we wish to modify the cookie, go to setcookie.php and make your modifications. Then ensure to reload the page after making  modifications

            Delete a cookie
            To delete a cookie set the expiry date to the past.
            <?php 
              $name = 'name'
              $time = time();
              $value =  'raheem'; 
              setcookie('name',$value, $time -60);
             ?>
            It appears php doesn’t support time travel.
            You can delete a cookie by calling the same setcookie() function with the cookie name and any value (such as an empty string) however this time you need the set the expiration date in the past.
            Once you carry out the above, you get an “undefined index” error.
            Tip:You should pass exactly the same path, domain, and other arguments that you have used when you first created the cookie in order to ensure that the correct cookie is deleted.

          </p>
          </div>
        </div>
      </div>
    </article>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2017</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
