<?php
    include "../header.php"
?>

<h2>Update an Aircraft Fleet</h2>

<form action="/~db/db-aviation/models/updateAircraftFleet.php" method="post">

    <table class="input form">
    <tr><td>Registration Number:</td><td> <input type="int" readonly="readonly" name="Registration_Number" value="<?php echo rtrim($_POST['Registration_Number'],'/'); ?>"/></td></tr>
    <tr><td>Air Carrier:</td><td> <input type="text" name="Air_Carrier" value="<?php echo rtrim($_POST['Air_Carrier'],'/'); ?>"/></td></tr>
    <tr><td>Construction Date:</td><td> <input type="int" name="Construction_Date" value="<?php echo rtrim($_POST['Construction_Date'],'/'); ?>"/></td></tr>
    <tr><td>Model Code:</td><td> <input type="int" name="Model_Code" value="<?php echo rtrim($_POST['Model_Code'],'/'); ?>"/></td></tr>
    </table>

    <input type='submit' value='Submit' title='Προσθήκη'/>                                                   

<form action='/~db/db-aviation/models/listAircraftFleet.php' method='post'>
    <input type='submit' value='Cancel' title='Άκυρο'/>                                                   
</form>


</form>                                                             


<?php
    include "../footer.php"
?>

