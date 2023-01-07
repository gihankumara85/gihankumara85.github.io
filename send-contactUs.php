<?php

$host="localhost"; // Host name 
$username="voyageur_admin"; // Mysql username 
$password="voyageur_admin*12345*"; // Mysql password 
$db_name="voyageur_booking"; // Database name 
$tbl_name="contactvg_tb"; // Table name

// Connect to server and select database.
//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 

$name=$_POST['name'];
$email=$_POST['customer_mail'];
$subject=$_POST['subject'];
$message=$_POST['message'];

// Insert data into mysql 
//$sql="INSERT INTO $tbl_name(name, customer_mail, subject, message)VALUES('$name','$email', '$subject', '$message')";
//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
//if($result){
//echo "";
//echo "";
//echo "";
//}

//else {
//echo "ERROR";
//}
//mysql_close();
$ToEmail = 'gihankumara85@gmail.com' ; 
$EmailSubject = 'Contact Us'; 
//$mailheader = "From: ".$_POST["customer_mail"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["customer_mail"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY .= "Name: ".$_POST["name"].'<br>'; 
$MESSAGE_BODY .= "Email: ".$_POST["customer_mail"].'<br>'; 
$MESSAGE_BODY .= "Subject: ".$_POST["subject"].'<br>'; 
//$MESSAGE_BODY .= "Comment: ".nl2br($_POST["detail"]).'<br>'; 
$MESSAGE_BODY .= "Message: ".nl2br($_POST["message"]).'<br>';
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>




<style type="text/css">
.mess_succ{ background-color: #CEECE3;
    border: 1px solid #33B68D;
    border-radius: 4px 4px 4px 4px;
    color: #000000;
    font-family: arial;
    font-size: 15px;
    font-weight: bold;
    height: 45px;
    letter-spacing: 1px;
    margin: 118px 1px 1px -200px;
    padding: 7px;
    text-align: center;
    text-shadow: 4px 0 #FFFFFF;
    width: 650px; display:none
  
}
</style>

<div class="mess_succ">

<p>Your Message has been sent Successfully</p>

</div>
