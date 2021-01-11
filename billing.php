<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chinese Restaurant</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  </head>
<body>
  <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="index.html" class="pull-left visible-md visible-lg">
            <div id="logo-img"></div>
          </a>

          <div class="navbar-brand">
            <a href="index.html"><h1>Chinese Restaurant</h1></a>
            <p>
              <img src="images/star-k-logo.png" alt="Kosher certification">
              <span>Certified</span>
            </p>
          </div>

          <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li class="visible-xs active">
              <a href="index.html">
                <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li>
              <a href="menu_categories.html">
                <span class="glyphicon glyphicon-cutlery"></span><br class="hidden-xs"> Menu</a>
            </li>
            <li>
              <a href="#">
                <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> About</a>
            </li>
            <li>
              <a href="#">
                <span class="glyphicon glyphicon-certificate"></span><br class="hidden-xs"> Awards</a>
            </li>
            <li id="phone" class="hidden-xs">
              <a href="tel:012-345-6789">
                <span>012-345-6789</span></a><div>* We Deliver</div>
            </li>
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>

    <div class="form">
      <form action="index.html" method="POST">
      <?php
        include 'connect.php';
        if (isset($_POST['Item_Price'])) {
            $food = $_POST['Item_Price'];
            $c = count($food);
            $price=0.0;
            for($i=0;$i<$c;$i++){
                $price += $food[$i];
            }
        } else {
            echo "You did not choose a dish.";
        }
        $conn->close();
        ?>
        <h1 class="form-heading">Your billing amount is:<br></h1>
        <h2 class="form-heading"><?php echo $price; ?></h2>
        <h3 class="form-heading">Do you want to submit your order?</h3>
        <div class="button-div">
        <input type="submit" value="submit">
        </div>
        <div class="button-div">
            <button><a href="index.html">NAH!!!</a></button>
        </div>
      </form>
    </div>
    <?php
    include 'connect.php';
    if(!isset($_POST['submit'])){
        $pricee=$_POST['price'];
    }
    $sql = "INSERT INTO Customer_Details (Order_Price)
    VALUES ('$price')";
    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  $conn->close();
?>

  <footer class="panel-footer">
    <div class="container">
      <div class="row">
        <section id="hours" class="col-sm-4">
          <span>Hours:</span><br>
          Sun-Thurs: 11:15am - 10:00pm<br>
          Fri: 11:15am - 2:30pm<br>
          Saturday Closed
          <hr class="visible-xs">
        </section>
        <section id="address" class="col-sm-4">
          <span>Address:</span><br>
          4524 Lorem ipsum Road<br>
          Random, MD 111111
          <p>* Delivery area within 3-4 miles, with minimum order of Rs.200 plus Rs.30 charge for all deliveries.</p>
          <hr class="visible-xs">
        </section>
        <section id="testimonials" class="col-sm-4">
          <p>"The best Chinese restaurant I've been to! And that's saying a lot, since I've been to many!"</p>
          <p>"Amazing food! Great service! Couldn't ask for more! I'll be back again and again!"</p>
        </section>
      </div>
      <div class="text-center">&copy; Copyright Chinese Restaurant 2020</div>
    </div>
  </footer>

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
