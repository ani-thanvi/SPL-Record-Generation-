<!DOCTYPE html>
<?php
include "database.php";
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Legal Cell</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/color-switcher.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

  </head>
  
  <body>
    <!-- Header Section Start -->
    <header id="slider-area">  
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">          
          <a class="navbar-brand" href="index.html"><span class="lni-bulb"></span>Legal Cell</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#slider-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Services</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#entries">New Entries</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Features</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios">View Records</a>
              </li>            
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#support">Help Support</a>
              </li>    
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li> 
            </ul>              
          </div>
        </div>
      </nav> 

      <!-- Main Carousel Section -->
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            
            <div class="carousel-item active">
              <img src="img/slider/bg-1.png" alt="" style="object-fit: contain;">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s"><font color="black">Bundled With Tons of SPL Reports</font></h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s"><font color="black">Get Digitailised Versions</font></h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.9s"><font color="black">Instant</font></h4>
                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">View Room</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/bg/bg-1.jpg" alt="" style="object-fit: contain;">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Ready to</h3>
                <h2 class="wow fadeInRight" data-wow-delay="0.6s">Search Pending Reports</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.6s"></h4>
                <a href="#" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">Search</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>  

    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Progress</h2>
          
          <span></span>
          <p class="section-subtitle"></p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-1">
                <i class="lni-pencil"></i>
              </div>
              <h4>Total Cases</h4>
              <div class="fact-count">
                <h3><span class="counter">5679</span>+</h3>
              </div>
              <p></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon color-2">
                <i class="lni-cog"></i>
              </div>
              <h4>Disposed Cases</h4>
              <div class="fact-count">
                <h3><span class="counter">679</span>+</h3>
              </div>
              <p></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon color-3">
                <i class="lni-stats-up"></i>
              </div>
              <h4>Pending Cases</h4>
              <div class="fact-count">
                <h3><span class="counter">5000</span>+</h3>
              </div>
              <p></p>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Call to Action Start -->
    <section id="entries" class="call-action section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="cta-trial text-center">
              <h3>Enter New Records</h3>
              <p></p>
              <a href="#dataentry" class="btn btn-common btn-effect"><b>START &#10132;</b> </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action End -->

    <!-- Features Section Start -->
    <section id="features" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our services</h2>
          <span>Why</span>
          <p class="section-subtitle"></p>
        </div>
        <div class="row">
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-layout"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-layout"></i></div>
                <h4>Search Pending Reports</h4>
                <p>We can look for the PR or the Pending Report in the portal to get the status or the update about the ongoing cases.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-tab"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-tab"></i></div>
                <h4>Get timely alert</h4>
                <p>The Timely Alerts can help you in remembering the need to check for the pending report in every 15 days.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-rocket"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-rocket"></i></div>
                <h4>Update SPL Reports</h4>
                <p>You can easily add/edit or even can dispose the SPL reports in one click</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-database"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-database"></i></div>
                <h4>Navigation of Progress Reports</h4>
                <p>An easy navigation of the progress report can done in order to check the status of the ongoing activities</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-leaf"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-leaf"></i></div>
                <h4>New Data Entry</h4>
                <p>Adding up of new case files or SPL's can be easily done in order to have a hassle free data management</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
          <!-- Start featured -->
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="lni-pencil"></i>
              </div>
              <div class="featured-content">
                <div class="icon-o"><i class="lni-pencil"></i></div>
                <h4>Free 24/7 Support</h4>
                <p>Check your progress report or the Pending report from anywhere and anytime at your ease and as per your own convenience.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
        </div>
      </div>
    </section>
    <!-- Features Section End -->    

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">View Records</h2>
          <span>Records</span>
          <p class="section-subtitle"></p>
<!--
< ?php 
include("database.php");

$db= $conn;
$tableName="developers";
$columns= ['sno', 'fileno','year','typeofcases','caseno', 'casetitle','oic','status','disposedDate','pendingLastdate','pendingNextDate','remarks'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName"." ORDER BY id DESC";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>-->

<div class="col-lg-12">
  <font color=black>
<table class="table table-striped">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>File Number </th>
        <th>Year</th>
        <th>Types of Cases</th>
        <th>Case Number</th>
        <th>Case Title</th>
        <th>OIC</th>
        <th>Status</th>
        <th>Disposed Date</th>
        <th>Pending Last Date</th>
        <th>Pending Next Date</th>
        <th>Remarks </th>
      </tr>
    </thead>
    <tbody>
      
    <?php
    $res=mysqli_query($conn, "select * from record");
    while($row=mysqli_fetch_array($res))
    {
      echo "<tr>";
      echo "<td>"; echo $row["sno"]; echo "</td>";
      echo "<td>"; echo $row["fileno"]; echo "</td>";
      echo "<td>"; echo $row["year"]; echo "</td>";
      echo "<td>"; echo $row["typeofcases"]; echo "</td>";
      echo "<td>"; echo $row["caseno"]; echo "</td>";
      echo "<td>"; echo $row["casetitle"]; echo "</td>";
      echo "<td>"; echo $row["oic"]; echo "</td>";
      echo "<td>"; echo $row["status"]; echo "</td>";
      echo "<td>"; echo $row["disposedDate"]; echo "</td>";
      echo "<td>"; echo $row["pendingLastdate"]; echo "</td>";
      echo "<td>"; echo $row["pendingNextDate"]; echo "</td>";
      echo "<td>"; echo $row["remarks"]; echo "</td>";
      echo "<td>"; echo "<button type='submit' name='delete' class='btn btn-default'>Delete</buttons>"; echo "</td>";
    }
    ?>
    </tbody>
  </table>
</font>
</div>
        </div>
      </div>

        
      <!-- Container Ends -->
    </section>
  
    <!-- Team section Start -->
    
  
    <!-- Contact Section Start -->
  <!--  <section id="contact" class="section">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">New Entries</h2>
            <span>Entries</span>
            <p class="section-subtitle"> </p>
          </div>
          <div class="row">          
            <div class="col-lg-9 col-md-9 col-xs-12">
              <div class="contact-block">
                <form id="contactForm" action="" method="post" name="form1">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="sno" name="name" placeholder="Year" required data-error="Please enter the Year">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Case No." id="Case No." class="form-control" name="name" required data-error="Please enter the Case Number">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Types of Cases" id="msg_subject" class="form-control" required data-error="Types of Cases">
                        <Label for="Types of Cases" class="form-control">
                          <select id="Types of Cases" name="type of cases">Types of Cases
                            <option value="Select">Select</option>
                            <option value="SPL (Crl.)">SPL (Crl.)</option>
                            <option value="Moto Writ Petition (Cri.)">Moto Writ Petition (Cri.)</option>
                            <option value="Civil Appreal">Civil Appreal</option>
                            <option value="Writ Petition (Criminal)">Writ Petition (Criminal)</option>
                            <option value="Other">Other</option>
                          </select>
                        </Label>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Case No." id="msg_subject" class="form-control" required data-error="Case No.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Case Title" id="msg_subject" class="form-control" required data-error="Case Title">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="OIC" id="msg_subject" class="form-control" required data-error="Enter the OIC">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Status" id="msg_subject" class="form-control" required data-error="Enter the Status">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Disposed on" id="msg_subject" class="form-control" required data-error="Enter the Disposed Date">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
					<div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Disposed on" id="msg_subject" class="form-control" required data-error="Enter the Disposed Date">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Remarks" rows="9" data-error="Enter the Remarks" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button">
                        <button class="btn btn-common btn-effect" name="insert" id="submit" type="submit">Insert</button>
                        <div id="msgSubmit" class="h3 hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                      
                    </div>
                  </div> 

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </section>
  -->
    
            

 <section id="dataentry">
 
 <div class="container">
 
 <div class="col-lg-12 col-md-9 col-xs-12">

 <div class="section-header flexi">          
  <h2 class="section-title">New Entries</h2>
            <span>Entries</span>
            <p class="section-subtitle"> </p>
          </div>

<form action="" name="form1" method="post">
  <div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="fileno">File No.</label> 
<input type="text" class="form-control" id="fileno" placeholder="Enter the File Number" name="fileno">
</div>
  </div>
  <div class="col-md-6">
<div class="form-group">
<label for="year">Year</label>
<input type="text" class="form-control" id="year" placeholder="Enter the Year" name="year">
</div>
</div>
  </div>
  <div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="typeofcases">Type of Case</label>
<select class="custom-select d-block w-100" id="typeofcases" placeholder="Enter the Type of Case" name="typeofcases">
                  <option value=""></option>
				  <option value="SPL (Crl.)">SPL (Crl.)</option>
                  <option value="Moto Writ Petition (Cri.)">Moto Writ Petition (Cri.)</option>
                  <option value="Civil Appreal">Civil Appreal</option>
                  <option value="Writ Petition (Criminal)">Write Petition (Criminal)</option>
                  <option value="Other">Other</option>
                </select>
  </div>
  </div>
<div class="col-md-6">
<div class="form-group">
<label for="caseno">Case No.</label>
<input type="text" class="form-control" id="caseno" placeholder="Enter the Case No." name="caseno">
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<label for="casetitle">Case Title</label>
<input type="text" class="form-control" id="casetitle" placeholder="Enter the Case Title" name="casetitle">
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="oic">OIC</label>
<input type="text" class="form-control" id="oic" placeholder="Enter the OIC" name="oic">
  </div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="status">Status</label>
<input type="text" class="form-control" id="status" placeholder="Enter the Status" name="status">
  </div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label for="disposedDate">Disposed Date</label>
<input type="text" class="form-control" id="disposedDate" placeholder="Enter the Disposed Date" name="disposedDate">
</div>
  </div>
<div class="col-md-4">
<div class="form-group">
<label for="pendingLastdate">Pending Last Date</label>
<input type="text" class="form-control" id="year" placeholder="Enter the Pending Last Date" name="pendingLastdate">
</div>
  </div>
<div class="col-md-4">
<div class="form-group">
<label for="pendingNextDate">Pending Next Date</label>
<input type="text" class="form-control" id="pendingNextDate" placeholder="Enter the Pending Next Date" name="pendingNextDate">
</div>
  </div>
  </div>

<div class="form-group">
<label for="remarks">Remarks</label>
<textarea name="remarks" class="form-control"  placeholder="Enter the Remarks" id="remarks">Enter your remarks here...</textarea>
</div>
<button type="submit" name="insert" class="btn btn-default">Insert</button>
<button type="submit" name="update" class="btn btn-default">Update</button>
<button type="submit" name="delete" class="btn btn-default">Delete</buttons>
  </form>
</section>

    <!-- Contact Section End -->
    <?php
  if(isset($_POST["insert"]))
  {
      mysqli_query($link,"insert into record values(NULL, '$_POST[fileno]','$_POST[year]','$_POST[typeofcases]', '$_POST[caseno]','$_POST[casetitle]','$_POST[oic]','$_POST[status]','$_POST[disposedDate]','$_POST[pendingLastDate]','$_POST[pendingNextDate]')");
  }
  if(isset($_POST["delete"]))
  {
      mysqli_query($link,"insert into record values(NULL, '$_POST[fileno]','$_POST[year]','$_POST[typeofcases]', '$_POST[caseno]','$_POST[casetitle]','$_POST[oic]','$_POST[status]','$_POST[disposedDate]','$_POST[pendingLastDate]','$_POST[pendingNextDate]')");
  }
  ?>
   <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3>Legal Cell</h3>
              <div class="textwidget">
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->
      
      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info float-left">
                <p>Created by Interns</a></p>
              </div>              
              <div class="float-right">  
                Made by Engineering Department
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/color-switcher.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/wow.js"></script> 
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>
    
  </body>

  
</html>