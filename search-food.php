<?php
session_start();
include('header-user.php');
?>

<section class="search-food text-center">
    <?php include('inc.php'); ?>
    <div class="container">
        <?php
        if (isset($_SESSION['order'])) {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
        ?>
    </div>
</section>

<section class="food-menu">
    <h2 class="text-center">Explore Foods</h2>

    <?php
    $sql = "SELECT * FROM tbl_food WHERE active ='yes' AND featured ='yes'";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $title = $row['title'];
            $price = $row['price'];
            $description = $row['description'];
            ?>

            <div class="food-menu-box">
                <div class="food-img">
                    <!-- <img src="imag/explor food10.jpg" alt="explor food1" class="img-responsive img-curve"> -->
                </div>

                <div class="food-desc">
                    <h4 class="food-title"><?php echo $title; ?></h4>
                    <p class="food-price">JOD <?php echo $price; ?></p>
                    <p class="food-detail"><?php echo $description; ?></p>
                    <a href="the_demand.php?food_id=<?php echo $id; ?>" class="btn food-btn">Order Now</a>
                </div>
            </div>
            <div class="clearfix"></div>

            <?php
        }
    } else {
        echo "<p class='text-center'>Food not available</p>";
    }
    ?>

</section>

<?php include('end-user.php'); ?>
