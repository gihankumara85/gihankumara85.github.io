<!DOCTYPE html>
<html lang="en">
<?php include('includes/header.php');?>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
<link rel="stylesheet" href="assets/css/jquery-ui.css" type="text/css" />
<script type="text/javascript" src="assets/js/jquery.validate.js"></script>

<script type="text/javascript">
 $(document).ready(function () {
    var validator= $("#myForm").validate({
         ignore: ":hidden",
         rules: {

             name: {
                 required: true,
                 minlength: 3
             },
             customer_mail: {
                 required: true,
				 email: true
             },
             message: {
                 required: true
             },
          
			 
			
         },
         submitHandler: function (form) {
			
            // alert('valid form submission'); // for demo
             $.ajax({
                 type: "POST",
                 url: "send-contactUs.php",
                 data: $(form).serialize(),
                 success: function () {
                     //$(form).html("<div id='suc-message'></div>");
                     $('#suc-message').show()
						.fadeOut(3000, function () {
                        $( '#myForm' ).each(function(){this.reset();});
                     });
					
                 }
				 
				 
				 
             });
             return false; // required to block normal submit since you used ajax
         }

     });
	 
$("#rst").click(function() {
    validator.resetForm();
});
 });
 
  
</script>
<style type="text/css">
#suc-message {
    background: none repeat scroll 0 0 #d7f7df;
    border: 1px solid #a3f7b8;
    color: #3f9153;
    display: none;
    margin: 15px 0;
    padding: 8px;
    text-align: center;
    width: 100%;
}
.inner-main-wrp { min-height:400px;
  /*  background-color:transparent;*/
   /* padding-bottom: 20px;*/
}
</style>

<main class=" main-wrapper">
<section class="breadcrumbs">


<div class="container"><div class="container"><div class="d-flex justify-content-between align-items-center pb-2">
    <h2 class="page-header">CONTACT US</h2><ol><li><a <?php if (strpos($_SERVER['PHP_SELF'], 'index')) echo 'class="active"';?> href="index">Home</a></li>
    <li>Contact Us</li></ol></div></div></div>


 

 
</section>

 
<div class="container inner-main-wrp">
    <div class="row"> 
 
<div id="suc-message">Your Message has been sent Successfully</div>
<div class="col-md-6">
<form name="form1" method="post" id="myForm" >
<!--<form name="form1" method="post" action="send_contact.php" onsubmit='return formValidator()'>-->
    <br> 
<div class="contact-us-tb">
<table id="fm_contact">
  <tr>
    <td> </td>
    <td><input name="name" Placeholder="* Name" type="text" id="name" size="50" class="contactfm form-control"></td>
    <div style="display:none" id="v1"> </div>
  </tr>

  <tr>
    <td> </td>
   <td><input name="customer_mail"  Placeholder="* Email"  type="text" id="customer_mail" size="50" class="contactfm form-control"></td>
     <div style="display:none" id="v2"> </div>
  </tr>

  <tr>
<td> </td>
<td><input name="subject"  Placeholder="Subject"  type="text" id="subject" size="50" class="contactfm form-control"></td>
</tr>

<tr>
<td> </td>
<td><textarea id="message"  Placeholder="* Message"  class="contactfm form-control" rows="4" cols="50" name="message"></textarea></td>
</tr>
  
  <tr></tr>
    <td></td>
    <td> 
        <input type="submit" value="Submit" class="green-submit form-btn" id="sub">
      
  </tr>
</table>
 
</form>

</div>
 

</div>
 
<div class="col-md-6 pt-4">
<p syle="padding-left: 18px;">
<strong>ItaLanka Technologies</strong> <br>
No. 10, Lunuwila Junction <br>
New Road, Wennappuwa <br>
Sri Lanka.
</p>
<br>
<ul class="contactus-details">
<li> 
    <span style="font-weight:bold"> <i class="ri-smartphone-line contact-icons"></i> Mobile: </span> 
    <span>  <span style="position: relative;top: 2px;">+94769213480</span>
</li>
<li>
<span style="font-weight:bold"> <i class="ri-phone-fill contact-icons"></i> Office: </span> 
<span>  <span style="position: relative;top: 2px;">+94312253274</span>  
</li>
<li><span style="font-weight:bold"> <i class="ri-mail-line contact-icons"></i>  Email: </span>  <a href="mailto:info@italanka.com" target="_top">info@italanka.com</a> </li>

</ul>
</div>


 
</div>
<!-- row -->

</div>
<!-- container -->
</main>
<?php include('includes/footer.php'); ?>

</body>
</html>