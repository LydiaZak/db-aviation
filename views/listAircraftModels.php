<?php
    include "../header.php";
?>


<h2>Aircraft Models</h2>

<h4><th><a id='insert' href="/~db/db-aviation/views/createAircraftModels.php">INSERT</a></th></h4>

<table id="playlist" class = "content">
<tr class="odd">
<th>Model Code</th> 
<th>Model Name</th> 
<th>Capacity</th> 
<th>Weight</th> 
<th>Manufacturer</th>
<th></th>
<th></th>
</tr>

<?php
    $aircrafts = include "../models/listAircraftModels.php";

    foreach( $aircrafts as $aircraft ) {
        echo "<tr>";

        echo "<td>" .  $aircraft[ 'Model_Code' ] . "</td>";
        echo "<td><a class = 'models' href='/~db/db-aviation/views/listIsExpertIn.php?Model_Code=" . $aircraft[ 'Model_Code' ] ."&Model_Name=" . $aircraft[ 'Model_Name' ] . "'>" .  $aircraft[ 'Model_Name' ] . "</a></td>";
        echo "<td>" .  $aircraft[ 'Capacity' ] . "</td>";
        echo "<td>" .  $aircraft[ 'Weight' ] . "</td>";
        echo "<td>" .  $aircraft[ 'Manufacturer' ] . "</td>";
        
        echo "<td><form action='/~db/db-aviation/views/updateAircraftModels.php' method='post'>";
        echo "<input type='hidden' name='Model_Code' value=" . $aircraft[ 'Model_Code' ] . "/>";
        echo "<input type='hidden' name='Model_Name' value=" . $aircraft[ 'Model_Name' ] . "/>";
        echo "<input type='hidden' name='Capacity' value=" . $aircraft[ 'Capacity' ] . "/>";
        echo "<input type='hidden' name='Weight' value=" . $aircraft[ 'Weight' ] . "/>";
        echo "<input type='hidden' name='Manufacturer' value=" . $aircraft[ 'Manufacturer' ] . "/>";
        echo "<input type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";


        echo "<td><form action='/~db/db-aviation/models/deleteAircraftModels.php' method='post'>";
        echo "<input type='hidden' name='Model_Code' value=" . $aircraft[ 'Model_Code' ] . "/>";
        echo "<input type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        
        
        echo "</tr>";
    }

?>
</table>


<?php
    include "../footer.php";
?>

