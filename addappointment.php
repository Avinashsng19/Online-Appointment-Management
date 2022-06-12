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
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Dashboard.php">Dashboard</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Appointment<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addappointment.php">Add Appointment</a></li>
            <li><a href="viewappointment.php">Appointment Report Screen</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeslot<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="timeslot.php">Add Timeslot</a></li>
            <li><a href="timeslothistory.php">Timeslot Report Screen</a></li>
          </ul>
        </li>
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Doctor Fees<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="doctorfee.php">Add Doctor Fees</a></li>
            <li><a href="doctorfeesreport.php">Doctor Fees Report Screen</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Doctor Schedule<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="doctorschedule.php">Add Doctor Schedule</a></li>
            <li><a href="doctorschedulereport.php">Doctor Schedule Report Screen</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Test Mgmt<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="test.php">Add Test</a></li>
            <li><a href="testreport.php">Test Report Screen</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patient Test Mgmt<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="patienttest.php">Add Patient Test</a></li>
            <li><a href="patienttesthistory.php">Patient Test Report Screen</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patient Medicine Mgmt<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="patientmedicine.php">Add Patient Medicine</a></li>
            <li><a href="patientmedicinereport.php">Patient Medicine Report Screen</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prescription Management<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addprescription.php">Add Prescription</a></li>
            <li><a href="Prescriptionreport.php">Prescription Report Screen</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patient Management<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addpatient.php">Add Patient</a></li>
            <li><a href="patientreport.php">Patient Report Screen</a></li>
          </ul>
        </li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>   
<div class="container-fluid">
  <h3 style="color: blue">ADD NEW APPOINTMENT FORM</h3><hr/>
    <div class="panel panel-default">
    <div class="panel-heading">Appointment Management</div>
    <div class="panel-body">
        <form class="form-horizontal">
           <div class="form-group">
            <label class="control-label col-sm-2">Appointment Status:</label>
            <div class="col-sm-10">
            <select class="form-control">
               <option>Please Select</option>
                <option>Pending</option>
                <option>Confrimed</option>
                 <option>Rejected</option>
              </select>
            </div>
             </div>
             <div class="form-group">
            <label class="control-label col-sm-2">Select Patient:</label>
            <div class="col-sm-10">
            <select class="form-control">
               <option>Please Select</option>
              </select>
            </div>
             </div>
             <div class="form-group">
            <label class="control-label col-sm-2">Select Doctor:</label>
            <div class="col-sm-10">
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
            <label class="control-label col-sm-2">Date:</label>
            <div class="col-sm-10">
              <input type="date" name="date" class="form-control">
            </div>
             </div>
             <div class="form-group">
            <label class="control-label col-sm-2">Select TimeSlot:</label>
            <div class="col-sm-10">
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
                <label class="control-label col-sm-2">Appointment Fees</label>
                <div class="col-sm-10">
                <input type="text" name="fee" class="form-control">
              </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2">Contact No:</label>
            <div class="col-sm-10">
              <input type="text" name="contact"class="form-control">
            </div>
          </div>
             <div class="form-group">
            <label class="control-label col-sm-2">Address:</label>
            <div class="col-sm-10">
              <textarea name="add" rows="2" cols="149"></textarea>
            </div>
             </div>
              <div class="form-group">
            <label class="control-label col-sm-2">Description:</label>
            <div class="col-sm-10">
              <textarea name="des" rows="2" cols="149"></textarea>
            </div>
             </div>
             <div class="form-group">
                <div class="col-sm-6" style="text-align:center">
                    <button type="button" class="btn btn-md btn-primary">Submit</button>
                    <button type="button" class="btn btn-md btn-danger">Reset</button>
                </div>  
                  </div>
        </form>
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