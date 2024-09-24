     <?php
session_start();
?>
    <?php include('inc.php');?>
 <?php include('header-user.php');?>
            
 <?php
 //echo " hello";
 if(isset($_GET['food_id']))
 {
     //echo" its work";
     $food_id = $_GET['food_id'];
     $sql = "SELECT * FROM tbl_food WHERE id=$food_id";
     $res=mysqli_query($conn, $sql);
     $count = mysqli_num_rows($res);
     if($count==1)
     {
         
         $row=mysqli_fetch_assoc($res);
         $title=$row['title'];
         $price=$row['price'];
     }
 }
 else {
    // echo " no soory";
	header("location:search-food.php");
}
 ?>
     <section class="order-now">
          <div class="container">
      <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
      </div>
      <form action ="" method= "POST" class="order">
      
        <fieldset>
            <legend>select food</legend>
             <div class="container">
            <h3> <?php echo $title;?></h3>
            <input type="hidden" name="food" value="<?php echo $title;?>">
            </div>
            <p> food price<?php echo $price ;?></p>
            <input type="hidden" name="price" value="<?php echo $price;?>">

            <div calss="order-label">Quantity</div>
            <input type= "number" name="qty" value="<?php echo $qty;?>" required>

           </div>
            </fieldset>
         <fieldset>
            <legend> delivery food </legend>
             <div class="order-label">full name </div> 
             <input type="text"  name ="full-name" value=" <?php echo  $_SESSION['user_name'];?>" class="input-responsivee" required readonly >

           
                <div class="order-label"> Id number</div>
             <input type="tel" name ="contact" value=" <?php echo  $_SESSION['id_number'];?>" class="input-responsivee" required readonly>

             <div class="order-label"> customer_email </div>
             <input type="email" name = "email" placenolder="University ID"  class="input-responsivee"required>
               <input type="submit" name="submit" value= "Confirm Order" class="btn">
                 
              </fieldset>
            </form>
            <?php
            if(isset($_POST['submit']))
            {
                $food = $_POST['food'];
                $price = $_POST['price'];
                $qty = $_POST['qty'];

                $total = $price * $qty;

                $order_date = date("Y-m-d");
                $status = "ordered"; //order, puy later
                $customer_name = $_POST['full-name'];
              $customer_contact = $_POST['contact'];
               $customer_email = $_POST['email'];
            
            $sql2="INSERT INTO tbl_order SET 
           food ='$food',
           price =$price,
           qty =$qty,
            total =$total,
            order_date ='$order_date',
            status ='$status',
            customer_name ='$customer_name',
            customer_contact ='$customer_contact',
             customer_email='$customer_email'
              ";

             //echo $sql2;

  $res2= mysqli_query($conn,$sql2);
	if($res2==TRUE)
	{ 
    //echo "Your order";
    $_SESSION['order'] = "Food order successfuly";
    header("location:state.php");
}
else
{
    //echo "failed";	
     $_SESSION['order'] = "Food order Fsiled";
    header("location:search-food.php");
}
            } 
             ?>
              </div>
              </section>
    
   <?php include('end-user.php');?>
