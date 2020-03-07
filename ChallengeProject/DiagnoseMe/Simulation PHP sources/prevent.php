<?php
error_reporting(0);
//include('includes/config.php');

?>


<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
		<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>
        <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>

	  <script>
function insalubrite()
{
var n = 12;  
var cpt = 0; 
var duree = 5;
var delta = Math.ceil((duree * 500) / n);
 var node = document.getElementById("sale");  function countdown() { 
 node.innerHTML = ++cpt; 
 if( cpt < n ) { 
 
 setTimeout(countdown, delta);
  
   } 
   }
  setTimeout(countdown, delta);
  }
  
  function corruption()
{
var nc = 24;  
var cptc = 0; 
var dureec = 5;
var deltac = Math.ceil((dureec * 500) / nc);
 var node = document.getElementById("corruption");  function countdown() { 
 node.innerHTML = ++cptc; 
 if( cptc < nc ) { 
 
 setTimeout(countdown, deltac);
  
   } 
   }
  setTimeout(countdown, deltac);
  }
  
    function vandalisme()
{
var nv = 2;  
var cptv = 0; 
var dureev = 5;
var deltav = Math.ceil((dureev * 500) / nv);
 var node = document.getElementById("vandalisme");  function countdown() { 
 node.innerHTML = ++cptv; 
 if( cptv < nv ) { 
 
 setTimeout(countdown, deltav);
  
   } 
   }
  setTimeout(countdown, deltav);
  }
      function deterioration()
{
var nd = 12;  
var cptd = 0; 
var dureed = 5;
var deltad = Math.ceil((dureed * 500) / nd);
 var node = document.getElementById("deterioration");  function countdown() { 
 node.innerHTML = ++cptd; 
 if( cptd < nd ) { 
 
 setTimeout(countdown, deltad);
  
   } 
   }
  setTimeout(countdown, deltad);
  }
</script>
	
	
	
	
<?php include('includes/header.php');?>
</head>

<body style="background: url(img/);background-repeat:no-repeat; background-attachment:fixed; background-position:center;background-size:cover" onload="insalubrite();corruption();vandalisme();deterioration()">


<center>
    <!-- Page Content -->
    <div class="container" >

        <!-- Page Heading/Breadcrumbs -->
       <h2 class="mt-4 mb-3"><small><b>COVID-19 PREVENTION GUIDE</b></small></h2>
 
    <a href="index.php"> <input type="button" style="color:white;  cursor:pointer;font-size:12px;"  class="btn btn-success" value="Home" /></a> 
	<a href="#vue"> <input type="button" style="color:white;  cursor:pointer;font-size:12px;"  class="btn btn-danger" value="Suspected" onclick="insalubrite();corruption();vandalisme();deterioration()"/></a>
	<a href="test.php"> <input type="button" style="color:white;  cursor:pointer;font-size:12px;background:red;border:solid;border-color:red"  class="btn btn-primary " value="DiagnoseMe" /></a>
	   <br>  <br>
	
	   <div class="row" id="prevent">
	    
	  <div class="col-lg-3 col-sm-5 portfolio-item" >
       
               <div class="card h-80">
                    
                    <div class="card-block"style="color:white!important; background:orange;>
                        <p class="card-text" > <i style="color:white;" class="fa fa-info-circle fa-2x"> </i><B style="font-size:16px">	Conseils</B><h7 class="card-title"></h7></b></div>
						 <p class="card-text"><b><img  src="img/stage.jpg" width = "100%" /></font></b>
						  <p class="card-text" style="text-align:center">&nbsp;&nbsp;&nbsp;text here</font></b><br><br>
						 
						
                </div>
				
            </div>
			 

			  <div class="col-lg-3 col-sm-5 portfolio-item" >
       
               <div class="card h-80">
                    
                    <div class="card-block"style="color:white!important; background:orange;>
                        <p class="card-text" > <i style="color:white;" class="fa fa-info-circle fa-2x"> </i><B style="font-size:16px">	Conseils</B><h7 class="card-title"></h7></b></div>
						 <p class="card-text"><b><img  src="img/stage.jpg" width = "100%" /></font></b>
						  <p class="card-text" style="text-align:center">&nbsp;&nbsp;&nbsp;text here</font></b><br><br>
						 
						
                </div>
				
            </div>
			 <div class="col-lg-3 col-sm-5 portfolio-item" >
       
                <div class="card h-80">
                    
                    <div class="card-block"style="color:white!important; background:orange;>
                        <p class="card-text" > <i style="color:white;" class="fa fa-info-circle fa-2x"> </i><B style="font-size:16px">	Conseils</B><h7 class="card-title"></h7></b></div>
						 <p class="card-text"><b><img  src="img/stage.jpg" width = "100%" /></font></b>
						  <p class="card-text" style="text-align:center">&nbsp;&nbsp;&nbsp;text here</font></b><br><br>
						 
						
                </div>
				
            </div>
			 <div class="col-lg-3 col-sm-5 portfolio-item" >
       
           <div class="card h-80">
                    
                    <div class="card-block"style="color:white!important; background:orange;>
                        <p class="card-text" > <i style="color:white;" class="fa fa-info-circle fa-2x"> </i><B style="font-size:16px">	Conseils</B><h7 class="card-title"></h7></b></div>
						 <p class="card-text"><b><img  src="img/stage.jpg" width = "100%" /></font></b>
						  <p class="card-text" style="text-align:center">&nbsp;&nbsp;&nbsp;text here</font></b><br><br>
						 
						
                </div>
				
            </div>
			 <div class="col-lg-3 col-sm-5 portfolio-item" >
       
             <div class="card h-80">
                    
                    <div class="card-block"style="color:white!important; background:#D10A10;>
                        <p class="card-text" > <i style="color:white;" class="fa fa-info-circle fa-2x"> </i><B style="font-size:16px">	Conseils</B><h7 class="card-title"></h7></b></div>
						 <p class="card-text"><b><img  src="img/stage.jpg" width = "100%" /></font></b>
						  <p class="card-text" style="text-align:center">&nbsp;&nbsp;&nbsp;text here</font></b><br><br>
						 
						
                </div>
				
            </div>
			 <div class="col-lg-3 col-sm-5 portfolio-item" >
       
               <div class="card h-80">
                    
                    <div class="card-block"style="color:white!important; background:#D10A10;>
                        <p class="card-text" > <i style="color:white;" class="fa fa-info-circle fa-2x"> </i><B style="font-size:16px">	Conseils</B><h7 class="card-title"></h7></b></div>
						 <p class="card-text"><b><img  src="img/stage.jpg" width = "100%" /></font></b>
						  <p class="card-text" style="text-align:center">&nbsp;&nbsp;&nbsp;text here</font></b><br><br>
						 
						
                </div>
				
            </div>
			 <div class="col-lg-3 col-sm-5 portfolio-item" >
       
               <div class="card h-80">
                    
                    <div class="card-block"style="color:white!important; background:#D10A10;>
                        <p class="card-text" > <i style="color:white;" class="fa fa-info-circle fa-2x"> </i><B style="font-size:16px">	Conseils</B><h7 class="card-title"></h7></b></div>
						 <p class="card-text"><b><img  src="img/stage.jpg" width = "100%" /></font></b>
						  <p class="card-text" style="text-align:center">&nbsp;&nbsp;&nbsp;text here</font></b><br><br>
						 
						
                </div>
				
            </div>
			 <div class="col-lg-3 col-sm-5 portfolio-item" >
       
          <div class="card h-80">
                    
                    <div class="card-block"style="color:white!important; background:#D10A10;>
                        <p class="card-text" > <i style="color:white;" class="fa fa-info-circle fa-2x"> </i><B style="font-size:16px">	Conseils</B><h7 class="card-title"></h7></b></div>
						 <p class="card-text"><b><img  src="img/stage.jpg" width = "100%" /></font></b>
						  <p class="card-text" style="text-align:center">&nbsp;&nbsp;&nbsp;text here</font></b><br><br>
						 
						
                </div>
				
            </div>
			 
	   </div>
	   
	   <h3 id="vue" class="mt-4 mb-3"><small><b>Diagnose Results</b></small></h3>
	  </br> <div  class="row">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<div class="col-md-5" >
<div class="font-italic" ></div>
  <img  src="img/positive.png" width = "130px" height = "140px" /></br></br>

<b style="font-size:14px;">Negatives </br> results
</b>
</br>
<h1   id="sale" style="color:green;  cursor:pointer;font-size:24px; font-family:arial black "> <b>00000</b></h1>    


</div>


<div class="col-md-5">
<div class="font-italic" ></div>
  <img  src="img/negative.png" width = "140px" height = "140px" /></br></br>

<b style="font-size:14px;">Suspected </br>cases</b>
</br>
<h1   id="vandalisme" style="color:red;  cursor:pointer;font-size:24px; font-family:arial black "> <b>00000</b></h1>    
</div>


</div>
	  
</br>	  
	   <h3 class="mt-4 mb-3"><small><b>Realtime map</b></small></h3>
	  </br>
	<div class="row-centered">
 <div class="col-md-12">
<iframe  frameborder="0" width = "100%" height = "520px" src="carte.html"/></iframe>
</div>
</div>

 <a href="index.php"> <input type="button" style="color:white;  cursor:pointer;font-size:12px;"  class="btn btn-success" value="Home" /></a> 
	<a href="#prevent"> <input type="button" style="color:white;  cursor:pointer;font-size:12px;"  class="btn btn-success" value="How to prevent" onclick="insalubrite();corruption();vandalisme();deterioration()"/></a>
	<a href="test.php"> <input type="button" style="color:white;  cursor:pointer;font-size:12px;background:red;border:solid;border-color:red"  class="btn btn-primary " value="DiagnoseMe" /></a>
	   <br> <br> 
</center>
 
</div>






    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<footer>
<?php include('includes/footer.php');?></footer>
</body>

</html>
