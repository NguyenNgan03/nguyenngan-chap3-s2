<?php // HEADER
include('templates/header.php')
?>
<?php
    // YOUR CODE HERE 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $colors = $_POST['color'];
        $ranges = $_POST['range'];
        $dates = $_POST['date'];
    }
    else{
        echo "form ko có giá trị";
    }
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php echo "$colors"; ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php echo"$ranges"; ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php echo" $dates"; ?></span>
    </div>
<?php //FOOTER 
include("templates/footer.php")
?>