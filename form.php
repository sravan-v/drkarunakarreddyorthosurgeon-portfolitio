<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message1 = $_POST['message'];

$to = "$email";
$subject = 'Your request has been sent successfully!';
$message = '<h1>THANK YOU!</h1>
            <p>For filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.<br/>We will contact you very soon..</p>
            <p>Copyright ©2021 Dr. B Karunakar Reddy | All Rights Reserved.</p>
            ';

//Admin Mail Variables
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:karunakarreddyb9@gmail.com';

$to_admin = "karunakarreddyb9@gmail.com";
$subject_admin = 'Customer Enquiry';
$message_admin = '<p style="font-size: 28px;font-weight: bold"><b>Customer Details:</b></p>
<table border="1" style="background-color:#f4f4f4;border-collapse:collapse;border:1px solid #ffffff;color:#2d3e50;width:100%" cellpadding="12" cellspacing="6">
	<tr style="background-color:#2d3e50; color: #fff">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Message</th>
                </tr>
                <tr>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$message1.'</td>
                </tr>
            </table>
            ';
if (mail($to, $subject, $message, $headers) && mail($to_admin, $subject_admin, $message_admin, $headers)) {
    echo "Sent";   
}
else {
    echo "Fail";
}
?>