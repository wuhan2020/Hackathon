<?php


session_start();

error_reporting(0);
//include('includes/config.php');


if(isset($_POST['send']))
  {


}
?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DiagnoseMe</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
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
function locate() {
   const posStatus = document.querySelector('#posStatus');
   const locInfo = document.querySelector('#locInfo');
   posStatus.innerHTML='Locating...'
   if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition((position)=>{
      const lat  = position.coords.latitude;
      const long = position.coords.longitude;
      posStatus.innerHTML='Your actual location:';
      // Display Latitude and Logitude
      locInfo.innerHTML = `Latitude: ${lat}, Longitude: ${long}`;
      // Create the link. Use map=15-19 for zooming out and in
      // Pass lat and long to openstreetmap
      locInfo.href = `https://www.openstreetmap.org/#map=19/${lat}  /${long}`;
    
	  document.getElementById("plan").src= `https://www.openstreetmap.org/#map=19/${lat}  /${long}`;
      });
   }
}
</script>

<script>
function test_start() { 
document.getElementById("start_button").style.display = "none";

  document.getElementById("id_box").style.display = "block";
  document.getElementById("test_box").style.display = "block";
  document.getElementById("tempbox").style.display = "block";
  location.replace("#id_box")
   
}
</script>
<script>
function temp() {
	
  var temperature = prompt("Connect your thermometer or input your body temperature  manual value in Celsus Deg.", "37.0");
     document.getElementById("temperature").innerHTML = temperature; 
document.getElementById("tempbox").style.display = "none";
	  
	document.getElementById("start_button").style.display = "none";
	    document.getElementById("cough_sneeze").style.display = "block";
	   
}
</script>

<script>
function cough() {
 document.getElementById("no").style.display = "none";
 document.getElementById("yes").style.display = "none";
document.getElementById("cough").style.display = "block";
document.getElementById("test4").style.display = "block";
}
</script>
<script>
function NO1() {
  document.getElementById("cough").innerHTML = "NO";
 document.getElementById("no1").style.display = "none";
 document.getElementById("yes1").style.display = "none";
   document.getElementById("cough_sneeze").style.display = "none";
   document.getElementById("nose_box").style.display = "block";
}
</script>
<script>
function YES1() {
  document.getElementById("cough").innerHTML = "YES";
 document.getElementById("no1").style.display = "none";
 document.getElementById("yes1").style.display = "none";
  document.getElementById("cough_sneeze").style.display = "none";
   document.getElementById("nose_box").style.display = "block";
}
</script>
<script>
function NO2() {
  document.getElementById("nose").innerHTML = "NO";
 document.getElementById("no2").style.display = "none";
 document.getElementById("yes2").style.display = "none";
   document.getElementById("cough_sneeze").style.display = "none";
    document.getElementById("nose_box").style.display = "none";
   document.getElementById("respitory_box").style.display = "block";
}
</script>
<script>
function YES2() {
  document.getElementById("nose").innerHTML = "YES";
 document.getElementById("no2").style.display = "none";
 document.getElementById("yes2").style.display = "none";
 document.getElementById("nose_box").style.display = "none";
 document.getElementById("respitory_box").style.display = "block";
}
</script>
<script>
function NO3() {
  document.getElementById("nose").innerHTML = "YES";
 document.getElementById("no3").style.display = "none";
 document.getElementById("yes3").style.display = "none";
 document.getElementById("travel_box").style.display = "none";
 document.getElementById("reset_button").style.display = "none";
 document.getElementById("result_button").style.display = "block";
 document.getElementById("data").style.display = "block";
}
</script>
<script>
function YES3() {
  document.getElementById("nose").innerHTML = "YES";
 document.getElementById("no3").style.display = "none";
 document.getElementById("yes3").style.display = "none";
 document.getElementById("travel_box").style.display = "none";
 document.getElementById("reset_button").style.display = "none";
 document.getElementById("result_button").style.display = "block";
 document.getElementById("data").style.display = "block";
}
</script>
<script>
function respitory() {
 confirm("We are starting to measure the frequency rate of your breathing. \nClic on OK to start measure.\n Are you ready?");
 document.getElementById("respitory_box").style.display = "none";
 document.getElementById("breathing").style.display = "block";
 count();
}
</script>
<script>
function get_blood() {
	
  var blood = prompt("Use your phone special blood pressure monitor or input manual value en ", "12/7");
     document.getElementById("blood").innerHTML = blood; 
	 document.getElementById("blood_box").style.display = "none";
	 document.getElementById("data").style.display = "none";
document.getElementById("travel_box").style.display = "block";


	   
}
</script>
<script>
function isNumberKey(evt)
      {
         
        var charCode = (evt.which) ? evt.which : event.keyCode
                
        if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=46)
           return false;

         return true;
      }
	  </script>
	    <script>
	  var cpt = 3 ;
var x ;
 
function count()
{
    if(cpt>0)
    {
        if(cpt>1)
        {
            var sec = " secondes.";
        } else {
            var sec = " seconde.";
        }
        document.getElementById("counter").innerHTML = cpt + sec ;
        cpt-- ;
        x = setTimeout("count()",1000) ;
    }
    else
    {
        clearTimeout(x) ;
		document.getElementById("respitory").innerHTML = "16" + "c/s" ;
		 document.getElementById("breathing").style.display = "none";
		 document.getElementById("blood_box").style.display = "block";
    }
}  
</script>
<script>
function result() {
 confirm("You are about to receive the results of the covid-19 SYMPTOMES DETECT.\n Are you ready?");
 document.getElementById("result_button").style.display = "none";
 document.getElementById("result_box").style.display = "block";
 document.getElementById("result").innerHTML = "NOT PROBALE";
 location.replace("#data")
}
</script>
</head>

<body>

    <?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
      


 <?php if($error){?><div class="errorWrap"><strong>Erreur</strong>:<?php echo htmlentities($error); ?> </div><?php }
        else if($msg){?><div class="succWrap"><strong>OK</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
		<center>  <h3 class="mt-4 mb-3"><small>COVID-19 symptomes diagnose form</small></h3></center>

        <!-- Content Row --><form name="sentMessage"  method="post" enctype="multipart/form-data">
        <div class="row">
            <!-- Map Column -->
              <div class="col-lg-3 mb-4" id="id_box" style="display:block">
		<div style="background-color:#d10a10;color:white;font-family:arial black;width:100%!important"><center>1-IDENTIFICATION</center></div> 
			   <div class="control-group form-group">
                        <div class="controls">
                            <label><b>You are</b></label> &nbsp; </br>
                         
						 	<input type="radio" id="choix1"
								 name="choix" value="male">
								<label for="choix1">Male </label>   </br>
									<input type="radio" id="choix2"
								 name="choix" value="female">
								<label for="choix2">Female</label>   
									
							
								
										</div>
                        </div>
			  <label> <b>What is your age ?</b></label>
<input style="width:50px;" type="text" class="form-control" id="age" name="age" placeholder="" onKeyPress="return isNumberKey(event)" maxlength="2"></br>
<label> <button class="btn btn-info" style="font-size:14px" onclick="locate();">Click to locate you</button></label>

<div class="form-control" style="border:none"><span id = 'posStatus'></span></br>
<a id = 'locInfo' target="#"></a></div>

					<div class="control-group form-group">
	  <label class="control-label"><b>Your phone number</b></label>
	  
	<div>  <div class="input-group">
	
	  <div class="input-group-btn">
    <button class="btn btn-info" style="font-size:14px">
        +226
      </button></div>
    <input type="text"  name="telephone" class="form-control"  placeholder="Your phone" required maxlength="11" onKeyPress="return isNumberKey(event)" >
	
      <span class="input-group-addon">
        <i class="fa fa-phone"></i></span>
      
    
 </div>
  </div>  </div>

<center><button class="btn btn-success" id="start_button" type="button" onclick="test_start()">START</button></center>
          

  </div>

  <div class="col-lg-3 mb-4" id="test_box" style="display:none">
               
                
				
				<div style="background-color:#d10a10;color:white;font-family:arial black;width:100%!important"><center>2-SYMPTOMES TESTS</center></div>
                   
					  
					  </br>
					  
						
					
					  <div  id="tempbox" style="display:none">
                       	<div><center>

Getting of your body temperature</br></div>
						<img src="img/temperature.jpg" style="width:100px;height:100px"/>
						<button class="btn btn-info" id="get" type="button" onclick="temp()">Get</button>
											</center>
												</div>
												
												
												
											<div id="cough_sneeze" style="display:none">	
												<div><center>

Do you have frequent coughing or sneezing ?</br></div> 
						<img src="img/cough.png" style="width:110px;height:120px;"/>
												
											
												<button class="btn btn-success" id="no1" type="button" onclick="NO1()">No</button>
												<button class="btn btn-danger" id="yes1" type="button" onclick="YES1()">Yes</button></center>
												</div>
												
												<div id="nose_box" style="display:none">	
												<div><center>

Do you have a cold or runny nose ?</br></div> 
						<img src="img/nose.jpg" style="width:100px;height:100px;"/>
												
											
												<button class="btn btn-success" id="no2" type="button" onclick="NO2()">No</button>
												<button class="btn btn-danger" id="yes2" type="button" onclick="YES2()">Yes</button></center>
												</div>
												
												<div id="respitory_box"  style="display:none">	
								<center>
Click on REC to measure the frequency rate of your breathing 
<button class="btn btn-info"  type="button" onclick="respitory()">REC</button></br>
								
								</center>
												</div>
												<div id="breathing"  style="display:none">	
								
								<div><center>

Please continu breathing on your phone microphone for...</br></center></div> 
						<img src="img/respitory.jpg" style="width:100px;height:100px;"/>
 
</center> 

<span id="counter" style="color:red;font-family:arial black;" >---</span>
					 </br>
								
								
												</div>
												
											 <div  id="blood_box" style="display:none">
                       	<div><center>

Getting of your blood pressure</br></div>
						<img src="img/blood.jpg" style="width:100px;height:100px"/>
						<button class="btn btn-info"  type="button" onclick="get_blood()">Get pressure</button>
											</center>
												</div>	
												
												
												<div id="travel_box" style="display:none">	
												<div><center>


Have you been recently in a city or country where COVID-19 has been declared? </br>Or did you have contact or proximity with someone confirmed to COVID-19 ?</br>
<img src="img/travel.jpg" style="width:100px;height:100px;"/>
</center></div> 
							
											<center>
												<button class="btn btn-success" id="no3" type="button" onclick="NO3()">No</button>
												<button class="btn btn-danger" id="yes3" type="button" onclick="YES3()">Yes</button></center>
												</div>
	
                    
                    <div id="success"></div>
					<center><button class="btn btn-success" style="display:none" id="result_button" type="button" name="send" onclick="result()">VIEW RESULT</button></center>
					  <div id="data" >
					Body temp. in °C : <span id="temperature" style="color:red;font-family:arial black;" >---</span>
					 </br>
					 Cough or sneez intensity : <span id="cough" style="color:red;font-family:arial black;" >---</span>
					  </br>
				Runny nose : <span id="nose" style="color:red;font-family:arial black;" >---</span>
					  </br>
					  Breathing frequency : <span id="respitory" style="color:red;font-family:arial black;" >---</span>
					  </br>
					  
					  Blood pressure: <span id="blood" style="color:red;font-family:arial black;" >---</span>
					  </br>
					  Travels information : <span id="travel" style="color:red;font-family:arial black;" >---</span>
					  </br>
					  <center>
					  <a href="test.php"> <input type="button" id="reset_button" style="color:white;  cursor:pointer;font-size:14px;background:pink;border:solid;border-color:pink"  class="btn btn-primary " value="Reset" /></a></center>
				
					
					 </div>
                </form>
            </div> 

					  <div class="col-lg-5 mb-4" id="result_box" style="display:none">
					  <div style="background-color:#d10a10;color:white;font-family:arial black;width:100%!important"><center>3-RESULTS</center></div> 
					  </br>
					  
					    <center><label><b>YOUR RESULT :</b><span id="result" style="color:green;font-family:arial black;" > ---</span></label></center>
</br>					   
					  <b color="red">NOTES: </b>
						</br><i style="color:red;" class="fa fa-info-circle"></i> If the result of your diagnosis is "<b color="red">PROBABLE</b>", do not panic, you do not have necessarily a COVID-19 infection. Do not move from your location, an ambulance will come to assist you for in-depth tests.
						</br>
						<i style="color:red;" class="fa fa-info-circle"></i> If the result of your diagnosis is "<b color="red">NEGATIVE</b>", refer to <a href="prevent.php">PREVENTIONS GUIDE </a>.
						
						</br>Your location below:
                    <iframe src="location.html" frameborder= "0"style="width:100%;height:420px;"></iframe>

 
  
</div>

            

            
        </div>
        <!-- /.row -->


    </div>
    <!-- /.container -->
<?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
