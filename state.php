
<?php include('header-user.php');?>
 <?php
session_start();
define('SITEURL','http://localhost/admin/home.php/');

 //echo  $_SESSION['user_name'];  
?>
<style>
body {
  /*background-image: url('css/search-food21.jpg');*/
  /* background-repeat: no-repeat;*/
}
</style>
<br>
<br>
         <section class="food-menu">

        <lable> <h3>Your order state</h3> </lable><?php
         echo $_SESSION['user_status'];
        ?>

</section>
</body>
</html>

   