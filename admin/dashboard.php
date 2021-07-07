
<!DOCTYPE html>
<html>
<head>
    <title>dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <style type="text/css">
        body{
            /*min-height: 100vh;*/
          user-select: none; 
        }

  .feature_item a{
box-shadow: 0 20px 30px -16px rgba(9,9,16,0.2)!important;
    padding: 1rem!important;
    display: flex;
    align-items: center;
    color: inherit;
    text-decoration: inherit;
    cursor: pointer;
   }
   .feature_item  a {color:#000;}        
  .feature_item a:visited {color:000;} 
  .feature_item a:hover {color:#000;}   
  .feature_item a:active {color:#000;}   


/*.feature_item:hover{
   box-shadow: 0 20px 30px -16px rgba(9,9,16,0.3)!important;
}*/

.im{
/*    background-color: #8c6ed3;
*/    width: 4rem!important;
    height: 4rem!important;
    display: flex;
    align-items: center!important;
    justify-content: center!important;
 }
.ic{
    width: 3rem!important;
    height: auto; 
}

.txt{
     margin-left: 1rem!important;
    line-height: 1.25rem!important;
}

.text-2{
 font-size: 1.5rem!important;
    line-height: 2rem!important;
}
.text-3{
    font-size: .85rem!important;
    line-height: 1rem!important;
    --text-opacity: 1!important;
    color: rgba(119,119,119,var(--text-opacity))!important;
}

 


    </style>
</head>
<body>


<div id="main">
   <!---card--->
<div class="container-fluid banner-card" id="service"> 

<div class="row justify-content-center">
<div class="service text-center">
<div class="main-title title">
<h2 style="font-family: cursive;">Dashboard</h2>
<p style="font-family: monospace;">
Add text as your wish Add text as your wish Add text as your wish
<br>this is demo text this is demo this is demo text  
</p>
</div>
</div>
</div>

<div>

<div class="row" style="margin-top: 1rem;">

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item">
<a href="admin_about.php">
  <div class="im" style="background-color: #1ba87b;">
<img class="ic" src="image/s.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Add Student</div>
<span class="text-3 text-gray-600">Student</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item">
    <a href="paymentreceipt.php">
<div class="im" style="background-color: #8c6ed3;">
<img class="ic" src="image/s.png" alt="b" style="">
</div>
<div class="txt">
 <div class="text-2">Bill payment</div>
<span class="text-3 text-gray-600">Student</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item">
    <a href="">
    <div class="im" style="background-color: #007cba;">
<img class="ic" src="image/s.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Student Fess</div>
<span class="text-3 text-gray-600">Student</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item">
<a href="studentdata.php">
    <div class="im" style="background-color: #3838d6; ">
<img class="ic" src="image/s.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Student List</div>
<span class="text-3 text-gray-600">Student</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item">
    <a href="">
    <div class="im" style="background-color: #f6ae7a;">
<img class="ic" src="image/e.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Add Employee</div>
<span class="text-3 text-gray-600">Employee</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item"> 
    <a href="">
    <div class="im" style="background-color: #bb358b;">
<img class="ic" src="image/e.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Add Salary</div>
<span class="text-3 text-gray-600">Employee</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item"> 
    <a href="">
    <div class="im" style="background-color: #1d5873;">
<img class="ic" src="image/e.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Employee Salary</div>
<span class="text-3 text-gray-600">Employee</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item">
 <a href="">
    <div class="im" style="background-color: #25c4f2;">
<img class="ic" src="image/e.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Employee list</div>
<span class="text-3 text-gray-600">Employee</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item"> 
    <a href="">
    <div class="im" style="background-color: #f55d5c;">
<img class="ic" src="image/c.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Add Daily Expenses</div>
<span class="text-3 text-gray-600">Other Cash</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item"> 
    <a href="">
    <div class="im" style="background-color: #ffee00;">
<img class="ic" src="image/c.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Add Daily Cash</div>
<span class="text-3 text-gray-600">Other Cash</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item">
 <a href="">
<div class="im" style="background-color: #ff7991;">
<img class="ic" src="image/c.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Monthly Total</div>
<span class="text-3 text-gray-600">Other Cash</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item">
 <a href="">
<div class="im" style="background-color: #91d630;">
<img class="ic" src="image/p.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Profile</div>
<span class="text-3 text-gray-600">Authentication</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item"> 
    <a href="">
<div class="im" style="background-color: #8c6ed3;">
<img class="ic" src="image/l.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Ridl</div>
<span class="text-3 text-gray-600">RURAL INSTITUTE </span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item">
 <a href="">
<div class="im" style="background-color: #3838d6;">
<img class="ic" src="image/o.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Ridl</div>
<span class="text-3 text-gray-600">OF DIGITAL</span>
</div>
</a>
</div>
</div>

<div class="col-md-4 col-sm-6  bbn">
<div class="feature_item"> 
    <a href="">
<div class="im" style="background-color: #f6ae7a;">
<img class="ic" src="image/l.png" alt="b">
</div>
<div class="txt">
 <div class="text-2">Ridl</div>
<span class="text-3 text-gray-600">LEARNING</span>
</div>
</a>
</div>
</div>

 

 

 




 </div>
   </div> 
<!---card end---> 
</div>
</body>
</html>