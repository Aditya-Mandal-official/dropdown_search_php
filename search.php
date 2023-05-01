<?php
    include('conn.php');
    $search=$_POST['search_data'];
?>
<?php
    $sel="SELECT * FROM country WHERE country_name LIKE '%$search%'";
    $exe=mysqli_query($conn,$sel);
    while($fetch=mysqli_fetch_assoc($exe)){ ?>
<li>
    <a href="#"><?php echo $fetch['country_name']; ?>
        <img src="img/<?php echo $fetch['country_image']; ?>" style="width:20px;" alt="" />
    </a>
</li>
<?php } ?>

