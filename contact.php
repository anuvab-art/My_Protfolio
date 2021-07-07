 <?php
 $con= mysqli_connect("localhost","root","","anuvab");


 if (isset($_POST["send"])) {


   $name = stripslashes($_POST['name']);
   $email = stripslashes($_POST['email']);
   $subject = stripslashes($_POST['subject']);
   $message = stripslashes($_POST['message']);




   
   $msg=mysqli_query($con,"insert into viewers(name,email,subject,message)
    values('$name','$email','$subject','$message')");  
   if($msg)
   {

     echo "<script>alert('Thanks'); window.location='index.php'</script>";

     die();
   }
 }

 ?>





 <section id="contact" class="page-section">
  <div class="container" id="">
    <div class="col-md-12">
      <h1>Contact Me</h1>
      <div class="row">

        <div class="col-lg-3 text-center d-flex">
         <div class="box text-center p-4">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="icon2"><i class="fas fa-map-marker-alt" style="color: white;"></i></span>
          </div>
          <div>
            <h3 class="mb-4">Address</h3>
            <p>Budbud,Burdwan 713403 West Bengal</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 text-center d-flex">
        <div class="box text-center p-4">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="icon2"><i class="fas fa-headset" style="color: white;"></i></span>
          </div>
          <div>
            <h3 class="mb-4">Contact</h3>
            <p> 6296114673   &   7679545934 </p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 text-center d-flex">
        <div class="box text-center p-4">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="icon2"><i class="fab fa-telegram-plane" style="color: white;"></i></span>
          </div>
          <div>
            <h3 class="mb-4">Email Address</h3>
            <p style="overflow: hidden;">anuvabgoswami05@gmail.com</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 text-center d-flex">
        <div class="box text-center p-4">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="icon2"><i class="fas fa-globe-americas" style="color: white;"></i></span>
          </div>
          <div>
            <h3 class="mb-4">Website</h3>
            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="col-md-12">
    <div class="row">

      <div class="col-md-6">
        <img class="img-fluid" src="image/me2.jpg" alt="bbn">
      </div>

      <div class="col-md-6" style="background: #f8f9fa;">
        <form method="POST" class="p-4 p-md-5 contact-form">

          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Your Name">
          </div>

          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Your Email">
          </div>

          <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject">
          </div>

          <div class="form-group">
            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>

          <div class="form-group">
            <input type="submit" name="send" class="btn btn-primary py-3 px-5">
          </div>

        </form>
      </div>

    </div>
  </div>
</div>
</section>