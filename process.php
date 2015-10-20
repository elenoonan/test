<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            //print_r($_POST);

            $input_method = INPUT_POST;
            $formdata = array();
            $errors = array();

            $formdata['username'] = filter_input($input_method, "username", FILTER_SANITIZE_STRING);
            $formdata['password'] = filter_input($input_method, "password", FILTER_SANITIZE_STRING);
            $formdata['age'] = filter_input($input_method, "age", FILTER_SANITIZE_NUMBER_INT);
            $formdata['dob'] = filter_input($input_method, "email", FILTER_SANITIZE_EMAIL);
            $formdata['website'] = filter_input($input_method, "website", FILTER_SANITIZE_URL);
            $formdata['os'] = filter_input($input_method, "os", FILTER_SANITIZE_STRING);
            $formdata['languages'] = filter_input($input_method, "languages", FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
            $formdata['skills'] = filter_input($input_method, "skills", FILTER_SANITIZE_STRING);
            $formdata['devices'] = filter_input($input_method, "devices", FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
            $formdata['comments'] = filter_input($input_method, "comments", FILTER_SANITIZE_STRING);
            $formdata['picture'] = filter_input($input_method, "picture", FILTER_SANITIZE_STRING);


            //print_r($formdata);

            if ($formdata['username'] === NULL ||
                    $formdata['username'] === FALSE ||
                    $formdata['username'] === "") {
                $errors['username'] = "Username required";
            }

            if ($formdata['password'] === NULL ||
                    $formdata['password'] === FALSE ||
                    $formdata['password'] === "") {
                $errors['password'] = "Password required";
            }

            if ($formdata['age'] !== "") {
                $age = intval($formdata['age']);
                if ($age < 0 || $age > 120) {
                    $errors['age'] = "Age must be between 0 and 120 inclusive";
                }
            }


            if ($formdata['dob'] !== NULL && $formdata['dob'] !== FALSE && $formdata['dob'] !== "") {
                $test_arr = explode('/', $formdata['dob']);
                if (count($test_arr) == 3) {
                    if (checkdata($test_arr[0], $test_arr[1], $test_arr[2])) {
                        //valid date    
                    } else {
                        //problem with dates
                    }
                } else {
                    //problem with input
                }
            }
            
            if ($formdata['email'] !== NULL && $formdata['email'] !== FALSE && $formdata['email'] !== "") {
                if (!filter_var($formdata['email'], FILTER_VALIDATE_EMAIL)) {
                    $errors ['email'] = "Invalid email address format";
                }
            }

            if ($formdata['website'] !== NULL && $formdata['website'] !== FALSE && $formdata['website'] !== "") {
                if (!filter_var($formdata['website'], FILTER_VALIDATE_URL)) {
                    $errors['website'] = "Invalid website URL format";
                }
            }

            if ($formdata['os'] !== NULL && $formdata['os'] !== FALSE && $formdata['os'] !== "") {
                $validOperSystems = array("windows", "macosx", "linux");

                if (!in_array($formdata['os'], $validOperSystems)) {
                    $errors['os'] = "Invalid operating system";
                }
            }


            if ($formdata['languages'] !== NULL && $formdata['languages'] !== FALSE && $formdata['languages'] !== "") {
                $validLanguages = array("C++", "Java", "PHP");
                foreach ($formdata['languages'] as $language) {
                    if (!in_array($formdata['languages'], $validLanguages)) {
                        $errors['languages'] = "Invalid programming language";
                        break;
                    }
                }
            }

            if ($formdata['skill'] !== NULL && $formdata['skill'] !== FALSE && $formdata['skill'] !== "") {
                $validSkills = array("beginner", "intermediate", "advanced");
                if (!in_array($formdata['skills'], $validSkills)) {
                    $errors['skills'] = "Invalid skill";
                }
            }

            if ($formdata['devices'] !== NULL && $formdata['devices'] !== FALSE && $formdata['devices'] !== "") {
                $validDevices = array("desktop", "laptop", "tablet", "smartphone");
                foreach ($formdata['devices'] as $device) {
                    if (!in_array($formdata['devices'], $validDevices)) {
                        $errors['devices'] = "Invalid device";
                        break;

                        //REMINDER NOTE: finish validation for skills and devices as per video on form validation
                    }
                }
            }
            //print_r($errors);

            if (empty($errors)) {
                echo '<p>form data is valid</p>';
            } else {
                echo '<p>form data is invalid</p>';
            }
            ?>
        </pre>
    </body>
</html>
