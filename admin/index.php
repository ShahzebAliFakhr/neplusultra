<?php $pagetitle = "WELCOME" ?>

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;

}
?>

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/main.css">

    <div class="section-padding">
        <div class="col-lg-12">
            <div class="card p-5">
                <div class="row">
                    <div class="col-md-6 mt-4">
                    <h5 class="text-base">Hi <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h5>
                    </div>
                    <div class="col-md-6 text-md-right mt-4">
                        <a href="logout.php" class="btn-base">LOGOUT</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <?php 
                        
                        require_once "../db/config.php";
                        $query = "SELECT * FROM userregister";

                        $result = $link->query($query);

                        if ($result->num_rows > 0) {

                            echo '<table class="table table-responsive table-hover table-bordered text-center"> 
                                    <thead class="bg-base">
                                        <th>ID</th> 
                                        <th>NAME</th> 
                                        <th>EMAIL</th> 
                                        <th>PHONE</th>
                                        <th>2nd PARTICIPANT</th>
                                        <th>2nd CONTACT #</th>
                                        <th>3rd PARTICIPANT</th>
                                        <th>3rd CONTACT #</th>
                                        <th>4th PARTICIPANT</th>
                                        <th>4th CONTACT #</th>
                                        <th>5th PARTICIPANT</th>
                                        <th>5th CONTACT #</th>
                                        <th>SCHOOL NAME</th>
                                        <th>PAYMENT OPTION</th>
                                        <th>REGISTER DATE</th> 
                                    </thead>';

                            while($row = $result->fetch_assoc()) {
                                
                                $field1name = $row["u_id"];
                                $field2name = $row["u_name"];
                                $field3name = $row["u_email"];
                                $field4name = $row["u_phone"];
                                $field5name = $row["u_2p"];
                                $field6name = $row["u_2p_phone"];
                                $field7name = $row["u_3p"];
                                $field8name = $row["u_3p_phone"];
                                $field9name = $row["u_4p"];
                                $field10name = $row["u_4p_phone"];
                                $field11name = $row["u_5p"];
                                $field12name = $row["u_5p_phone"];
                                $field13name = $row["u_schoolname"];
                                $field14name = $row["u_paymentoption"];
                                $field15name = $row["u_created_at"]; 
                         
                                echo '<tr> 
                                          <td>'.$field1name.'</td> 
                                          <td>'.$field2name.'</td> 
                                          <td>'.$field3name.'</td> 
                                          <td>'.$field4name.'</td> 
                                          <td>'.$field5name.'</td>
                                          <td>'.$field6name.'</td>
                                          <td>'.$field7name.'</td>
                                          <td>'.$field8name.'</td>
                                          <td>'.$field9name.'</td>
                                          <td>'.$field10name.'</td>
                                          <td>'.$field11name.'</td>
                                          <td>'.$field12name.'</td>
                                          <td>'.$field13name.'</td>
                                          <td>'.$field14name.'</td>
                                          <td>'.$field15name.'</td>
                                      </tr>';
                            }
                            echo "</table>";
                        } else {
                            echo '<div class="col-lg-12"><h6>0 results</h6></div>';
                        }
                        $link->close();
                    ?>

                </div>
            </div>
        </div>
    </div>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

