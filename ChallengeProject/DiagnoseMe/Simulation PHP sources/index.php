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
       <h2 class="mt-4 mb-3"><small><b>Realtime remote diagnose system of corrona virus suspected cases.</b></small></h2>
 
    
	 
	
	   <div class="row">
	    
	 <div class="col-lg-6 mb-4">
	   <img  src="img/alerte.png" width = "100%" height = "320px" />
	    </div>
	   
	    		 <div class="col-lg-3 mb-4">
	    <h6 class="mt-3 mb-5" style="text-align:left"><small><i style="color:red;" class="fa fa-info-circle fa-2x"> </i><B style="font-size:16px">	About DiagnoseMe ?</B>
<br> A remote self-diagnosis of symptoms  and suspected cases mapping and notification. 
<br><br><i style="color:red;" class="fa fa-info-circle fa-2x"></i><B style="font-size:16px">	How to use ?</B>
<br>After a travel or presence on public place  
<i><br><b>1.	Click on "DiagnoseMe";
<br>2.	Enter your age, location and contact;
<br>3.	Follow the different tests requested;
<br>4.	Get your results.</b>
<br>If the test results is positive. Do not worry an ambulance will come and assist you for further examination.Stay home.
<br>If the test results is nagative see preventions guide.
  <br><br>  <a href="test.php"> <input type="button" style="color:white;  cursor:pointer;font-size:14px;background:red;border:solid;border-color:red"  class="btn btn-primary " value="DiagnoseMe" /></a>
	</i>  
	   </small></h6>
	    </div>
	   
	   <div class="col-lg-3 mb-4">
	    <h6 class="mt-3 mb-5" style="text-align:left"><small><B style="color:red;font-size:16px">In order to reduce the risk of transmission of  on the way to the hospital and promote rapid management</B>
<br>You don't need to feel bad to do these tests. As soon as you leave a public place or you come from a trip, proceed to the remote diagnosis order to reduce the risk of transmission on the way to the hospital and promote rapid management




<br><br> What are the differents tests detect ?
<b style="font-size:14px"><br>&bull; Body temperature)
<br>&bull; Coughs and Sneezes
<br>&bull; Respiratory signs 
<br>&bull; Blood pressure
<br>&bull; Travel information


</b><br><br><br>
	
		<a href="prevent.php"> <input type="button" style="color:white;  cursor:pointer;font-size:14px;"  class="btn btn-success " value="How to prevent ?" /></a>
		
	   </small></h6>
	  
	    </div>
		

	   </div>
	   
<div class="row-centered">
 <div class="col-md-12">
<img width = "100%" src="img/present.jpg"/></img>
</div>
</div>

</div>






    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<footer>
<?php include('includes/footer.php');?></footer>
</body>

</html>
