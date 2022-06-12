<!DOCTYPE html>
<html lang="en">
 <head> 
 	 <title>Online Appointment Management</title>
 	 <meta charset="utf-8">
 	 <meta http-equiv="X-UA-Compatible" content="IE-Edge">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
    <nav class="nav navbar my-navbar" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="Images/logo.png" class="img-responsive" style="width:315px;height:35px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="doctors.php">Doctors</a></li>
        <li><a href="#">Contact Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Login<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Patient Login</a></li>
            <li><a href="#">Doctor Login</a></li>
          </ul>
        </li>
         <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signup<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="patientsignup.php">Patient SignUp</a></li>
            <li><a href="doctorsignup.php">Doctor SignUp</a></li>
          </ul>
        </li>
      </ul>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 <div class="container">
     <div class="row">
      <div class="col-lg-10" > <!--middle-->
       <h3 style="color:blue">Make Payment</h3><hr>
          <div class="panel-group">
          <div class="panel panel-danger">
            <div class="panel-heading" align="center">Make the fees Payment
            </div>
              </div>
            <div class="panel-body" align="center">
             <img src="Images/card.png" style="width:400px;height:180px;padding-bottom:20px">
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2">Name on Card:</label>
            <div class="col-sm-6">
              <input type="text" name="cardname" class="form-control">
            </div>
             </div>
           <div class="form-group">
            <label class="control-label col-sm-2">Card No:</label>
            <div class="col-sm-6">
              <input type="text" name="cardnumber" class="form-control" placeholder="1111-2222-3333-4444">
            </div>
             </div>
              <div class="form-group">
            <label class="control-label col-sm-2">Card Type:</label>
            <div class="col-sm-6">
            <select class="form-control">
               <option>Please Select</option>
                <option>Debit Card</option>
                <option>Credit Card</option>
              </select>
            </div>
             </div>
               <div class="row form-group " style="margin: 0px; padding: 0px;">
            <label class="control-label col-sm-2 ">Card Expiry:</label>
            <div class="form-group col-sm-4" style="margin: 0px; padding: 0px;width:200px">
            <select class="form-control">
               <option>Please Select Month</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
              </select>
             </div> 
                   <span>&nbsp;</span>
			 <div class="form-group col-sm-6" style="margin-bottom: 15px; padding-right:5px;width:200px">
              <select class="form-control">
               <option>Please Select Year</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>
                <option>2022</option>
                <option>2023</option>
                <option>2024</option>
                <option>2025</option>
              </select>
             </div>
             </div> 
			 <div class="form-group">
            <label class="control-label col-sm-2">CVV:</label>
            <div class="col-sm-6">
              <input type="text" name="cvv" class="form-control" placeholder="000">
            </div>
             </div>
			 <div class="form-group">
            <label class="control-label col-sm-2">Fees:</label>
            <div class="col-sm-6">
              <input type="text" name="fees" class="form-control">
            </div>
             </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-lg btn-primary">Make Payment</button>
                </div>  
                  </div>
        </form>
          </div>
        </div>
    </div>
   <div class="col-lg-2"> <!-- right-->
     <img src="Images/book.jpg" alt="book" class="img-responsive" style="width:300px;height:230px;padding-top:20px">
       </div>
</div>
     </div>
<footer class="container-fluid">
  <div class="col-lg-4">
       <h5>Copyright&copy; Online Appointment 2018</h5>
  </div>
  <div class="col-lg-4">
  <h5>Follow Us</h5>
   <a href="#"><img src="Images/facebook.png" class="social" style="width:50px; height:50px"></a>
   <a href="#"><img src="Images/twitter.png" class="social"  style="width:50px; height:50px"></a>
   <a href="#"><img src="Images/linkedin.png" class="social" style="width:50px; height:50px"></a>
   <a href="#"><img src="Images/google.png"     class="social"   style="width:50px; height:50px"></a>
   <a href="#"><img src="Images/youtube.png" class="social" style="width:50px; height:50px"></a>
    </div>
     <div class="col-sm-4 ", text-align="left" style="font-size:13px">
       <h5>Contact Us</h5>
        <p>Addess:S-416 School Block Shakarpur Delhi-110092</p>
        <p>Mobile:(+91) 123456789</p>
       </div>
    </footer>    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>