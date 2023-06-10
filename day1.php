<h1 style="text-align:center;background-color:aqua"><?php echo "Harish PHP Class"; ?></h1>

<a href="index.php"> <?php echo "< Back";?></a>
<?php 
    //print krne k liye 1st
    echo "<h2>Day I </h2>";
    
    //print krne k liye 2nd
    print("Hello there<br>");
    echo "Hello riteshq";
?>

<?php 
    //conditional operators
    /* 
        < (greater than), > (less than), <= (greater than equal), >= (less than equal), == (eqaul too), { multiple:  && (and), || (or) }
    */

    //vote k liye 18 age 
    $age = 18;
    if($age >= 18){
        echo "Eligible";
    } else {
        echo "Not Eligible";
    }

    // 10 sal ka hone pr pooja ka program
    $b = 10;

    if($b==10){
        echo "<br>Pooja krwani hai";
    }

    // TC k liye permission chahiye incharge aur principle ki

    $incharge = true;
    $principle = true;

    if ($incharge == true && $principle == true) {
        echo "<br>TC milegi";
    } else {
        echo "<br>Permission lao";
    }

    //chutti k liye permission chahiye incharge ya fir principle ki

    $principle = true;
    $incharge = true;

    if ($incharge == true || $principle == true) {
        echo "<br>chutti milegi";
    } else {
        echo "<br>permission lao";
    }
    
    //school function jisme permission chahiye incharge and mom ya fir papa ki
    
    $incharge = true;
    $mom = true;
    $dad = true;
    
    if($incharge == true && ($mom==true || $dad == true)) {
        echo "Funciton me jayenge";
    } else {
        echo "Permission lao";
    }
?>