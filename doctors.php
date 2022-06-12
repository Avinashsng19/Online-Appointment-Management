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
<div class="container-fluid">
        <div class="panel panel-primary">
          <div class="panel-heading"><h3 align="center">OUR DOCTORS LIST</h3></div>
       </div>
          <div class="col-sm-4">
            <img src="Images\doctor1.jpg" class="img-circle" alt="doctor1" width="304" height="236">
            <h2 align="left">Dr. Adarsh Chaudhary</h2>
            <p class="text-justify">Having trained in UK and the USA, Dr. Adarsh Chaudhary is a doctor with a rich experience in Hepatabillary and Pancreatic surgery. He was instrumental in starting one of the first departments of Surgical Gastroenterology in India.</p>
          </div>
            <div class="col-sm-4">
              <img src="Images\doctor2.jpg" class="img-circle" alt="doctor2" width="304" height="236">
                <h2 align="left">Dr. Aditya Aggarwal</h2>
                <p class="text-justify">Having built the centre of excellence in Hand and Reconstructive Microsurgery with special emphasis on Complex Microsurgical Reconstructions and Replantation of Amputated parts at Sir Ganga Ram Hospital.</p>
              </div>
            <div class="col-sm-4">
              <img src="Images\doctor3.jpg"  class="img-circle" alt="doctor3" width="304" height="236">   
                <h2 align="left">Dr. Akanksha Rastogi</h2>
                <p class="text-justify">Dr. Akanksha Rastogi has vast experience of nine years in the field of internal medicine and has worked with esteemed hospitals like St. Stephen’s Hospital, Delhi, Artemis Hospital, Gurugram and ESI Hospital.</p>             
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
 
 <!--Contact Us -->
<!-- Modal -->
  <div class="modal fade" id="contact-modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Contact Us</h4>
        </div>
        <div class="modal-body" align="center">
          <h5>We are available 24/7. so don't hestitate to contact us.</h5>
          <p>Addess:S-416 School Block Shakarpur Delhi-110092</p>
            <p>Mobile:(+91) 123456789</p>
            <iframe width=100% height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=chetan%20jain%20marg%20school%20block%20shakarpur%20delhi-110092&key=AIzaSyBwldq6J3CS46hRUQ9QOB1_5ZvVU15xZzQ" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!--Patient Login -->
  <!-- Modal -->
  <div class="modal fade" id="patientlogin-modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Patient Login (Login to account)</h4>
        </div>
        <div class="modal-body">
          <form>
             <div class="form-group">
          <label  class="control-label col-sm-2">Username:</label>
          <div class="col-sm-10">
          <input type="uasername" class="form-control" id="user">
        </div>
        </div>
           <br><br/>
          <div class="form-group">
            <label class="control-label col-sm-2">Password:</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="pwd">
          </div>
        </div>
        <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
        </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Login To Account</a></button>
          <button type="button" class="btn btn-danger">Reset</button>
        </div>
      </div>
    </div>
  </div>  
 
  <!-- Doctot Login -->
   <!-- Modal -->
  <div class="modal fade" id="doctorlogin-modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Patient Login (Login to account)</h4>
        </div>
        <div class="modal-body">
          <form>
             <div class="form-group">
          <label  class="control-label col-sm-2">Username:</label>
          <div class="col-sm-10">
          <input type="username" class="form-control" id="user">
        </div>
        </div>
           <br><br/>
          <div class="form-group">
            <label class="control-label col-sm-2">Password:</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="pwd">
          </div>
        </div>
        <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
        </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Login To Account</button>
          <button type="button" class="btn btn-danger">Reset</button>
        </div>
      </div>
    </div>
  </div>   <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
</html>