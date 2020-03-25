<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Landing Page - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

  

</head>

<body>
    
<?php 
        $EQ=$_GET["EQ"];
        $XL=$_GET["XL"];
        $XU=$_GET["XU"];
        $EP=$_GET["EP"];
        
        
        

            
        
        ?>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-dark static-top">
    <div class="container">
      <a class="navbar-brand text-white" href="#"><h4>Numerical method</h4></a>
      <a href="index.html"class="btn btn-primary" href="#">Home</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Bisection</h1>
        </div>
        
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Fully Responsive</h3>
            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Bootstrap 4 Ready</h3>
            <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  

  <!-- Call to Action -->
  <table>
  <section class="call-to-action text-white text-center">
    
    <div>
    <caption>ตาราง</caption>
    <?php 
// PHP program for implementation  
// of Bisection Method for solving 
// equations 

$EPSILON = $EP;

  
// An example function whose  
// solution is determined  
// using Bisection Method.  
// The function is 5*(x*3) - 4*(x*1) + 1 
function func($x) 
{ 
    return 5*($x * $x * $x) -   4*$x  + 1; 
} 
  
// Prints root of func(x) 
// with error of EPSILON 
function bisection($a, $b) 
{ 
    global $EPSILON; 
    if (func($a) *  func($b) >= 0) 
    { 
        echo "You have not assumed " .  
                 "right a and b","\n"; 
        return; 
    } 
  
    $c = $a; $i=0;
    while (($b - $a) >= $EPSILON) 
    { 
        // Find middle point 
        $c = ($a + $b) / 2; 
        
        // Check if middle  
        // point is root 
        if (func($c) == 0.0) 
            break; 
  
        // Decide the side to 
        // repeat the steps 
        else if (func($c) * func($a) < 0) 
            $b = $c; 
        else
            $a = $c; 
        $i++;    
    } 
    echo "The value of root is : " , $c; 
} 
  
// Driver Code 
  
// Initial values assumed 
$a =$XL; 
$b = $XU; 
bisection($a, $b); 
  
// This code is contributed by ajit 
?> 
    
    </div>
    </table>
    
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>



