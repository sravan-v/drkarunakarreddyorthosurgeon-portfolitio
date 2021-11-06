<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['number'];
$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];

$to = "$email";
$subject = 'Requested to book an appointment.';
$message = '<h1>THANK YOU!</h1>
            <p>Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.<br/>We will contact you very soon..</p>
            <p>Copyright ©2021 Dr. B Karunakar Reddy | All Rights Reserved.</p>
            ';

//Admin Mail Variables
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:karunakarreddyb9@gmail.com';

$to_admin = "karunakarreddyb9@gmail.com";
$subject_admin = 'Appointment Booked';
$message_admin = '<p style="font-size: 28px;font-weight: bold"><b>Appointment Details:</b></p>
<table border="1" style="background-color:#f4f4f4;border-collapse:collapse;border:1px solid #ffffff;color:#2d3e50;width:100%" cellpadding="12" cellspacing="6">
	<tr style="background-color:#2d3e50; color: #fff">
                        <th scope="col">Patient Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Service</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$service.'</td>
                        <td>'.$date.'</td>
                        <td>'.$time.'</td>
                    </tr>
                    </tbody>
                    </table>
            ';
if (mail($to, $subject, $message, $headers) && mail($to_admin, $subject_admin, $message_admin, $headers)) {
    echo "Sent";   
}
else {
    echo "Fail";
}