<?php

   $connection = mysqli_connect('localhost:3306','root','','subscribe_db');

   if(isset($_POST['send'])){
      $email = $_POST['email'];
     

      $request = " insert into subscribe(email) 
      values('$email') ";
      mysqli_query($connection, $request);

      header('location:index.html #newsletter'); 
      
   

   }else{
      echo 'something went wrong please try again!';
   }

   

?>