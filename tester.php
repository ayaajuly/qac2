<!DOCTYPE html>
<html>
<head>
<title>QAC</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1, h2, h3, h4, h5, h6 {
    font-family: "Raleway", sans-serif;
}
</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar">
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="qac.png" style="width:60%;" class="w3-round"><br><br>
    <h4><b>Content</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="#takwim" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>TAKWIM</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>COLLEGE</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="qac.png" style="width:200px;" class="w3-square w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
      <h1><b>QUALITY ADVANCEMENT CENTRE</b></h1>
    </div>
  </header>
  
  <!-- About section -->
  <div class="w3-row-padding w3-padding-10" id="about">
    <div class="w3-col m12">
      <h2>About QAC</h2>
      <p>Quality Advancement Centre (QAC) is a business unit of Universiti Tenaga Nasional (UNITEN), established to ensure and enhance the quality of education, research, and services provided by the university. QAC is responsible for the development and implementation of quality assurance policies, guidelines, and standards that align with the national and international standards. The unit also provides comprehensive quality assurance support and services to all academic and administrative units of the university, monitoring and evaluating the effectiveness and efficiency of academic and administrative processes.</p>
    </div>
  </div>

  <!-- Takwim section -->
  <div class="w3-row-padding w3-padding-10" id="takwim">
    <div class="w3-col m6">
      <p><strong>TAKWIM PELAKSANAAN AUDIT PEMATUHAN PROGRAM FASA KEDUA TAHUN 2024-2028</strong></p>
      <img src="image.png" alt="Me" style="width:200%">
    </div>
  </div>

  <!-- Download button -->
  <hr>
  <p>
    <a href="file:///C:/Users/USER/Documents/A(QAC)/takwimaudit.pdf">
      <button class="w3-button w3-dark-grey w3-padding-large w3-margin-top w3-margin-bottom">
        <i class="fa fa-download w3-margin-right"></i>Download Takwim
      </button>
    </a>
  </p>
  <hr>

  <!-- Logo Images -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <img src="swalogo.png" alt="Me" style="width:50%">
    </div>
    <div class="w3-col m6">
      <img src="swa.png" alt="Me" style="width:100%">
    </div>
  </div>

  <!-- College Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>College</b></h4>
    <p><a href="file:///C:/Users/USER/Documents/A(QAC)/accounting.xlsx">College of Business and Accounting</a></p>
    <p><a href="file:///C:/Users/USER/Documents/A(QAC)/bussiness.xlsx">UNITEN Business School</a></p>
    <p><a href="file:///C:/Users/USER/Documents/A(QAC)/engineering.xlsx">College of Engineering</a></p>
    <p><a href="file:///C:/Users/USER/Documents/A(QAC)/computing.xlsx">College of Computing and Informatics</a></p>
    <p><a href="file:///C:/Users/USER/Documents/A(QAC)/graduate.xlsx">College of Graduate Studies</a></p>
  </div>

<!-- Timeline Section -->
<div class="w3-container w3-padding-large">
  <div class="block-body-wrapper">
    <div class="block-header-wrapper d-flex justify-content-between align-items-center">
        <h4 id="instance-2-header" class="block-header" title="Timeline block">Timeline</h4>
        <div class="card-text content block-content-area edw-block-body">
            <div id="block-timeline-6694c463c92246694c463c35c33-1" class="block-timeline" data-region="timeline">
                <div class="edw-timeline-filters d-flex flex-gap-4">
                    <div class="">
                        <div data-region="day-filter" class="dropdown">
                            <button type="button" class="btn dropdown-toggle icon-no-margin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    aria-label="Filter timeline by date" aria-controls="menudayfilter"
                                    title="Filter timeline by date" aria-describedby="timeline-day-filter-current-selection">
                                <span id="timeline-day-filter-current-selection" data-active-item-text>All</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Upload Form -->
                <div class="w3-container">
                    <h5>Upload Documents:</h5>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <br><br>
                        <input type="submit" value="Upload" class="w3-button w3-dark-grey w3-padding-large">
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
                     <!-- Footer -->
  <footer class="w3-container w3-padding-10 w3-dark-grey">
    <div class="w3-row-padding">
      <div class="w3-third">
        <h6><strong>Quality Advancement Centre (QAC)</strong></h6>
        <p><small>Contact: 038300<br> Email: qac@unitend.edu.my</small></p>
      </div>
      <div class="w3-third">
        <h6><strong>Address</strong></h6>
        <p><small>LEVEL 3, Admin Building, UNITEN-PUTRAJAYA, 43900, Kajang, Selangor</small></p>
      </div>
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-10">
    <small>© 2024 QUALITY ADVANCEMENT CENTRE (QAC)</small>
  </div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
