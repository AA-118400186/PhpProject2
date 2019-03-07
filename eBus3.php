
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
        $fullNameValue = $_POST['txtName'];
        $numberValue = $_POST['txtNum'];
        $emailValue = $_POST['txtemail'];
        echo "The name is : ",$fullNameValue.".";
        echo "<br></br>";
        echo "The number is : ",$numberValue.".";
        echo "<br></br>";
        echo "The E-mail is : ",$emailValue.".";
        echo "<br></br>";
        echo "The total value is ".$totalValue.".";
        ?>
    </body>
</html>



