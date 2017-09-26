<?php   function getTitle() 
{    $url = $_SERVER['PHP_SELF'];    if(strpos($url,'visitingfaculty.php') > -1) 
{            return 'Visiting Faculty | CS Department';        }
else if(strpos($url,'faculty.php') > -1)
 {      return 'Faculty | CS Department';    }
  else if(strpos($url,'academics.php') > -1) 
  {      return 'Academics | CS Department';    }
   else if(strpos($url,'gallery.php') > -1)
    {      return 'Gallery | CS Department';    }
     else if(strpos($url,'contact.php') > -1)
      {            return 'Contact Us | CS Department';        }
       else if(strpos($url,'news.php') > -1) 
       {      return 'News | CS Department';      }
          else if(strpos($url,'placements.php') > -1) 
          {      return 'Placements | CS';      } 
           else if(strpos($url,'alumni.php') > -1) 
           {      return 'Alumni Database | CS Department';      } 
            else if(strpos($url,'students.php') > -1) 
            {      return 'Student Database | CS Department';      }
             else if(strpos($url,'visit.php') > -1) 
             {      return 'Visit Us | CS Department';      }
              else if(strpos($url,'index.php') > -1 || strpos($url,'php') < 0 )
               {      return 'TPO | CS Department';    }
                else {      return 'BHU - CS Department';    }}
                ?>
            <!DOCTYPE html>
                <html>  
                <head>   
                 <title><?php echo getTitle();?></title>  
                   <meta name="viewport" content="width=device-width, user-scalable=no">  
                     <meta http-equiv="content-Type" content="text/html; charset=utf-8">     
                     <link rel="stylesheet" href="css/style.css">   
                     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">    
                     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css"> 
                     <link rel="icon" type="image/png" href="img/logo.png">  
                     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>   
                     <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>  
                     <script src="js/website.js"></script> 

                     
 <!------------------------------>
  <style type="text/css">
  body{	font-family: 'Lato', sans-serif; }
#page-content p, #main-content p{font-size: 14px;}
h2,h3{padding: 0 !important;
	color: rgba(30, 169, 174, 1);}
  </style>                 
 <!---------------------------->                    
</head> 
    <body> 
           <div id="header" class="page-header clearfix">  
           <div class="col-sm-9 col-xs-8 unselectable">  
           <h1 style="font-size:40px" id="mainHeader"><a href="http://bhu.ac.in"><img src="img/logo.png"></a>
           
           TRAINING AND PLACEMENT OFFICE
           <small style="font-size: 18px;">DEPARTMENT OF COMPUTER SCIENCE, BANARAS HINDU UNIVERSITY</small></h1> 
           <h1 id="smallerHeader">TPO<small>BHU CS</small></h1>    </div> 
           
            </div> 
              
              <nav class="navbar navbar-default" id="sub-menu">  
              <div class="navbar-header">  
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">      
              <span class="sr-only">Toggle navigation</span>      
              <span class="icon-bar"></span>      
              <span class="icon-bar"></span>      
              <span class="icon-bar"></span>    </button>  
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">    
              <ul class="nav navbar-nav navbar-right">      
              <li><a href="index.php">ABOUT US</a></li>      
              <li class="dropdown">        
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFILE<b class="caret"></b></a>        
              <ul class="dropdown-menu">    
              <li><a href="http://www.bhu.ac.in/science/ComputerScience/">About CS BHU</a></li> <hr />  
              <li><a href="placement.php">Placement</a></li>    
              <li><a href="academics.php">Academics</a></li>  
               <li><a href="faculty.php">Faculty</a></li>
               <li><a href="gallery.php">Gallery</a></li>   
                <li><a href="research.php">Research</a></li>        
              <li><a href="alumni.php">Alumni</a></li>        </ul>      </li>      
              <li class="dropdown">        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FOR COMPANIES<b class="caret"></b></a> 
              <ul class="dropdown-menu">     
              <li><a href="invitation.php">Invitation</a></li> 
              <li><a href="facilities.php">Facilities</a></li>     
              <li><a href="company_reg.php">Company Contact Form</a></li>
              <li><a target="_blank" href="http://www.studentprofilebhucstpo.in/">Student's Profile Section</a></li>
              <li><a href="academics.php">List of Courses</a></li>
                <hr />         
              <li><a href="./download/JobNotificationForm.docx" download><span class="glyphicon glyphicon-download-alt"></span> Job Notification Form</a></li>  
              <li><a href="./download/InternshipNotificationForm.docx" download><span class="glyphicon glyphicon-download-alt"></span> Internship Notification Form</a></li>        
              <li><a href="./download/PlacementBrochure2018.pdf" download><span class="glyphicon glyphicon-download-alt"></span> Placement Brochure</a></li>        </ul>      </li>      
              
                   
              <li class="dropdown">        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FOR STUDENTS<b class="caret"></b></a>        
              <ul class="dropdown-menu">          <li><a href="students_inst.php">General Instructions</a></li>          
              <li><a target="_blank" href="http://www.studentprofilebhucstpo.in/">Student's Profile Section</a></li>
              <li><a href="students.php">Student Panel</a></li>
               <hr />
              <li><a href="./download/StandardCVFormat.docx" download><span class="glyphicon glyphicon-download-alt"></span> Standard CV Format</a></li>        
                   </ul>      </li>      
               
              <li class="dropdown">        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTACT US<b class="caret"></b></a>        
              <ul class="dropdown-menu">          <li><a href="contact.php">Contact Information</a></li>          
              <li><a href="visit.php">Visiting Us</a></li>        </ul>      </li>    </ul>  </div>  </nav>  
              <div class="container">    
              <div class="row">
              <?php 
              if(getTitle() != 'TPO | CS Department') 
              {  echo '<div id="sidebar" class="col-md-3"><h3>Quick Links</h3>
              <ul> <li><h5><a target="_blank" href="http://www.studentprofilebhucstpo.in/">Students Profile Section</a></h5></li> 
              <li><h5><a href="placement.php">Placement</a></h5></li>
              <li><h5><a href="gallery.php">Gallery</a></h5></li>
              <li><h5><a href="./download/JobNotificationForm.docx" download>Job Notification Form</a></h5></li> 
              <li><h5><a href="./download/InternshipNotificationForm.docx" download>Internship Notification Form</a></h5></li> 
               <li><h5><a href="company_reg.php">Company Contact Form</a></h5></li> 
               <li><h5><a href="./download/PlacementBrochure2018.pdf" download>Placement Brochure</a></h5></li>
               <li><h5><a href="./download/StandardCVFormat.docx" download>Standard CV Format</a></h5></li>
              <li><h5><a href="contact.php">Contact Us</a></h5></li> 
              </ul></div>'
              ;}