<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
    //String Validation  
        if (empty($_POST["name"])) {  
             $nameErr = "Name is required";  
        } else {  
            $name = ($_POST["name"]);  
                // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                    $nameErr = "Only alphabets and white space are allowed";  
                }  
        }
    }
?>