<html>
    <body>
        <?php 

        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $website = $_POST["website"];
            $comment = $_POST["comment"];
            $gender = $_POST["gender"];
        }
        else {
            die ("Unfortunately, you cannot acces this page!");
        }

        if (!empty($name)) {
            if (!preg_match ("/^[a-zA-z \-\ . \' ] *$/ " , $name )){
                echo "Your input nanme is incorrect!<br>";
                echo "Only white space, dot(.), and dash(-) are allowed<br>";
            }
            else {
                $name = test_input($name);
                echo "Thanks,<b>". $_POST["name"]."</b><br>";
            }
        }
        else {
            echo ("Name is required <br>");
        }
        if (!empty($email)) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "invalid email format<br>";
            }
            else {
                $email = test_input($email);
                echo "Your email is: ". $_POST["email"]."<br>";
            }
        }
        else {
            echo ("Email is required <br>");
        }
        if (!empty($website)) {
            if (!preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $website)) {
                echo "Invalid URL<br>";
            }
            else {
                $website = test_input($website);
                echo "Your Website is: ".$_POST["website"]."<br>";
            }
        }
        else {
            echo ("Your website is : none <br>");
        }
        if (!empty($comment)) {
            $comment = test_input($comment);
            echo "Comment: ". $_POST["comment"]."<br>";
        }
        else {
            echo ("Your comment is : none <br>");
        }
        if (!empty($gender)) {

            echo "Your gender is: ". $_POST["gender"]."<br>";
        }
        else {
            ("Gender is required<br>");
        }
        //fungsi trim dan Strpslahes
        
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            return $data;
        }
        
        
        // echo "Thanks,<b>". $_POST["name"]."</b><br>";
        // echo "Your email is: ". $_POST["email"]."<br>";
        // echo "Your Website is: ".$_POST["website"]."<br>";
        // echo "Comment: ". $_POST["comment"]."<br>";
        // echo "Your gender is: ". $_POST["gender"]."<br>";
        
        ?>
    </body>
</html>