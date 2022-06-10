<?php 

   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $password = $_POST['password'];


   $connection = mysqli_connect("localhost", "root", "", "crudProject");
   if(!$connection){
       echo "Error connecting";
   }else{
       $qeuery = mysqli_query($connection,"insert into users(firstname, lastname, username,  email, password) values('$firstname', '$lastname', '$lastname', '$email', '$password')");
       if(!$qeuery) {
           echo "Error inserting";
       }else{
           echo "Success";
       }

   }

?>