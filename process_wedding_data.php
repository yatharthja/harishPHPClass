<?php
//echo "<pre>"; print_r($_GET); (for method type get) {print_r() array ko print krne k liye use krte hai}
//echo "<pre>"; print_r($_POST);  (for method type post)

$age = $_POST['age'];
$gender = $_POST['gender'];

//echo $age."---".$gender; (dot is concat operator - dot se hum string ko jodte hai)

if ( ($age >= 18 && ($gender == "female" || $gender == "other")) || ($age >= 22 && $gender == "male")  ) {
    ?>
    
    <h2 style="background:aqua;color:yellow;">Yes Eligible</h2>

<?php } else { ?>
    
    <h2 style="background:red;">Not Eligible</h2>
<?php } ?>
