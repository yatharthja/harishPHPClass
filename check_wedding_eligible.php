<h1 style="text-align:center;background-color:aqua"><?php echo "Harish PHP Class"; ?></h1>

<h3 style="text-align:center;">Program for check is person eligible for wedding</h3>


<form action="process_wedding_data.php" method="post">
    Enter Age: <input type="number" name="age">
    <br>
    Select Gender: <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
    <br>
    <button type="submit">Check</button>
</form>
