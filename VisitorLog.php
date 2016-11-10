<html>
    <body> 

        <!-- Printing of Visitor Page -->
        Thank you for your feedback, 
        <?php
        echo $_POST["name"];
        echo ".";
        ?><br> <br>
        We will be contacting you at your e-mail address shortly: 
        <?php
        echo $_POST["email"];
        ?> <br> <br>
        Here are your comments: 
        <br>
        <?php
        echo $_POST['comments'];
        ?>


        <!-- Saving name to file -->
        <?php
//        $myfile = fopen("LogOfVisitors.txt", "w") or die("Unable to open file!");
//        $txt = $GLOBALS["firstName"] + "" + $GLOBALS["lastName];
//        fwrite($myfile, $txt);
//        $txt = $GLOBALS[$email];
//        fwrite($myfile, $txt);
//        fclose($myfile);
        ?>

    </body>
</html>
