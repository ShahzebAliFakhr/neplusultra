<?php

require_once "db/config.php";

// Define variables and initialize with empty values
$success_msg = "";
$error_msg = "";
$uname = $uemail = $uphone = $up2 = $up2Phone = $up3 = $up3Phone = $up4 = $up4Phone = $up5 = $up5Phone = $uschoolname = $upaymentoption = NULL;

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $uname = mysqli_real_escape_string($link, $_POST['e_name']);
    $uemail = mysqli_real_escape_string($link, $_POST['e_email']);
    $uphone = mysqli_real_escape_string($link, $_POST['e_phone']);
    $up2 = mysqli_real_escape_string($link, $_POST['e_p2']);
    $up2Phone = mysqli_real_escape_string($link, $_POST['e_p2Phone']);
    $up3 = mysqli_real_escape_string($link, $_POST['e_p3']);
    $up3Phone = mysqli_real_escape_string($link, $_POST['e_p3Phone']);
    $up4 = mysqli_real_escape_string($link, $_POST['e_p4']);
    $up4Phone = mysqli_real_escape_string($link, $_POST['e_p4Phone']);
    $up5 = mysqli_real_escape_string($link, $_POST['e_p5']);
    $up5Phone = mysqli_real_escape_string($link, $_POST['e_p5Phone']); 
    $uschoolname = mysqli_real_escape_string($link, $_POST['e_schoolname']);
    $upaymentoption = mysqli_real_escape_string($link, $_POST['paymentoption']);
   
    // Validate Data
    if(empty($uname) || empty($uemail) || empty($uphone) || empty($up2) || empty($up2Phone) || empty($up3) || empty($up3Phone) || empty($upaymentoption)){
        $error_msg = "Fields with (*) are required";
    }

    // Check input errors before inserting in database
    if(empty($error_msg)){

        if(empty($uschoolname)){
            $uschoolname = "Private";
        }

        $sql = "INSERT INTO userregister(u_name, u_email, u_phone, u_2p, u_2p_phone, u_3p, u_3p_phone, u_4p, u_4p_phone, u_5p, u_5p_phone, u_schoolname, u_paymentoption)VALUES('$uname', '$uemail', '$uphone', '$up2', '$up2Phone', '$up3', '$up3Phone', '$up4', '$up4Phone', '$up5', '$up5Phone', '$uschoolname', '$upaymentoption')";

        if ($link->query($sql) === TRUE) {

                // EDIT THE 2 LINES BELOW AS REQUIRED
                $email_to = "info@neplusultra20.com";
                $email_from = "info@neplusultra20.com";
                $email_subject = $uemail;

                $email_message = "Registration Details:.\n\n";


                function clean_string($string) {
                $bad = array("content-type","bcc:","to:","cc:","href");
                return str_replace($bad,"",$string);
                }

                $email_message .= "Name: ".clean_string($uname)."\n";
                $email_message .= "Email: ".clean_string($uemail)."\n";
                $email_message .= "Phone: ".clean_string($uphone)."\n";
                $email_message .= "Name of 2nd participant: ".clean_string($up2)."\n";
                $email_message .= "Contact No. of 2nd participant: ".clean_string($up2Phone)."\n";
                $email_message .= "Name of 3rd participant: ".clean_string($up3)."\n";
                $email_message .= "Contact No. of 3rd participant: ".clean_string($up3Phone)."\n";
                
                if(!(empty($up4)) || !(empty($up4Phone))){
                    $email_message .= "Name of 4th participant: ".clean_string($up4)."\n";
                    $email_message .= "Contact No. of 4th participant: ".clean_string($up4Phone)."\n"; 
                }
                
                if(!(empty($up5)) || !(empty($up5Phone))){
                    $email_message .= "Name of 5th participant: ".clean_string($up5)."\n";
                    $email_message .= "Contact No. of 5th participant: ".clean_string($up5Phone)."\n";
                }
                
                $email_message .= "School Name: ".clean_string($uschoolname)."\n";
                $email_message .= "Payment Option: ".clean_string($upaymentoption)."\n";

                // create email headers
                $headers = 'From: '.$email_from."\r\n".
                'Reply-To: '.$email_from."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                @mail($email_to, $email_subject, $email_message, $headers);
                $uname = $uemail = $uphone = $up2 = $up2Phone = $up3 = $up3Phone = $up4 = $up4Phone = $up5 = $up5Phone = $uschoolname = $upaymentoption = "";
                $success_msg = "Registration Successfull.";
        }else{
            $error_msg = "Something gone wrong" . mysqli_error($link);
        }
    
    // Close connection
    mysqli_close($link);

    }
}
?>