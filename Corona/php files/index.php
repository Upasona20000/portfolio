<!DOCTYPE html>
<head>
	<title></title>
<!--	<?php include 'link.php'; ?>
	<?php include 'style.php'; ?>-->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="style.css">
 
	<script src="https://kit.fontawesome.com/68e2517e5f.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light nav_style p-3">  
		<!-- p-3 for padding, pl-5 for padding left,pr-6 for padding right-->
  <a class="navbar-brand pl-5" href="#">COVID-19-Tracker</a>  
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Preventions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Info
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Masks</a>
          <a class="dropdown-item" href="#">Vaccination</a>
          <a class="dropdown-item" href="#">Facts about Covid</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
    </ul>
  </div>
</nav>
<!--
	Symptoms
fever.
dry cough.
tiredness.
aches and pains.
difficulty breathing
loss of taste or smell.
prevent--
wash hand
stay home
wear a mask
avoid close contact
cover when sneezing
Practice physical distancing by avoiding unnecessary travel and staying away from large groups of people.
stay informed
don't spread rumors
consult doctor
-->

<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-md-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">  
				<!--justify-content-center for center alignment and align-items-center for place it in the middle, w-100 and h-100 should be given to inherit width and height of parent-->
				<img src="images/new-normality.png" height=300 width=300>
			</div>
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-md-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's All Stay Safe & Fight Together Against Novel Cor<span><img src="images/coronavirus.png"></span>na Virus.</h1>
				</div>
		</div>
	</div>
</div>


<!--**************** about section ***************-->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5">
		<h1>About COVID-19</h1>
	</div>
	<div class="row">
		<div class="col-lg-5 col-md-6 col-12">
			<img src="images/corona-virus.jpg" class="img-fluid">
		</div>
		<div class="col-lg-7 col-md-6 col-12">
			<h2>What is Corona Virus?</h2>
			<p>Coronavirus disease 2019 (COVID-19), also known as the coronavirus, or COVID, is a contagious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The first known case was identified in Wuhan, China, in December 2019. The disease has since spread worldwide, leading to an ongoing pandemic.</p>
			<p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>

            <p>Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p>
		</div>
	</div>
</div>


<!--*********************CoronaVirus Symptoms*******************-->
<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5">
		<h1>CoronaVirus Symptoms</h1>
	</div>
	<div class="container">
	    <div class="row">
		    <div class="col-md-4 col-lg-4 col-12 mt-5">
		    	<figure class="text-center">  <!--Figure tag to make the image in center of the div-->
		    	<img src="images/fever.png" class="img-fluid"/>
		    	<figcaption>Fever</figcaption>
		    </figure>
		    </div>
		    <div class="col-md-4 col-lg-4 col-12 mt-5">
		    	<figure class="text-center">  
		    	<img src="images/cough.png" class="img-fluid"/>
		    	<figcaption>Dry Cough</figcaption>
		    </figure>
		    </div>
		    <div class="col-md-4 col-lg-4 col-12 mt-5">
		    	<figure class="text-center">  
		    	<img src="images/tiredness.png" class="img-fluid"/>
		    	<figcaption>Tiredness</figcaption>
		    </figure>
		    </div>
		    <div class="col-md-4 col-lg-4 col-12 mt-5">
		    	<figure class="text-center">  
		    	<img src="images/pain.png" class="img-fluid"/>
		    	<figcaption>Aches and Pains</figcaption>
		    </figure>
		    </div>
		    <div class="col-md-4 col-lg-4 col-12 mt-5">
		    	<figure class="text-center">  
		    	<img src="images/breathing.png" class="img-fluid"/>
		    	<figcaption>Difficulty in Breathing</figcaption>
		    </figure>
		    </div>
		    <div class="col-md-4 col-lg-4 col-12 mt-5">
		    	<figure class="text-center">  
		    	<img src="images/loss-of-smell.png" class="img-fluid"/>
		    	<figcaption>Loss of Taste or Smell.</figcaption>
		    </figure>
		    </div>
		</div>
	</div>
</div>


<!--*********************CoronaVirus Prevention*******************-->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header prevention text-center mb-5">
		<h1>9 Steps CoronaVirus Prevention</h1>
	</div>
	<div class="container">
        <div class="row">
        	<div class="col-lg-4 col-md-4 col-12 mt-5">
        		<div class="row">
        			<div class="col-lg-4 col-md-4 col-12">
        				<figure class="text-center">
        					<img src="images/washing-hands.png" width=90 height=90>
        				</figure>
        			</div> 
        			<div class="col-lg-8 col-md-8 col-12">
        				<p>Wash your hands well and often. Use hand sanitizer when you’re not near soap and water.</p>
        			</div> 
        		</div>
        	</div>
        	<div class="col-lg-4 col-md-4 col-12 mt-5">
        		<div class="row">
        			<div class="col-lg-4 col-md-4 col-12">
        				<figure class="text-center">
        					<img src="images/stay-at-home.png" width=90 height=90>
        				</figure>
        			</div> 
        			<div class="col-lg-8 col-md-8 col-12">
        				<p>Try to stay at home whenever it is possible. Do not go outside until it is necessary.</p>
        			</div> 
        		</div>
        	</div>
        	<div class="col-lg-4 col-md-4 col-12 mt-5">
        		<div class="row">
        			<div class="col-lg-4 col-md-4 col-12">
        				<figure class="text-center">
        					<img src="images/mask.png" width=90 height=90>
        				</figure>
        			</div> 
        			<div class="col-lg-8 col-md-8 col-12">
        				<p>Always wear a face mask whenever you go outside. Make it a habit.</p>
        			</div> 
        		</div>
        	</div>
        	<div class="col-lg-4 col-md-4 col-12 mt-5">
        		<div class="row">
        			<div class="col-lg-4 col-md-4 col-12">
        				<figure class="text-center">
        					<img src="images/avoid.png" width=90 height=90>
        				</figure>
        			</div> 
        			<div class="col-lg-8 col-md-8 col-12">
        				<p>When you do go out in public, leave at least 6 feet of space between you and others. Avoid close contact.</p>
        			</div> 
        		</div>
        	</div>
        	<div class="col-lg-4 col-md-4 col-12 mt-5">
        		<div class="row">
        			<div class="col-lg-4 col-md-4 col-12">
        				<figure class="text-center">
        					<img src="images/cover.png" width=90 height=90>
        				</figure>
        			</div> 
        			<div class="col-lg-8 col-md-8 col-12">
        				<p>Cover your mouth with your elbow when you cough or sneeze, or use a tissue.</p>
        			</div> 
        		</div>
        	</div>
        	<div class="col-lg-4 col-md-4 col-12 mt-5">
        		<div class="row">
        			<div class="col-lg-4 col-md-4 col-12">
        				<figure class="text-center">
        					<img src="images/no-travelling.png" width=90 height=90>
        				</figure>
        			</div> 
        			<div class="col-lg-8 col-md-8 col-12">
        				<p>Avoid travelling to anywhere and avoid large gatherings.</p>
        			</div> 
        		</div>
        	</div>
        	<div class="col-lg-4 col-md-4 col-12 mt-5">
        		<div class="row">
        			<div class="col-lg-4 col-md-4 col-12">
        				<figure class="text-center">
        					<img src="images/informed.png" width=90 height=90>
        				</figure>
        			</div> 
        			<div class="col-lg-8 col-md-8 col-12">
        				<p>Stay informed about this disease and whenever you feel unwell visit a doctor ASAP.</p>
        			</div> 
        		</div>
        	</div>
        	<div class="col-lg-4 col-md-4 col-12 mt-5">
        		<div class="row">
        			<div class="col-lg-4 col-md-4 col-12">
        				<figure class="text-center">
        					<img src="images/rumor.png" width=90 height=90>
        				</figure>
        			</div> 
        			<div class="col-lg-8 col-md-8 col-12">
        				<p>Stop spreading rumors and nevegativity about corona virus.</p>
        			</div> 
        		</div>
        	</div>
        	<div class="col-lg-4 col-md-4 col-12 mt-5">
        		<div class="row">
        			<div class="col-lg-4 col-md-4 col-12">
        				<figure class="text-center">
        					<img src="images/doctor.png" width=90 height=90>
        				</figure>
        			</div> 
        			<div class="col-lg-8 col-md-8 col-12">
        				<p>If you have any symptoms of COVID you should consult a doctor as soon as possible.</p>
        			</div> 
        		</div>
        	</div>
        </div>
	</div>
</div>



<!--*********************Contact us*******************-->
<div class="container-fluid pt-5 pb-5" id="contactid">
	<div class="section_header prevention text-center mb-5">
		<h1>Contact Us</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-offset-2">
	<form action="" method="POST">

				<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name" autocomplete="off" required>
  </div>	

  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
  </div>

<div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="Mobile Number" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="textarea" rows="3"></textarea>
  </div>
<div class="form-group">
	<label>Select Symptoms</label><br>
	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
	<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="fever">
	<label class="custom-control-label" for="customcheckbox1">Fever</label>
	</div>

	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
	<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="cold">
	<label class="custom-control-label" for="customcheckbox2">Cold</label>
	</div>

	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
	<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
	<label class="custom-control-label" for="customcheckbox3">Difficulty in breathing</label>
	</div>

	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
	<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
	<label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
	</div>
</div>
<button type="submit" class="btn btn-primary text-center" name="submit">Submit</button>

</form>
			</div>
		</div>
	</div>
</div>


<!--Corona Latest Updates
<section class="corona_updates">
	<div class="mb-3 mt-5">
		<h3 class="text-center">COVID-19 Updates</h3>
	</div>

	<div class="d-flex justify-content-around align-items-center">  <!--around means it will cover the
		<div>
			<h1 class="count">1,524,266</h1>
			<p1>Passenger screened at airport</p1>
		</div>
		<div>
			<h1 class="count">362</h1>
			<p1>Active COVID-19 cases</p1>
		</div>
		<div>
			<h1 class="count">40</h1>
			<p1>Cured/discharged cases</p1>
		</div>
		<div>
			<h1 class="count">90</h1>
			<p1>Death cases</p1>
		</div>
	</div>
</section>	-->

<!--////////////////top cursor/////////////////-->
<div class="container scrolltop pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<!--*************footer*******************-->

<footer class="footer">
	<div class="container footer_container">
		<div class="row footer_row">
			<div class="footer-col">
				<h4>Covid</h4>
				<ul>
					<li><a href="#">About COVID</a></li>
					<li><a href="#">Symptoms</a></li>
					<li><a href="#">Prevention</a></li>
					<li><a href="#">Contact us</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Tracker</h4>
				<ul>
					<li><a href="#">India</a></li>
					<li><a href="#">World</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Follow me</h4>
				<div class="social-link">
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
				</div>
			</div>
		</div>
	</div>
<div class="footer_style text-white text-center container-fluid">
	<p>Copyright by Upasona</p>
</div>
</footer>
<script type="text/javascript">
	mybutton=document.getElementById("myBtn");
	//when the user scrolls down 20px from the top of the document show the button
	window.onscroll=function() {scrollFunction()};
	function scrollFunction(){
		if(document.body.scrollTop>100 || document.documentElement.scrollTop>100){
			mybutton.style.display="block";
		}
		else{
			mybutton.style.display="none";
		}
	}
	function topFunction(){
		document.body.scrollTop=0;  //for safari
		document.documentElement.scrollTop=0;  //for chrome and others
	}
</script>
</body>
</html>

<!--
<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
	$username=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$symp=$_POST['coronasym'];
	$message=$_POST['textarea'];

    $chk="";

    foreach($symp as $chk1){
    	$chk.=$chk1.",";  //concatenating and storing it in $chk variable

    }
    $insertquery="insert into coronatable(name,email,mobile,coronasym,textarea) values('$username','$email','$mobile','$chk','$message')";
    $query=mysqli_query($con,$insertquery);


    if($query){
	?>
	<script>
		alert("Insertion successful.");
	</script>
	<?php
}
else{
	?>
	<script>
		alert("no Insertion.");
	</script>
	<?php
}
}



?>
-->