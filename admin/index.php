

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<link rel="stylesheet" href="css/login.css">

</head>
<body>
   <div class="container">
    <div class="overlay"></div>
   	<div class="col-md-12">
   		<div class="row">
   			<div class="col-md-6 im d-flex align-items-center justify-content-center">
        <div class="img d-flex align-items-center justify-content-center">
      <img src="image/login.svg" class="img-fluid">
    </div>
	  	</div>

   			<div class="col-md-6 d-flex align-items-center justify-content-center cont">
   		<section class="form-dark log">
<form class="needs-validation"  method="POST" action="#">

        <div class="head">
      <h2>Login</h2>
  </div>

    <div class="row">
       <div class="col-md-12">
          <div class="md-form mb-0">
         <input type="email" id="email" name="email" class="form-control" required/>
            <label for="email" class=""><h5>email</h5></label>
         </div>
      </div>

           <div class="col-md-12">
          <div class="md-form mb-0">
         <input type="password" id="password" name="password" class="form-control" required/>
            <label for="password" class=""><h5>Password</h5></label>
             <i id="eye" class="fas1" onclick="showHide();"></i>

         </div>
         <a href="#">Forgot Password?</a>
      </div>
    </div>

      <div class="col-md-12">
        <div class="add">
            <button class="btnn" name="login" type="submit" style="outline:none;">Log in</button>
     </div>
  </div>

   
</form>
</section>	
</div>
   		</div>
   	</div>
   </div>






<script type="text/javascript">
   const password = document.getElementById('password');
       const eye = document.getElementById('eye');

       function showHide(){
       if (password.type === 'password'){
        password.setAttribute('type', 'text');
        eye.classList.add('hide')
      }
       else{
         password.setAttribute('type', 'password');
        eye.classList.remove('hide')
       }
      }
</script>
</body>
</html>