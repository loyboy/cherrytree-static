<?php include('header.php'); ?>

<style>
/*.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
  https://image.ibb.co/kUagtU/rocket_contact.png
}*/
</style>

<!--Contact-->
<div class="container contact-form">
            <div class="contact-image">
                <img src="img/favicon.png" alt="rocket_contact"/>
            </div>
            <?php if (isset($_SESSION["sentmsg"])){ ?>
                <div class="alert alert-success">
                <strong>Success!</strong> Your mail has been sent to our Team, and We will get back to you in record time...
              </div>
            <?php } unset($_SESSION["sentmsg"]); ?>

            <?php if (isset($_SESSION["failmsg"])){ ?>
                <div class="alert alert-warning">
                <strong>Failed!</strong> Your mail has not been sent to our Team...
              </div>
            <?php }  unset($_SESSION["failmsg"]); ?>

            <form method="post" action="">
                <h3>Drop Us a Message & We will get back to You</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" required style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
<!--End-->

<style type="text/css">
.accordion .card .card-header{
    padding: 0px;
}
</style>

<?php 
    if (isset($_POST['btnSubmit'])){
       $email = filter_var($_POST['txtEmail'], FILTER_SANITIZE_EMAIL);
       $name = filter_var($_POST['txtName'], FILTER_SANITIZE_STRING);
       $phone = filter_var($_POST['txtPhone'], FILTER_SANITIZE_STRING);
       $msgg = filter_var($_POST['txtMsg'], FILTER_SANITIZE_STRING);
      // $headers = 'From: '.$email;
       $from = "no-reply@cherrytree.com";
       if (mail('loyboy606@gmail.com',"Enquiry >> From cherrytree website", $msgg . "\n\r" . "Name of Sender: " . $name . "\n\r" . "Phone Number: " . $phone , $headers)){
           $_SESSION['sentmsg'] = 1;
       }
       else{
            $_SESSION['failmsg'] = 1;
       }
    }
?>
<?php include('footer.php'); ?> 