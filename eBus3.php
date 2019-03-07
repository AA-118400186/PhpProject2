
<html>
    <head>
         <style>
            body{
                background-color: #f5c6cb
            }
        </style>
    </head>
    <body>
        <!--  //Starting the session to get the session variable from last page-->
        <?php
        
        session_start();
        $totalValue = $_POST['txtTotal'];
        $fullNameValue2 = $_POST['txtName'];
        $numberValue2 = $_POST['txtNum'];
        $emailValue2 = $_POST['txtemail'];
        echo "The name is : ",$fullNameValue.".";
        echo "<br></br>";
        echo "The number is : ",$numberValue2.".";
        echo "<br></br>";
        echo "The E-mail is : ",$emailValue2.".";
        echo "<br></br>";
        echo "The total value is ".$totalValue2.".";
        ?>
    </body>
</html>



