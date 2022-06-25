<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = "registration-form";
    
    $mysqli = mysqli_connect($servername, $username, $password, $db);

    if(!$mysqli) { die("Connection failed: " . mysqli_connect_error()) ;
    }

    

    $name = trim($_REQUEST['name']);
    $surname = trim($_REQUEST['surname']);
    $email =trim ($_REQUEST['email']);
    $password= trim($_REQUEST['password']);
    $gender = $_REQUEST['gender'];
    $age = $_REQUEST['age'];
    $skills = $_REQUEST['skills'];
    $about = trim($_REQUEST['about']);
    //$file = $_REQUEST['file'];





    $sql = "INSERT INTO users (name, surname, email, password, gender, age, skills, about) VALUES ('$name', '$surname', '$email', '$password', '$gender', '$age', '$skills', '$about')";
    
    if ($mysqli->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
    $mysqli->close();






    //$mysqli->query("INSERT INTO users (name, surname, email, password, gender, age, skills, about,) VALUES ('$name', '$surname', '$email', '$password', '$gender', '$age', '$skills', '$about')");
    
echo '<pre>' ;
print_r($_REQUEST);
echo '</pre>' ;



require 'index.html'; 


}




    


 












 














 
