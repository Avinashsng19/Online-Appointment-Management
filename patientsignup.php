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
       <nav class="nav navbar my-navbar navbar-fixed-top" role="navigation">
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
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="doctors.html">Doctors</a></li>
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
            <li><a href="patientsignup.html">Patient SignUp</a></li>
            <li><a href="doctorsignup.html">Doctor SignUp</a></li>
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
       <h3 style="color:blue">Patient Signup</h3><hr>
     <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2">Patient Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Email:</label>
      <div class="col-sm-6">          
        <input type="username" class="form-control" name="user">
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2">Password:</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" name="pwd">
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2">Confrim Password:</label>
      <div class="col-sm-6">          
        <input type="cpass" class="form-control" name="cpwd">
      </div>
    </div>
           <div class="form-group">
              <label class="control-label col-sm-2">Father Name:</label>
            <div class="col-sm-6">          
              <input type="text" class="form-control" name="dob">
          </div>
        </div>
         <div class="form-group">
      <label class="control-label col-sm-2">Date of Birth:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" name="dob">
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2">Mobile:</label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" name="mobile">
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2">Address:</label>
      <div class="col-sm-6">          
        <textarea name="add" rows="2" cols="62"></textarea>
      </div>
    </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Blood Group:</label>
            <div class="col-sm-6">
            <select class="form-control">
               <option>Please Select</option>
                <option>O+</option>
                <option>O-</option>
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>AB+</option>
                <option>AB-</option>
              </select>
            </div>
             </div>
             <div class="form-group">
            <label class="control-label col-sm-2">Height:</label>
            <div class="col-sm-6">
           <input type:"text" class="form-control" name="heg">
            </div>
             </div>
              <div class="form-group">
                  <label class="control-label col-sm-2">Weight:</label>
                <div class="col-sm-6">
                      <input type:"text" class="form-control" name="weg">
                </div>
             </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Blood Pressure:</label>
                <div class="col-sm-6">
                      <input type:"text" class="form-control" name="bp">
                </div>
             </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Past Diseases:</label>
                <div class="col-sm-6">
                      <input type:"text" class="form-control" name="pd">
                </div>
             </div>
              <div class="form-group">
                  <label class="control-label col-sm-2">Allergies:</label>
                <div class="col-sm-6">
                      <input type:"text" class="form-control" name="all">
                </div>  
             </div>
               <div class="form-group">
                  <label class="control-label col-sm-2">Current Medications:</label>
                <div class="col-sm-6">
                      <input type:"text" class="form-control" name="cm">
                </div>
             </div>
              <div class="form-group">
                  <label class="control-label col-sm-2">Photo:</label>
                  <div class="col-sm-6">  
                    <input type="file" class="form-control" name="file">
                  </div>
             </div>
               <div class="form-group">
                  <label class="control-label col-sm-2">Other Details:</label>
                <div class="col-sm-6">
                      <textarea name="od" rows="2" cols="62"></textarea>
                </div>
             </div>
              <div class="form-group">
                <div class="col-sm-6" style="text-align:center">
                    <button type="button" class="btn btn-lg btn-primary">Submit</button>
                    <button type="button" class="btn btn-lg btn-danger">Reset</button>
                </div>
  </form>
</div>
   </div>
   <div class="col-lg-2"> <!-- right-->
     <img src="Images/book.jpg" alt="book" class="img-responsive" style="width:300px;height:230px;padding-top:10px;padding-bottom: 10px">
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