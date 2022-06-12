<!DOCTYPE html>
<html lang="en">
 <head> 
 	 <title>Online Appointment Management</title>
 	 <meta charset="utf-8">
 	 <meta http-equiv="X-UA-Compatible" content="IE-Edge">
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
 	 <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
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
   <div class="panel panel-primary">
      <div class="panel-heading" align="center" style="font-size:18px">Admin Dashboard</div>
      <div class="panel-body">
      <p>In Online Appointment Management the most important role of admin is to manage the hospital data and fix the appointment of the patient to doctor.All the activities in hospital are done with admin without admin hospital can not arrange the data.So the admin is very important role to the online Appointment Management.
        All the treatment of the patient like tests,appointment, Helath checkup. All the arrangement are done with the admin.</p>

      </div>
    </div>

<footer class="container-fluid">
  <div class="col-lg-4">
       <h5>Copyright&copy; Online Appointment 2018</h5>
  </div>
  <div class="col-lg-4">
  <h5>Follow Us</h5>
   <a href="#"><img src="Images/facebook.png" class="social" style="width:50px; height:50px"></a>
   <a href="#"><img src="Images/Twitter.png" class="social"  style="width:50px; height:50px"></a>
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