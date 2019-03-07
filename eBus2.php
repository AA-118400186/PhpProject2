<?php
session_start();
$fullNameValue = "";
$totalValue = "";
$numberValue = ";
$emailValue = ;

/*
 * Creat a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue;
$_SESSION['txtNum'] = $numberValue;
$_SESSION['txtemail'] = emailValue;


/**
*Allocate the mobile number session variable to a text box
 */

?>


<!DOCTYPE html>
    <html>
        <head>
            <title>eBusiness 2</title>
            <style>
            body{
                background-color: #f5c6cb
            }
        </style>
        </head>
        <body>
            <div class="form">
                <form name="Details" method="post" action="eBus3.php">
                    <center>
                        <table cellspacing="10">
                            <tr>
                                <td><b></b></td>
                                <td><b>Enter in your details below</b></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td><input type="text" id="txtName" name="txtName" value="" /><td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td><input type="tel" id="txtNum" name="txtNum" value="" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="Must be in the for 000-000-0000" required /><td>
                                   
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td><input type="email" id="txtemail" name="txtemail" title="Must be in E-mail format" required><td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" id="psw" name="psw" pattern="[0-9]{4}" title="Must be a four digit pin" required><td>
                            </tr>
                            <tr>
                                <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /><td>
                            </tr>
                        </table>
                    </center>
                    
                    <center>
                     <input type="Submit" id="btnContinue" name="btnContinue" onclick="" value="Continue" />  
                    </center> 
                      </div>
                </form>
            </body>
        </html>



