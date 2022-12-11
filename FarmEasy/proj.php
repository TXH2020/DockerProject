<!DOCTYPE html>
<html lang="en">
    
<head>
	<meta charset="utf-8">
	<title>
		FarmEasy**
	</title>
</head>
<body bgcolor="Azure">
 <head><h1 align="center">
		<font face="Lato" color="DarkOliveGreen" size="7">
			FARMEASY 
		</font>
	</h1>
<style>
.box1{
position:relative;
left:78px;
top:14px;}
.box2{
position:relative;
left:360px;
bottom:40px;}
.box3{
position:relative;
left:-2px;}
.box4{
position:absolute;
left:640px;
bottom:-204px;
max-width:400px;}
.box5{
position:absolute;
left:640px;}
.blue {
    background: #347fd0;
}


.news {
    box-shadow: inset 0 -15px 30px rgba(0,0,0,0.4), 0 5px 10px rgba(0,0,0,0.5);
       width: 300px;
       height:600px;
    position:absolute;
    margin: -525px 0px 0px 1200px;
     
    overflow: hidden;
    border-radius: 4px;
    padding: 1px;
    -webkit-user-select: none;
}

.news span {
    float: left;
    color: red;
    padding: 20px;
    width:100%;
    position: relative;
    bottom: 1%;
    box-shadow: inset 0 -15px 30px rgba(0,0,0,0.4);
    font: 16px 'Raleway', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -webkit-user-select: none;
    cursor: pointer;
}

.text1{

 box-shadow:none !important;S
    width: 300px;
}
#date {
            font-size: 20px;
            width: 140px;
	    position:absolute;
            margin:-210px 0px 0px 1200px;
            text-align: center;
	    border: 2px solid black;
        }
.search
{
position:absolute;
left:1040px;
top:160px;}
</style>
</head>
	
	<h3 >
		<div class="box1">
		<img src="logo.jpg" style="max-width:100px"></img></div>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div class="box2"><font face=>	<a href="#">HOME</a>&nbsp;&nbsp;&nbsp;
                        <a href="video.html">VIDEOS</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="data.php">PRODUCTS</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="about.html">ABOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="contacts.html">CONTACT US</a>
		</font></div>
	</h3><br><br>
<head>
  
  
    <style>
        #clock {
            font-size: 20px;
            width: 130px;
	    position:absolute;
            margin:-250px 0px 0px 1200px;
            text-align: center;
            border: 2px solid black;
	
    </style>
</head>
<div id="clock">8:10:45</div>
  
    <script>
        setInterval(showTime, 1000);
        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            am_pm = "AM";
  
            if (hour > 12) {
                hour -= 12;
                am_pm = "PM";
            }
            if (hour == 0) {
                hr = 12;
                am_pm = "AM";
            }
  
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;
  
            let currentTime = hour + ":" 
                + min + ":" + sec + am_pm;
  
            document.getElementById("clock")
                .innerHTML = currentTime;
        }
  
        showTime();
    </script>
<div id="date">
	<table>
			<tr>
			<td >
			
			<?php
				date_default_timeZone_set("Asia/Calcutta");
				echo date('d-m-Y');
			?>
			</td>
			</tr>
	</table>
	</div>
<div class="search">
			<table>
			<form action="search1.php" method="post">
			<tr>
				<td>  <label for="sear"><b><font face="Lato" color="DarkOliveGreen" size="5">Search:</font></b></label> </td>
       				<td>  <input type="text" name="search1" id="search1.php"> </td>
			</tr>
			<tr>
				<td> &nbsp; </td>
       				<td> <input type="submit" name="search" value="submit" > </td>
			</tr></form>
			</table>
		</div>
<head>
<style>
h1 {
  color: black;
  font-family: Calibri;
}
h2 {
  color: red;
  font-family: Calibri;
}
.box{
float:left;
margin:0px 0px 75px 40px;
height:1000px;
width:220px;
background-color:CadetBlue;
border-style:solid;}
meta{
float:right;}
marquee{
border-style:solid;
background-color:white;}
</style></head>

  	<div class="box">
        <form action="insert.php" method="post">
              
            <center>
        <h1><i>FarmEasy</i></h1>
	<h2>Farmer Registration Form</h2>
    </center>
<p>
               <b> <label for="firstName">First Name:</label></b>
                <input type="text" name="first_name" id="firstName">
  
</p>
<p>          
              

               <b> <label for="lastName">Last Name:</label></b>
                <input type="text"   name="last_name" id="lastName">
           
 </p> 
  
  
              
              
<p>		<b>Gender:</b>
                <input type="radio" name="gender" value="Male" id="male">Male
 		<input type="radio" name="gender" value="Female" id="female">Female
            </p>
  
  
              
 <p>
               <b> <label for="city">City/Village/Town:</label></b>
                <input type="text"   name="city/village/town"  id="city">
                       
          

               <b> <label for="district">District:</label></b>
                <input type="text"  name="district"  id="district">
            


               <b> <label for="state">State:</label></b>
                <input type="text"   name="state" id="state">
            </p>
  
              
              
              
<p>
              <b> <label for="emailAddress">Aadhar Number:</label></b>
                <input type="tel" name="email" id="emailAddress" placeholder="12 digit number">


              <b> <label for="phone">Phone no.:</label></b>
               <input type="tel" id="phone" name="phone_no" placeholder="10 digit number">
            </p>

<script>
var arr=new Array();
var arr2=new Array();
var a1=new Array();
var a2=new Array();
var a3=new Array();
var a4=new Array();
var arr4=new Array();
</script>    
 <script type="text/javascript">
    function ShowHideDiv(chkPassport) {
if(chkPassport='chkPassport4'){
var dvPassport = document.getElementById("dvPassport");
dvPassport.style.display = chkPassport4.checked ? "block" : "none";}
if(chkPassport='chkPassport1'){
var dvPassport1 = document.getElementById("dvPassport1");
dvPassport1.style.display = chkPassport1.checked ? "block" : "none";}
if(chkPassport='chkPassport2'){
var dvPassport2 = document.getElementById("dvPassport2");
dvPassport2.style.display = chkPassport2.checked ? "block" : "none";}
if(chkPassport='chkPassport3'){
var dvPassport3 = document.getElementById("dvPassport3");
dvPassport3.style.display = chkPassport3.checked ? "block" : "none";}
    }
</script>

<p id="major"><b>Crop_Type:</b>
<input type="checkbox" id="chkPassport4" value= "1" onclick="ShowHideDiv(this)" />
    Fruits



<input type="checkbox" id="chkPassport1" value= "2" onclick="ShowHideDiv(this)" />
   Vegetables



<input type="checkbox" id="chkPassport2" value= "3" onclick="ShowHideDiv(this)" />
   Pulses



<input type="checkbox" id="chkPassport3" value= "4" onclick="ShowHideDiv(this)" />
   Grains
</p>

<div id="dvPassport" style="display: none">   
Apple <input type="checkbox" id="apple" value="apple" />
Mango <input type="checkbox" id="mango" value="mango" />
Orange <input type="checkbox" id="orange" value="orange" />
Guava <input type="checkbox" id="guava" value="guava" />
Lemon <input type="checkbox" id="lemon" value="lemon" />
</div>


<div id="dvPassport1" style="display: none">   
Cucumber <input type="checkbox" id="cucumber" value="cucumber" />
Tomato <input type="checkbox" id="tomato" value="tomato" />
Radish <input type="checkbox" id="radish" value="radish" />
Spinach <input type="checkbox" id="spinach" value="spinach" />
Brinjal <input type="checkbox" id="brinjal" value="brinjal"/>
</div>

<div id="dvPassport2" style="display: none">   
Beans <input type="checkbox" id="beans" value="beans" />
Peas <input type="checkbox" id="peas" value="peas" />
Nuts <input type="checkbox" id="nuts" value="nuts" />
Dal <input type="checkbox" id="dal" value="dal" />
Gram <input type="checkbox" id="gram" value="gram" />
</div>

<div id="dvPassport3" style="display: none">   
Rice<input type="checkbox" id="rice" value="rice"/>
Wheat <input type="checkbox" id="wheat" value="wheat"/>
Corn <input type="checkbox" id="corn" value="corn"/>
Ragi <input type="checkbox" id="ragi" value="ragi"/>
Jowar <input type="checkbox" id="jowar" value="jowar"/>
</div>

<script type="text/javascript">
    function ShowHideDiv1(chk){
	if(chk='yes'){
var flag=0;
var flag1=0;
var flag2=0;
var flag3=0;
var flag4=0;
var f;
var k1=0;
var k2=0;
var p1= document.getElementById("firstName");
var p2= document.getElementById("lastName");
var p3= document.getElementById("city");
var p4= document.getElementById("district");
var p5= document.getElementById("state");
var p6= document.getElementById("emailAddress");
var p7= document.getElementById("male");
var p8= document.getElementById("female");
var p9= document.getElementById("phone");
if(p1.value==""||p2.value==""||p3.value==""||p4.value==""||p5.value==""||p6.value==""||p9.value==""||(p7.checked==false && p8.checked==false)){
alert("Input cannot be empty");
document.getElementById("yes").checked=false;
flag=1;
flag1=1;
flag4=1;}
if(flag1!=1){
var para = document.getElementById("major");
	var pchk = para.getElementsByTagName("INPUT");	
	for(var i=0;i<pchk.length;i++){
           if(pchk[i].checked==false)
		k1++;
	   else{
	   if(pchk[i].id=="chkPassport4")	
	   f="dvPassport";
	   else if(pchk[i].id=="chkPassport1")	
	   f="dvPassport1";
	   else if(pchk[i].id=="chkPassport2")	
	   f="dvPassport2";
	   else if(pchk[i].id=="chkPassport3")	
	   f="dvPassport3";
	   var para = document.getElementById(f);
	var pchk = para.getElementsByTagName("INPUT");	
	for(var i=0;i<pchk.length;i++){
           if(pchk[i].checked==false)
		k2++;
		else{
		flag2=1;
	   	break;}}
	  if(k2==5){
		alert("Input cannot be empty");
		flag3=1;
		flag4=1;
		flag=1;
		document.getElementById("yes").checked=false;}
	  if(flag2==1||flag3==1)
		break;}}
	  if(k1==4){
		alert("Input cannot be empty");
		flag=1;
		flag4=1;
		document.getElementById("yes").checked=false;}}
if(flag4!=1){
 var phoneno = /^\d{10}$/;
  if(!document.getElementById("phone").value.match(phoneno)){
      alert("Not a valid phone no.");
	flag=1;
      document.getElementById("yes").checked=false;}
      else{
        var mailformat = /^\d{12}$/;
	if(!document.getElementById("emailAddress").value.match(mailformat)){
alert("Invalid Aadhar Number!");
flag=1;
document.getElementById("yes").checked=false;}
	else{
	var tex= /^\w[A-Za-z]+$/;
	var tex1=/^\w[A-Za-z0-9]+$/;
if(document.getElementById("firstName").value.length<2||document.getElementById("firstName").value.length>40||!document.getElementById("firstName").value.match(tex)){
alert("Invalid First Name!");
flag=1;
document.getElementById("yes").checked=false;}
else if(document.getElementById("lastName").value.length<2||document.getElementById("lastName").value.length>40||!document.getElementById("lastName").value.match(tex)){
alert("Invalid Last Name!");
flag=1;
document.getElementById("yes").checked=false;}
else if(document.getElementById("city").value.length<2||document.getElementById("city").value.length>40||!document.getElementById("city").value.match(tex1)){
alert("Invalid City/Town?Village Name!");
flag=1;
document.getElementById("yes").checked=false;}
else if(document.getElementById("district").value.length<2||document.getElementById("district").value.length>40||!document.getElementById("district").value.match(tex1)){
alert("Invalid District Name!");
flag=1;
document.getElementById("yes").checked=false;}
else if(document.getElementById("state").value.length<2||document.getElementById("state").value.length>40||!document.getElementById("state").value.match(tex)){
alert("Invalid State Name!");
flag=1;
document.getElementById("yes").checked=false;}
}}}
if(flag!=1){
document.getElementById("firstName").readOnly = true;
document.getElementById("lastName").readOnly = true;
document.getElementById("male").style.display  = 'none';
document.getElementById("female").style.display  = 'none';
document.getElementById("city").readOnly = true;
document.getElementById("district").readOnly = true;
document.getElementById("state").readOnly = true;
document.getElementById("emailAddress").readOnly = true;
document.getElementById("phone").readOnly = true;
document.getElementById("chkPassport4").style.display = 'none';
document.getElementById("chkPassport1").style.display = 'none';
document.getElementById("chkPassport2").style.display = 'none';
document.getElementById("chkPassport3").style.display = 'none';
document.getElementById("apple").style.display = 'none';
document.getElementById("mango").style.display = 'none';
document.getElementById("orange").style.display = 'none';
document.getElementById("guava").style.display = 'none';
document.getElementById("lemon").style.display = 'none';
document.getElementById("cucumber").style.display = 'none';
document.getElementById("tomato").style.display = 'none';
document.getElementById("radish").style.display = 'none';
document.getElementById("spinach").style.display = 'none';
document.getElementById("brinjal").style.display = 'none';
document.getElementById("beans").style.display = 'none';
document.getElementById("peas").style.display = 'none';
document.getElementById("nuts").style.display = 'none';
document.getElementById("dal").style.display = 'none';
document.getElementById("gram").style.display = 'none';
document.getElementById("rice").style.display = 'none';
document.getElementById("wheat").style.display = 'none';
document.getElementById("corn").style.display = 'none';
document.getElementById("ragi").style.display = 'none';
document.getElementById("jowar").style.display = 'none';
BLA.style.display="Block";}
 }}
              </script> 

<p><b>Are you sure about your choices?.Once you click on yes, you cannnot change your choices.<b>
<br>Yes<input type='radio' id="yes" onclick="ShowHideDiv1(this)" /></p>



<div id="BLA" style="display: none">
<br><br><br>
<b>Click Below</b>
<p> <button type="button" onclick="GetSelected()">I am not a robot</button> </p>
<input type="hidden" id="exam" name="exam"></div>
<script>
 function GetSelected() {
	document.getElementById("sub").style="display: block"
        var tblFruits = document.getElementById("major");
 
        //Reference all the CheckBoxes in Table.
        var chks = tblFruits.getElementsByTagName("INPUT");
 
        // Loop and push the checked CheckBox value in Array.
        for(var i=0;i<chks.length;i++){
	if(chks[i].checked==true){
         arr2.push(chks[i].value);
	 if(chks[i].id=="chkPassport4"){
			var v1 = document.getElementById("apple");
			if(v1.checked==true)
			 a1.push(v1.value);
			var v2 = document.getElementById("mango");
			if(v2.checked==true)
 			 a1.push(v2.value);
			var v3 = document.getElementById("orange");
			if(v3.checked==true)
 			 a1.push(v3.value);
			var v4 = document.getElementById("guava");
			if(v4.checked==true)
 			 a1.push(v4.value);
			var v5 = document.getElementById("lemon");
			if(v5.checked==true)
 			 a1.push(v5.value);
			arr4.push(a1);}
		if(chks[i].id=="chkPassport1"){
			var v1 = document.getElementById("cucumber");
			if(v1.checked==true)
			 a2.push(v1.value);
			var v2 = document.getElementById("tomato");
			if(v2.checked==true)
 			 a2.push(v2.value);
			var v3 = document.getElementById("radish");
			if(v3.checked==true)
 			 a2.push(v3.value);
			var v4 = document.getElementById("spinach");
			if(v4.checked==true)
 			 a2.push(v4.value);
			var v5 = document.getElementById("brinjal");
			if(v5.checked==true)
 			 a2.push(v5.value);
			arr4.push(a2); }
		 if(chks[i].id=="chkPassport2"){
			var v1 = document.getElementById("beans");
			if(v1.checked==true)
			 a3.push(v1.value);
			var v2 = document.getElementById("peas");
			if(v2.checked==true)
 			 a3.push(v2.value);
			var v3 = document.getElementById("nuts");
			if(v3.checked==true)
 			 a3.push(v3.value);
			var v4 = document.getElementById("dal");
			if(v4.checked==true)
 			 a3.push(v4.value);
			var v5 = document.getElementById("gram");
			if(v5.checked==true)
 			 a3.push(v5.value);
			arr4.push(a3);}
		 if(chks[i].id=="chkPassport3"){
			var v1 = document.getElementById("rice");
			if(v1.checked==true)
			 a4.push(v1.value);
			var v2 = document.getElementById("corn");
			if(v2.checked==true)
 			 a4.push(v2.value);
			var v3 = document.getElementById("wheat");
			if(v3.checked==true)
 			 a4.push(v3.value);
			var v4 = document.getElementById("ragi");
			if(v4.checked==true)
 			 a4.push(v4.value);
			var v5 = document.getElementById("jowar");
			if(v5.checked==true)
 			 a4.push(v5.value);
			arr4.push(a4);}

			     }
}
    arr.push(arr2.toString());
    arr.push(arr4.toString());
	document.getElementById("exam").setAttribute('value',arr);};

</script>
  
	  
          <input type="submit" value="Submit" id="sub" style="display: none">
        </form></div>

<div class="box3>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 600px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin:0px 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="s4.jpeg" style="width:100%">
  <div class="text">Caption One</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="s7.jpeg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="s3.jpeg" style="width:100%">
  <div class="text">Caption Three</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="s1.jpeg" style="width:100%">
  <div class="text">Caption Four</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="s2.jpeg" style="width:80%">
  <div class="text">Caption Five</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div class="box5" style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script></div>

<div class="news blue"> <center>
<span> <h2>📢 LATEST NEWS </h2></span></center><span class="text1" ><marquee>
<p><h2><a href="https://krishijagran.com">krishi news</a></h2></p>
<p><h2><a href="http://agriretailers.com/agri-retail-news.html">Agriretail News</a></h2></p>
<p><h2><a href="https://www.farmart.co/">Farmart News </a></h2></p>
<p><h2><a href="http://agtechnews.com/Ag-Tech-News.html">Agtech News <a></h2></p>
<p><h2><a href="https://www.gktoday.in/topics/agriculture/">Current AgriNews   </a></h2></p></marquee></span>

</div>


<br><br>
<div class="box4">
  <center><br>Useful Links:</center></div><br><br>
<center><br><br><br><br><br>
<marquee direction="right"  width="60%" height="60%">
<a href="https://farmer.gov.in">https://farmer.gov.in</a>
<br><br>
<a href="https://icar.gov.in/">ICAR</a>
<br><br>
<a href="https://pmfby.gov.in/">Pradhan Mantri Fasal Bhima Yojana</a>
<br><br>
<a href="https://mnsoybean.org/msrpc/modern-ag/">Modern Agriculture</a>
<br><br>
<a href="https://www.grainmart.in/news/category/news/">Grainmart</a>
</marquee>
 </center>
<h3 align="top">
		<font face="Lato" color="#000" size="5">
		
		</font>
	</h3>
	
</body>
</html>