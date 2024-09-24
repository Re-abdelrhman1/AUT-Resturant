 <?php
session_start();
define('SITEURL','http://localhost/admin/home.php/');

 //echo  $_SESSION['user_name'];  
?>
 <?php include('header-user.php');?>

     <section class="main">
         <div>
             <h1> Welcome </h1>
             <p> to the Aqaba University of Technology  restauran <br>
             We offer all kinds of food For delivery, order and, pay later </p>
              </div>
        </section>
    <section class ="cards">
        <div class="content">
        <div class="card" >

            <div class="icon">
                <img src="imag/fast food.jpg"alt="fast food">
                </div>
            <div class ="info">
                <h1>Fast food</h1>
                <p>A different menu of fast food, meat and chicken meals</p>
                </div>
            </div>
        <div class="card">
            <div class="icon">
                <img src="imag/Lunches.jpg"alt="Lunches">
                </div>
            <div class ="info">
                <h1>Lunches</h1>
                <p>Always varied and unique lunches</p>
                </div>
            </div>
        <div class="card">
            <div class="icon">
                <img src="imag/sweetening.jpg" alt="sweetening">
                </div>
            <div class ="info">
                <h1>sweetening</h1>
                <p>Limited types of sweets and cold drinks</p>
                </div>
            </div>
            </div>
        </section>
    <section class="social-media"id="connect us">
        <div class="contentsocial">
        <h2>Connect us</h2>
        <a href="https://web.facebook.com/people/%D9%85%D8%B7%D8%B9%D9%85-%D8%AC%D8%A7%D9%85%D8%B9%D8%A9-%D8%A7%D9%84%D8%B9%D9%82%D8%A8%D8%A9-%D9%84%D9%84%D8%AA%D9%83%D9%86%D9%88%D9%84%D9%88%D8%AC%D9%8A%D8%A7-Aut/100083118020802/"><img src="imag/facc.png"alt="facebook"></a>
        <h5>Please follow us on Facebook<br> We receive all complaints and suggestions
            </h5>
            </div>
        </section>
   <?php include('end-user.php');?>