<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 
if($_SERVER["REQUEST_METHOD"]== 'POST'){
    $subjects = isset($_POST['subject']) ?$_POST['subject']:[];
}
?>
    <div class="card">
        
        <div class="card-body">
            <?php
            // CODE HERE
           foreach($subjects as $subject){
                $randomColor = $colors[array_rand($colors)];
                echo "<button type='button' class='mx-2 btn btn-$randomColor' disabled>$subject</button>";
           }
           
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>