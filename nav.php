<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ARTISTIC PICK</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
*{
margin: 0;
padding: 0;
user-select: none;
box-sizing: border-box;
font-family: 'quicksand', sans-serif;
}
nav{
background:white;
border: 2px solid white;
padding: 20px;
box-shadow: 20px 20px 0px 20px white;
}
nav:after{
content: '';
clear: both;
display: table;
}
nav ul{
float: left;
margin-right: 40px;
list-style: none;
position: relative;
}
nav ul li{
float: left;
display: inline-block;
background:white;
margin: 0;
margin-left: 35px;
}
nav ul li a{
color: black;
font-weight: bolder;
line-height: 10px;
text-decoration: none;
font-size: 14px;
padding: 8px 10px;
}
nav ul li a:hover{
border-bottom: 2px solid red;
}
nav ul ul li a:hover{
box-shadow: none;
}
nav ul ul{
position: absolute;
top: 90px;
border-top: 3px solid green;
opacity: 0;
visibility: hidden;
transition: top .3s;
}
nav ul ul ul{
border-top: none;
}
nav ul li:hover > ul{
top: 70px;
opacity: 1;
visibility: visible;
}
nav ul ul li{
position: relative;
margin: 0px;
width: 150px;
float: none;
display: list-item;
border-bottom: 1px solid rgba(0,0,0,0.3);
}
nav ul ul li a{
line-height: 50px;
}
nav ul ul ul li{
position: relative;
top: -60px;
left: 150px;
}
.icon,input{
display: none;
}

@media all and (max-width: 968px) {
nav ul{
  margin-right: 0px;
  float: left;
}
.show + a, ul{
  display: none;
}
nav ul li,nav ul ul li{
  display: block;
  width: 100%;
}
nav ul li a:hover{
  box-shadow: none;
}
.icon{
  display: block;
  color: black;
  position: absolute;
  top: 0;
  right: 40px;
  line-height: 70px;
  cursor: pointer;
  font-size: 25px;
}
nav ul ul{
  top: 70px;
  border-top: 0px;
  float: none;
  position: static;
  display: none;
  opacity: 1;
  visibility: visible;
}
nav ul ul a{
  padding-left: 40px;
}
nav ul ul ul a{
  padding-left: 80px;
}
nav ul ul ul li{
  position: static;
}
[id^=btn]:checked + ul{
  display: block;
}
nav ul ul li{
  border-bottom: 0px;
}
span.cancel:before{
  content: '\f00d';
}
}
p{
font-size: 30px;
font-weight: 500;
}
html{
  font-family: 'quicksand', sans-serif;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}
/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
a.active {
  color:red;
}
.fa {
  padding: 10px;
  font-size: 24px;
  text-align: center;
  text-decoration: none;
}
.fa-facebook {
  color:black;
  font-weight: bolder;
}
.fa-twitter {
  color:black;
  font-weight: bolder;
}
.fa-instagram {
  color:black;
  font-weight: bolder;
}
.fa-youtube {
  color:black;
  font-weight: bolder;
}
.fa-skype {
  color:black;
  font-weight: bolder;
}
    </style>
  </head>
  <body>

    <div style="background-color:white;height:55px;border:2px solid white;box-shadow:20px 20px 20px 0px white;"class="row">
      <div class="col-1 col-s-2 menu">
      </div>
     <div class="col-3 col-s-3 menu">
      <i style='font-size:20px;color:grey' class='far'>&#xf059;</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i style='font-size:20px;color:grey' class='fas'>&#xf3c5;</i>
     </div>
     <div class="col-3 col-s-9 menu">
      <p style="color:black;font-size:20px;font-weight:bolder"><i style='font-size:24px;color:red' class='far'>&#xf005;</i>ARTISTIC PICK</p>
     </div>
     <div class="col-3 col-s-12 menu">
    <i style='font-size:16px;color:grey' class='fas'>&#xf406;&nbsp;&nbsp;&nbsp;Sign In/Register</i>
    <i style='font-size:20px;color:black' class='fas'>&#xf0d7;</i>&nbsp;&nbsp;&nbsp;&nbsp;
    <i style='font-size:20px;color:grey' class='fas'>&#xf290;</i>
     </div>
     <div class="col-3 col-s-12 menu">

     </div>
    </div>

    <nav>
<label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
<li><a href="beauty.php">BEAUTY</a></li>
<li><a href="index.php">WHAT'SNEW</a></li>
<li><a href="ladies.php">LADIES</a></li>
<li><a href="men.php">MEN</a></li>
<li><a href="kids.php">KIDS</a></li>
<li><a href="brands.php">BRANDS</a></li>
<li><a href="cellular.php">CELLULAR</a></li>
<li><a href="#">APMONEY</a></li>
<li><a href="#">INSPIRATION</a></li>
<li><a  class="active" href="#">PROMOS</a></li>
</ul>
</nav>

</body>
</html>
