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
       <h3 style="color:blue">Book Your Appointment</h3><hr>
     <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2">Doctor:</label>
            <div class="col-sm-6">
            <select class="form-control">
               <option>Please Select</option>
                <option>Dr.Adarsh Chaudhary</option>
                <option>Dr.Aditya Aggarwal</option>
                <option>Dr. Naresh Trehan</option>
                <option>Dr. Sabhyata Gupta</option>
                <option>Dr S C Tiwari</option>
                <option>Dr Sanjay Sachdev</option>
                <option>Dr M S Bhatia</option>
                <option>Dr. Neha Suryawanshi Shivhare</option>
                <option>Dr. Prasad Rao Voleti</option>
              </select>
            </div>
             </div>
           <div class="form-group">
            <label class="control-label col-sm-2">Specialists:</label>
            <div class="col-sm-6">
            <select class="form-control">
               <option>Please Select</option>
                <option>Surgical Gastroenterology</option>
                <option>Reconstructions and Replantation of Amputated parts</option>
                <option>cardiologist</option>
                <option>Gynaecologist</option>
                <option>Nephrologists</option>
                <option>ENT</option>
                <option> Psychiatrists </option>
                <option>Dermatologist</option>
                <option>Dietitian</option>
                <option>Internal Medicine</option>
              </select>
            </div>
             </div>
               <div class="form-group">
            <label class="control-label col-sm-2">Date:</label>
            <div class="col-sm-6">
              <input type="date" name="date" class="form-control">
            </div>
             </div>
              <div class="form-group">
            <label class="control-label col-sm-2">TimeSlot:</label>
            <div class="col-sm-6">
            <select class="form-control">
               <option>Please Select</option>
                <option>9:00  - 9:30</option>
                <option>9:30  - 10:00</option>
                <option>10:00 - 10:30</option>
                <option>10:30 - 11:00</option>
                <option>11:00 - 11:30</option>
                <option>11:30 - 12:00</option>
                <option>12:00 - 12:30</option>
                <option>12:30 - 1:00</option>
                <option>1:00  - 1:30</option>
              </select>
            </div>
             </div>
              <div class="form-group">
            <label class="control-label col-sm-2">Fees:</label>
            <div class="col-sm-6">
              <input type="text" name="fee"class="form-control">
            </div>
             </div>
              <div class="form-group">
            <label class="control-label col-sm-2">Contact No:</label>
            <div class="col-sm-6">
              <input type="text" name="contact"class="form-control">
            </div>
             </div>
              <div class="form-group">
            <label class="control-label col-sm-2">Address:</label>
            <div class="col-sm-6">
              <textarea name="add" rows="2" cols="62"></textarea>
            </div>
             </div>
              <div class="form-group">
            <label class="control-label col-sm-2">Description:</label>
            <div class="col-sm-6">
              <textarea name="des" rows="2" cols="62"></textarea>
            </div>
             </div>
              <div class="form-group">
                <div class="col-sm-6" style="text-align:center">
                    <button type="button" class="btn btn-lg btn-primary">Submit</a></button>
                    <button type="button" class="btn btn-lg btn-danger">Reset</button>
                </div>  
                  </div>

  </form>
   </div>
   <div class="col-lg-2"> <!-- right-->
     <img src="Images/book.jpg" alt="book" class="img-responsive" style="width:300px;height:230px;padding-top:20px">
       </div>
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