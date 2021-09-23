<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: index.html');
  exit;
}

$DATABASE_HOST='localhost';
$DATABASE_USER='skfmis_skfdoc';
//$DATABASE_USER='skfmis_skfdocnew';
$DATABASE_PASS='$kfdoctorList';
$DATABASE_NAME = 'skfmis_doctorlist';
/*
$DATABASE_HOST='localhost';
$DATABASE_USER='skfmis_stocktest';
$DATABASE_PASS='stocktest';
$DATABASE_NAME = 'skfmis_stocktest';
*/
/*
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'demo';
*/

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT EMPID,EMPNAME,TRCODE,password, email, ROLE FROM user_mso WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($EMPID, $EMPNAME, $TRCODE, $password, $email, $ROLE);
$stmt->fetch();
$stmt->close();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Eskayef Pharmaceuticals Ltd.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/SKF_LOGO.png">
    <link rel="stylesheet" href="css/chosen.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
 <!--   <link rel="stylesheet" href="css/jquery-editable-select.css">  -->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <script type="text/javascript">
        function confSubmit(doctorLoadForm) {
                
                     
            if($("#mReporting_DRID").val() === "" || $("#mReporting_DRNAME").val() === "" || $("#mReporting_Address").val() === "" || $("#BRAND1").val() === "" || $("#BRAND2").val() === "" || $("#BRAND3").val() === "" || $("#BRAND4").val() === "" || $("#BRAND5").val() === "" ){
                alert("Please complete the doctor information");
            }else {
                return confirm('Do you really want to submit the form?');
            }
                                           
        }
      
    </script>
    
    <script>
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                alert("Please enter only Numbers.");
                return false;
            }

            return true;
        }
    </script>
       <style>
a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: #03ecfc;
  background-color: transparent;
  text-decoration: underline;
}

a:active {
  color: black;
  background-color: transparent;
  text-decoration: underline;
}

a, i, span{
    display: block;
}
#DCC_Chemist_ID, .select2-container{
    display: block;
    width: auto;
}
</style>
  </head>

  <body>
    <div class="page">
       <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
        <!--  <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div> -->
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><strong>Eskayef Pharmaceuticals Ltd.</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>SK+F</strong></div></a>  
                <!-- Toggle Button--> <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a> 
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <ul class="list-unstyled">
                    <!--<li><a href="doctor_index.php"> <i class="icon-home"></i>Home </a></li> -->
                    <li><a href="doctor_index.php"> <img alt="Home" src="img/home.png" width="40" height="50"></a></li>
                    <li><a href="doctor_index.php"> <img alt="Add New" src="img/doctor.png" width="50" height="60"></a></li>
                   <!-- <li><a href="logout.php"> <i class="icon-close"></i>Log Out </a></li> -->
                    <li><a href="logout.php"><img alt="Log Out" src="img/door-key.png" width="40" height="50"></a> </li>

          </ul>

        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom" >Doctor List</h2>
            <!--  <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a> -->
                         
                            <button name='viewDoctorList' id='viewDoctorList' class="btn btn-primary" font-color:"white"><a href="doctor_List_View.php">View List</a></button> 
                        
            </div>

          </header>

          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                  <!--  <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>  //class="card-close"  -->
                    
                    <div class="card-body">
                      

                   <form class="form-horizontal" method="post" action="doctor_index_insert.php" id="doctorLoadForm" onSubmit="return confSubmit(this);"> 
                      <!--  <form class="form-horizontal" method="post" action="insert_doctor.php"  id="doctorLoadForm"> -->

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">EMPID</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="EMPID" id="EMPID" placeholder="EMPID" value=<?=$_SESSION['name']?> READONLY><!-- <small class="help-block-none">Input EMPID</small>  -->
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">EMPNAME</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="EMPNAME" id="EMPNAME" placeholder="EMPNAME" value=<?=$EMPNAME?>  READONLY><!-- <small class="help-block-none">Input EMPNAME</small>  -->
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">TRCODE</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="TRCODE" id="TRCODE" placeholder="TRCODE" value=<?=$TRCODE?> READONLY><!-- <small class="help-block-none">Input TRCODE</small>  -->
                          </div>
                        </div>
                      
                        
                        <?php


include "connection.php";

$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}

?>


                        <div class="card-header d-flex align-items-center" style="background-color: #e1eafa;">
                          <h3 class="h4">Select mReporting Doctor</h3>
                        </div>
                        <div class="form-group row"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">mReporting DOCTOR ID *</label>
                          <div class="col-sm-9">
                           <!-- <input type="text" class="form-control" name="mReporting_DRID" id="mReporting_DRID" placeholder="mReporting_DRID" notrequired ="" >--> <!-- <small class="help-block-none">Input mReporting_DRID</small>  -->
                            <select style="background-color: #dcf3f7" class="form-control chosen responsiveChosen" name='mReporting_DRID' id='mReporting_DRID' required ="" style="">
                                <option></option>
                                  <?php
                                      $sql_query = mysqli_query($conn,"select DISTINCT mReporting_DRID,mReporting_DRNAME,DRADDRESS,MSOTR from skf_mreporting mReporting WHERE MSOTR ='$TRCODE' AND mReporting_DRID !='' and  not EXISTS (SELECT mReporting_DRID FROM skf_drlist where mReporting.mReporting_DRID = mReporting_DRID) order by mReporting.mReporting_DRNAME");
                                      while($row = mysqli_fetch_array($sql_query)){
                                      echo "<option value='".$row['mReporting_DRID']."'>".$row['mReporting_DRID']." - ".$row['mReporting_DRNAME']." - ".$row['DRADDRESS']."</option>";
                                      }
                                  ?>
                            </select>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">mReporting DOCTOR NAME *</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mReporting_DRNAME" id="mReporting_DRNAME" placeholder="mReporting_DRNAME" required ="" READONLY><!-- <small class="help-block-none">Input mReporting_DRNAME</small>  -->
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Active Status *</label>
                          <div class="col-sm-9">
                            <div class="i-checks">
                              <input id="yesCheck" type="radio" checked="" value="1" name="Active_Status" class="radio-template" onclick="javascript:yesnoCheck();">
                              <label for="yesCheck">Active</label>
                            </div>
                            <div class="i-checks">
                              <input id="noCheck" type="radio" value="0" name="Active_Status" class="radio-template" onclick="javascript:yesnoCheck();">
                              <label for="noCheck">Inactive</label>
                            </div>
                          </div>
                        </div>
                        
          <!--      <div id="displayFieldsForUpdateDoctor" style="display:block"> -->
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Category *</label>
                            <div class="col-sm-9">
                            <select class="form-control" name='Category' id='Category' required="">
                                  <option>A</option>
                                  <option>B</option>
                                  <option>C</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">DOCTOR CATEGORY *</label>
                            <div class="col-sm-9">
                            <select style="background-color: #dcf3f7" class="form-control" name='DSR_Doctor_Category' id='DSR_Doctor_Category' required ="" onchange="java_script_:showLocation(this.options[this.selectedIndex].value)">
                                  <option></option>
                                  <option>POSTGRAD</option>
                                  <option>MBBS</option>
                                  <option>BDS</option>
                                  <option>DMF</option>
                                  <option>RMP</option>
                                  <option>DCC</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row" id="displayPostGrade" style="display: none">
                          <label class="col-sm-3 form-control-label">POST GRAD DEGREE *</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="DSR_PostGradDegree" id="DSR_PostGradDegree" notrequired="" placeholder="Post Grad Degree" autocomplete="off"><!-- <small class="help-block-none">Input DSR_PostGradDegree</small>  -->
                          </div>
                        </div>
                        
                        
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">DOCTOR TYPE *</label>
                            <div class="col-sm-9">
                            <select style="background-color: #dcf3f7" class="form-control" name='Doctor_Type' id='Doctor_Type' required="" onchange="java_script_:showOtherDoctorType(this.options[this.selectedIndex].value)">
                                <!--  <option disabled="" selected="">Select Doctor Type</option> -->
                                  <option>CHAMBER DOCTOR</option>
                                  <option>HOSPITAL</option>
                                  <option>CLINIC</option>
                                  <option>CHEMIST</option>
                                  <option>OTHER</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="form-group row" id="DSR_Other_Doctor_Type" style="display: none">
                          <label class="col-sm-3 form-control-label">OTHER TYPE *</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Other_DoctorType" id="Other_DoctorType" notrequired="" placeholder="Other Doctor Type" autocomplete="off">
                          </div>
                        </div>
                        
                        
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Speciality *</label>
                            <div class="col-sm-9">
                            <select class="form-control chosen responsiveChosen" name='mReporting_SPECIALITY' id='mReporting_SPECIALITY' required ="">
                                <option disabled="" selected="">Select Speciality</option>
                                  <?php
                                      $sql_query = mysqli_query($conn,"select DISTINCT SPECIALITY from skf_mreporting where SPECIALITY !='' order by SPECIALITY");
                                      while($row = mysqli_fetch_array($sql_query)){
                                      echo "<option value='".$row['SPECIALITY']."'>".$row['SPECIALITY']."</option>";
                                      }
                                  ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Degree *</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="mReporting_DEGREE" id="mReporting_DEGREE" placeholder="mReporting Doctor Degree"  required ="">
                           
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Address *</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mReporting_Address" id="mReporting_Address" placeholder="mReporting Doctor Address" required ="" ><!-- <small class="help-block-none">Input mReporting_Address</small>  -->
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" style="color: red;">District *</label>
                          <div class="col-sm-9">
                            <!-- <input type="text" class="form-control" name="mReporting_District" id="mReporting_District" placeholder="mReporting_District" required ="" > -->
                            <select class="form-control chosen responsiveChosen" name='mReporting_District' id='mReporting_District' required ="">
                                <option disabled="" selected="">Select District</option>
                                  <?php
                                      $sql_query = mysqli_query($conn,"select DISTINCT DIST from skf_thana where DIST !='' order by DIST");
                                      while($row = mysqli_fetch_array($sql_query)){
                                      echo "<option value='".$row['DIST']."'>".$row['DIST']."</option>";
                                      }
                                  ?>
                            </select>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label" style="color: red;">Thana *</label>
                          <div class="col-sm-9">
                            <!-- <input type="text" class="form-control" name="mReporting_Thana" id="mReporting_Thana" placeholder="mReporting_Thana" required ="" > -->
                           <select class="form-control chosen responsiveChosen" name='mReporting_Thana' id='mReporting_Thana' required ="">
                                <option disabled="" selected="">Select Thana</option>
                                  <?php
                                      $sql_query = mysqli_query($conn,"select DISTINCT Thana from skf_thana where Thana !='' order by Thana");
                                      while($row = mysqli_fetch_array($sql_query)){
                                      echo "<option value='".$row['Thana']."'>".$row['Thana']."</option>";
                                      }
                                  ?>
                                 
                            </select>
                          </div>
                        </div>
                        
                        <div class="form-group row" id="DCC_Chemist" style="display: none">
                          <label class="col-sm-3 form-control-label">CHEMIST ID *</label>
                         <div class="col-sm-9"> 
                        <!--    <input type="text" class="form-control" name="DCC_Chemist_ID" id="DCC_Chemist_ID" notrequired="" placeholder="DCC Chemist ID" autocomplete="off"> -->
                             <select class="form-control responsiveChosen" name='DCC_Chemist_ID' id='DCC_Chemist_ID' notrequired="">
                                <option disabled="" selected="">Select CHEMIST</option>
                                 
                            </select> 
                          </div> 
                        </div> 
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">MOBILE NUMBER *</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mReporting_Mobile" id="mReporting_Mobile" placeholder="mReporting Doctor Mobile" maxlength="11" onkeypress="return isNumber(event)" required ="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">No of Patient Per Day (NOP) *</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="mReporting_NOP" id="mReporting_NOP" placeholder="NOP" maxlength="10" onkeypress="return isNumber(event)" required ="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">BRAND-1</label>
                          <div class="col-sm-9">
                            <!-- <input type="text" class="form-control" name="BRAND1" id="BRAND1" placeholder="BRAND1" required =""> -->
                            <select class="form-control chosen responsiveChosen" name='BRAND1' id='BRAND1' required ="">
                                <option disabled="" selected="">Select Brand</option>
                                  <?php
                                      $sql_query = mysqli_query($conn,"select DISTINCT BRAND from skf_prlist where BRAND !='' order by BRAND");
                                      while($row = mysqli_fetch_array($sql_query)){
                                      echo "<option value='".$row['BRAND']."'>".$row['BRAND']."</option>";
                                      }
                                  ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">BRAND-2</label>
                          <div class="col-sm-9">
                            <!--<input type="text" class="form-control" name="BRAND2" id="BRAND2" placeholder="BRAND2" required ="">-->
                            <select class="form-control chosen responsiveChosen" name='BRAND2' id='BRAND2' required ="">
                                <option disabled="" selected="">Select Brand</option>
                                  <?php
                                      $sql_query = mysqli_query($conn,"select DISTINCT BRAND from skf_prlist where BRAND !='' order by BRAND");
                                      while($row = mysqli_fetch_array($sql_query)){
                                      echo "<option value='".$row['BRAND']."'>".$row['BRAND']."</option>";
                                      }
                                  ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">BRAND-3</label>
                          <div class="col-sm-9">
                            <!--<input type="text" class="form-control" name="BRAND3" id="BRAND3" placeholder="BRAND3" required ="">-->
                            <select class="form-control chosen responsiveChosen" name='BRAND3' id='BRAND3' required ="">
                                <option disabled="" selected="">Select Brand</option>
                                  <?php
                                      $sql_query = mysqli_query($conn,"select DISTINCT BRAND from skf_prlist where BRAND !='' order by BRAND");
                                      while($row = mysqli_fetch_array($sql_query)){
                                      echo "<option value='".$row['BRAND']."'>".$row['BRAND']."</option>";
                                      }
                                  ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">BRAND-4</label>
                          <div class="col-sm-9">
                            <!--<input type="text" class="form-control" name="BRAND4" id="BRAND4" placeholder="BRAND4" required ="">-->
                            <select class="form-control chosen responsiveChosen" name='BRAND4' id='BRAND4' required ="">
                                <option disabled="" selected="">Select Brand</option>
                                  <?php
                                      $sql_query = mysqli_query($conn,"select DISTINCT BRAND from skf_prlist where BRAND !='' order by BRAND");
                                      while($row = mysqli_fetch_array($sql_query)){
                                      echo "<option value='".$row['BRAND']."'>".$row['BRAND']."</option>";
                                      }
                                  ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">BRAND-5</label>
                          <div class="col-sm-9">
                            <!--<input type="text" class="form-control" name="BRAND5" id="BRAND5" placeholder="BRAND5" required ="">-->
                            <select class="form-control chosen responsiveChosen" name='BRAND5' id='BRAND5' required ="">
                                <option disabled="" selected="">Select Brand</option>
                                  <?php
                                      $sql_query = mysqli_query($conn,"select DISTINCT BRAND from skf_prlist where BRAND !='' order by BRAND");
                                      while($row = mysqli_fetch_array($sql_query)){
                                      echo "<option value='".$row['BRAND']."'>".$row['BRAND']."</option>";
                                      }
                                  ?>
                            </select>
                          </div>
                        </div>
                        
                         
                        
                        <div class="card-header d-flex align-items-center" style="background-color: #e1eafa;">
                      <h3 class="h4">Select DSR Doctor</h3>
                    </div>
                        <div class="form-group row"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">DSR DOCTOR ID </label>
                          <div class="col-sm-9">
                            <input style="background-color: #dcf3f7" type="text" class="form-control" name="DSR_DRID" id="DSR_DRID" placeholder="Search by id or name" notrequired="" > <!-- <small class="help-block-none">Input DSR_DRID</small>  -->
                            
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">DSR DOCTOR NAME</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="DSR_DRNAME" id="DSR_DRNAME" placeholder="DSR Doctor Name" notrequired="" READONLY>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">DSR DOCTOR ADDRESS</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="DSR_Address" id="DSR_Address" placeholder="DSR Doctor Address" notrequired="" READONLY>
                          </div>
                        </div>
                        
                        <div class="card-header d-flex align-items-center" style="background-color: #e1eafa;">
                          <h3 class="h4">Select 4P Doctor</h3>
                        </div>
                        <span><small style="color: red">*First select thana & district from above</small></span>

                        <div id="4P_Doctor">
                        <div class="form-group row"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">4P DOCTOR ID</label>
                          <div class="col-sm-9">
                              <!--  <input style="background-color: #dcf3f7" type="text" class="form-control" name="DRID_4P" id="DRID_4P" placeholder="Search by id or name"  notrequired=""> -->
                            <select class="form-control responsiveChosen" name='DRID_4P' id='DRID_4P' notrequired ="">
                                <option disabled="" selected="">Select 4P Doctor Id</option>
                                 
                            </select> 
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">4P DOCTOR NAME</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="DRNAME_4P" id="DRNAME_4P" placeholder="DRNAME 4P" notrequired="" READONLY>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">4P DOCTOR ADDRESS</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="4P_Address" id="4P_Address" placeholder="4P Address" notrequired="" READONLY>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">4P DOCTOR SPECIALITY</label>
                            <div class="col-sm-9">
                            <select class="form-control chosen responsiveChosen" name='4P_Specialty' id='4P_Specialty' notrequired=""  READONLY>
                              <option></option>
                                  <?php
                                      $sql_query = mysqli_query($conn,"select DISTINCT PHY_SPECIALITY from skf_phy_speciality_setup order by PHY_SPECIALITY");
                                      while($row = mysqli_fetch_array($sql_query)){
                                      echo "<option value='".$row['PHY_SPECIALITY']."'>".$row['PHY_SPECIALITY']."</option>";
                                      }
                                  ?>
                            </select>
                          </div>
                        </div>
                        
                        
             <!--   </div> --> <!--  for inactive doctor -->

                        <div class="form-group row" >
                        <!-- id="showSubmit_Doctor">   -->
                          <div class="col-sm-4 offset-sm-3">
                         <!--     <input type="submit" name='submitDoctor' id='submitDoctor' value="Submit" >  -->
                        <button type="submit" name='submitDoctor' id='submitDoctor' class="btn btn-primary" >Submit</button> 
                         <!--   <input type="submit" name='submitDoctor' id='submitDoctor' value="Submit" onClick="confSubmit(this.form);"> -->
                          </div>
                        </div>
                       </form>

                        <div class="line"></div>
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Eskayef Pharmaceuticals Ltd. &copy; 2021</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Developed by <a href="index.html" class="external">MIS</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script> 
    
    
     <script>
      $("#doctorLoadForm")[0].reset();
    </script>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"   type="text/javascript"></script>  
    <script>
    function showLocation(select_item) {

        if (select_item == "POSTGRAD") {
            $('#displayPostGrade').show();
            $('#DSR_PostGradDegree').prop('required',true);
            
        }
        else {
            $('#displayPostGrade').hide();
            $('#DSR_PostGradDegree').prop('required',false);
           
        }
        
        if (select_item == "RMP" || select_item == "DCC") {
            $('#DCC_Chemist').show();
            $('#DCC_Chemist_ID').prop('required',true);
            
        }
        else {
            $('#DCC_Chemist').hide();
            $('#DCC_Chemist_ID').prop('required',false);
           
        }
        
    }

    function showOtherDoctorType(select_item) {

        if (select_item == "OTHER") {
            $('#DSR_Other_Doctor_Type').show();
            $('#Other_DoctorType').prop('required',true);
            
        }
        else {
            $('#DSR_Other_Doctor_Type').hide();
            $('#Other_DoctorType').prop('required',false);
           
        }
        
      /*  if (select_item == "CHEMIST") {
            $('#DCC_Chemist').show();
            $('#DCC_Chemist_ID').prop('required',true);
      
        }
        else {
            $('#DCC_Chemist').hide();
            $('#DCC_Chemist_ID').prop('required',false);
           
        } */
    }
    
    function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
            $('#DSR_Doctor_Category').prop('required',true);
            $('#mReporting_SPECIALITY').prop('required',true);
            $('#mReporting_DEGREE').prop('required',true);
            $('#Category').prop('required',true);
            $('#Doctor_Type').prop('required',true);
            $('#mReporting_Thana').prop('required',true);
            $('#mReporting_District').prop('required',true);
            //document.getElementById('displayFieldsForUpdateDoctor').style.display = 'block';
            
        }
        else {
            $('#DSR_Doctor_Category').prop('required',false);
            $('#mReporting_SPECIALITY').prop('required',false);
            $('#mReporting_DEGREE').prop('required',false);
            $('#Category').prop('required',false);
            $('#Doctor_Type').prop('required',false);
            $('#mReporting_Thana').prop('required',false);
            $('#mReporting_District').prop('required',false);
        //document.getElementById('displayFieldsForUpdateDoctor').style.display = 'none';
        }
        
    }
    
   // function yesnoCheck() {
//        if (document.getElementById('yesCheck').checked) {
  //          document.getElementById('displayFieldsForUpdateDoctor').style.display = 'block';
            
    //    }
      //  else document.getElementById('displayFieldsForUpdateDoctor').style.display = 'none';
        
    //}
    
    </script>

 <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <!-- <script src="vendor/jquery/3.1.0/jquery.min.js"></script>  -->
   
   <script src="vendor/bootstrap/js/bootstrap3-typeahead.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   <script>
   //MREPORTING_ID SEARCH AND FETCH MREPORTING_DOCTOR_NAME
    $(document).ready(function(){
        
   
       //MREPORTING_ID SEARCH AND FETCH MREPORTING_DOCTOR_NAME END

   //4P_ID SEARCH AND FETCH 4P_NAME
   /*   $('#DRID_4P').typeahead({
          source: function(query, result)
          {
              $.ajax({
                  url:"4P_Doctor.php",
                  method:"POST",
                  data:{query:query},
                  dataType:"json",
                  success:function(data)
                  {
                      result($.map(data, function(item){
                          return item;
                      }));
                  }
              })
          }
      });

      var $input4P = $('#DRID_4P');

      $input4P.change(function() {
          var selected4PDoc = $input4P.typeahead("getActive");

          $.ajax({
               url:"get_4P_Doctor_INFO.php",
               method:"POST",
               data: 'DRID_4P='+selected4PDoc,
                // data:{query:query1},
              dataType:"json",
              success:function(data)
              {
                  
                    $("#DRNAME_4P").val(data.DRNAME_4P);
                    $("#4P_Address").val(data.CH_ADD);
                    $("#4P_Specialty").val(data.PHY_SPC);
                  // console.log(data.DRNAME_4P);
                  //  $("#QRCODE").val(data.QRCODE);

              }
          });
      }); */
   
   //4P_ID SEARCH AND FETCH 4P_NAME END

   //DSR_DRID SEARCH AND FETCH DSR_DRNAME
    $('#DSR_DRID').typeahead({
          source: function(query, result)
          {
              $.ajax({
                  url:"DSR_Doctor.php",
                  method:"POST",
                  data:{query:query},
                  dataType:"json",
                  success:function(data)
                  {
                      result($.map(data, function(item){
                          return item;
                      }));
                  }
              })
          }
      });

      var $inputDSR = $('#DSR_DRID');

      $inputDSR.change(function() {
          var selectedDSRDoc = $inputDSR.typeahead("getActive");

          $.ajax({
               url:"get_DSR_Doctor_INFO.php",
               method:"POST",
               data: 'DSR_DRID='+selectedDSRDoc,
                // data:{query:query1},
              dataType:"json",
              success:function(data)
              {
                  
                    $("#DSR_DRNAME").val(data.DSR_DRNAME);
                    $("#DSR_Address").val(data.DRADDRESS);
                   
                  //  $("#QRCODE").val(data.QRCODE);

              }
          });
      });

   
   //DSR_DRID SEARCH AND FETCH DSR_DRNAME END
   
    //DCC CHEMIST SEARCH AND FETCH CHEMIST INFORMATION
 /*   $('#DCC_Chemist_ID').typeahead({
          source: function(query, result)
          {
              $.ajax({
                  url:"DCC_Chemist.php",
                  method:"POST",
                  data:{query:query},
                  dataType:"json",
                  success:function(data)
                  {
                      result($.map(data, function(item){
                          return item;
                      }));
                  }
              })
          }
      });

*/
/*
      var $inputDSR = $('#DCC_Chemist');

      $inputDSR.change(function() {
          var selected_DCC_Chemist = $inputDSR.typeahead("getActive");

          $.ajax({
               url:".php",
               method:"POST",
               data: 'DCC_Chemist='+selected_DCC_Chemist,
                // data:{query:query1},
              dataType:"json",
              success:function(data)
              {
                  
                    $("#NAMECUST").val(data.NAMECUST);
                    $("#MARKET").val(data.MARKETNAME);

              }
          });
      });

   */
   //DCC CHEMIST SEARCH AND FETCH CHEMIST INFORMATION END
   
    //fetch mReporting_Thana by dynamic dropdown mReporting_District
        $("#mReporting_District").on("change",function(){
            var DISTRICTId = $(this).val();
            // var countryId = 1;
            $.ajax({
                url :"get_thana.php",
                type:"POST",
                cache:false,
                data:{DISTRICTId:DISTRICTId},
                success:function(data){
                    $("#mReporting_Thana").html(data);
                    //$('#city').html('<option value="">Select city</option>');
                }
            });
        }); 
        
        //end of fetch mReporting_Thana by dynamic dropdown mReporting_District
        
        //fetch 4P DRID by dynamic dropdown mReporting_District & mReporting_Thana
        $("#mReporting_Thana").on("change",function(){
            var DRID_4P_ID = $(this).val();
            // var countryId = 1;
            $.ajax({
                url :"get_4P_DoctorList.php",
                type:"POST",
                cache:false,
                data:{DRID_4P_ID:DRID_4P_ID},
                success:function(data){
                    $("#DRID_4P").html(data);
                    //$('#city').html('<option value="">Select city</option>');
                }
            });
        }); 
        //end of fetch 4P DRID by dynamic dropdown mReporting_District & mReporting_Thana
        
        //fetch DCC_Chemist_ID by dynamic dropdown mReporting_District & mReporting_Thana
     /*   $("#mReporting_Thana").on("change",function(){
            var CHEMIST_ID = $(this).val();
            // var countryId = 1;
            $.ajax({
                url :"get_CHEMIST_ID.php",
                type:"POST",
                cache:false,
                data:{CHEMIST_ID:CHEMIST_ID},
                success:function(data){
                    $("#DCC_Chemist_ID").html(data);
                    //$('#city').html('<option value="">Select city</option>');
                }
            });
        });  */
        //end of fetch DCC_Chemist_ID by dynamic dropdown mReporting_District & mReporting_Thana
        
        //fetch DCC_Chemist_ID by dynamic dropdown TRCODE
        $.ajax({
                url :"get_CHEMIST_ID.php",
                type:"POST",
                cache:false,
                data:{CHEMIST_ID:$("#TRCODE").val()},
                success:function(data){
                    $("#DCC_Chemist_ID").html(data);
                    //$('#city').html('<option value="">Select city</option>');
                }
            });
        //end of fetch DCC_Chemist_ID by dynamic dropdown TRCODE
   
    }); 
    

  </script>
  
 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script>
    $("#DRID_4P").change(function() {
        //get the selected value
        var val = this.value;

        //make the ajax call
        $.ajax({
            url: 'DRID_4P_response.php',
            type: 'POST',
            data: {field : 'DRID_4P', value: val},
            success: function(data) {
            document.getElementById("DRNAME_4P").value = data['result'];
            document.getElementById("4P_Address").value = data['result1'];
            document.getElementById("4P_Specialty").value = data['result2'];
        
            }
        });

    });
    
    
    
</script>

<script>
$("#mReporting_DRID").change(function() {
    //get the selected value
    var val = this.value;

    //make the ajax call
    $.ajax({
        url: 'mReporting_response.php',
        type: 'POST',
        data: {field : 'mReporting_DRID', value: val},
        success: function(data) {
        document.getElementById("mReporting_DRNAME").value = data['result'];
        document.getElementById("mReporting_Address").value = data['result1'];
        document.getElementById("mReporting_SPECIALITY").value = data['result2'];
        document.getElementById("mReporting_DEGREE").value = data['result3'];
        // document.getElementById("mReporting_Thana").value = data['result4'];
        //document.getElementById("mReporting_District").value = data['result5'];
        document.getElementById("DSR_Doctor_Category").value = data['result6'];
        document.getElementById("mReporting_NOP").value = data['result7'];
        document.getElementById("mReporting_Mobile").value = '0'+data['result8'];
        
        }
    });

});
</script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('#DRID_4P').select2();
        $('#mReporting_DRID').select2();
        $('#mReporting_District').select2();
        $('#mReporting_Thana').select2();
        $('#DCC_Chemist_ID').select2();
    });
</script>

  </body>
</html>