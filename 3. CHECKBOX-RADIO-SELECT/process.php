<?php // HEADER 
include('templates/header.php');
?>
<?php
// YOUR CODE HERE

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $province = $_POST['province'];
    $gender = $_POST['gender'];
    $subject = $_POST['subjects']? $_POST['subjects'] : [];
}
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo $province; ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <!-- YOUR CODE HERE [gender] -->
           <?php  
                if($gender == "Male"){
                    echo '<img src="images/male.png" alt="Male">';
                }
                elseif($gender == "Female"){
                    echo '<img src="images/female.png" alt="Female">';
                }
           ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
                // YOUR CODE HERE [subject]
                $colors= 'warning';
                foreach($subject as $subjects){
                    echo "<button type='button' class='mx-2 btn btn-$colors' disabled>$subjects</button>";
                }
            ?>
        </div>
    </div>

<?php // FOOTER 
include('templates/footer.php')
?>