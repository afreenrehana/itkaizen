<?php
 ini_set('display_errors', 1);
                session_start();
                if (isset($_POST['name'])) {

                    if (empty($_POST['name'])  || empty($_POST['contact-email']) || empty($_POST['mobile-no']) || empty($_POST['subject']) || empty($_POST['msg']) ) {
                        $error = "All the field is required";
                        $_SESSION['error'] = $error;
                        header("Location: index1.php");
                    } else if (!filter_var($_POST['contact-email'], FILTER_VALIDATE_EMAIL)) {
                        $error = "Enter your valid email address";
                        $_SESSION['error'] = $error;
                        header("Location: index1.php");
                    }else if(strlen($_POST['mobile-no']) < 10 || strlen($_POST['mobile-no']) > 10)  {
                        $error = "only numbers with 10 digits are required";
                        $_SESSION['error'] = $error;
                        header("Location: index1.php");
                    } else if (strlen($_POST['msg']) < 10 || strlen($_POST['msg']) > 140) {
                        $error = "Message length should greater than 10 & less than 140 characters";
                        $_SESSION['error'] = $error;
                        header("Location: index1.php");
                    } else {

                        //connect to the database
                        $conn = mysqli_connect("localhost", "root", "", "contact");
                        $name = $_POST['name'];
                        $email = $_POST['contact-email'];
                        $mob = $_POST['mobile-no'];
                        $subject = $_POST['subject'];
                        $msg = $_POST['msg'];
                        
                        $is_done = $conn->query("INSERT INTO `contact`( `name`, `email`, `mob`, `subject`, `msg` ) VALUES( '$name','$email','$mob','$subject','$msg' )");
                        if ($is_done == TRUE) {
                            $success = "success";
                            $_SESSION['success'] = $success;
                            header("Location: index1.php");
                        }
                    }
                }
