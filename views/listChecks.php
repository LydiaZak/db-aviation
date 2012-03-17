<?php
    include "../header.php";
?>


<h2>Checks</h2>
<table id="playlist" class = "content">
<tr class="even">
<th>Registration Number</th> 
<th>Test Number</th> 
<th>Emp Code</th> 
<th>Check ID</th> 
<th>Check Duration</th>
<th>Check Score   </th>
</tr>

<?php
    $checks = include "../models/listChecks.php";

    foreach( $checks as $check ) {
        echo "<tr>";

        echo "<td>" .  $check[ 'Registration_Number' ] . "</td>";
        echo "<td>" .  $check[ 'Test_Number' ] . "</td>";
        echo "<td>" .  $check[ 'Emp_Code' ] . "</td>";
        echo "<td>" .  $check[ 'Check_ID' ] . "</td>";
        echo "<td>" .  $check[ 'Check_Duration' ] . "</td>";
        echo "<td>" .  $check[ 'Check_Score' ] . "</td>";
        
        echo "<td><form action='/~db/db-aviation/views/updateChecks.php' method='post'>";
        echo "<input type='hidden' name='Registration_Number' value=" . $check[ 'Registration_Number' ] . "/>";
        echo "<input type='hidden' name='Test_Number' value=" . $check[ 'Test_Number' ] . "/>";
        echo "<input type='hidden' name='Emp_Code' value=" . $check[ 'Emp_Code' ] . "/>";
        echo "<input type='hidden' name='Check_ID' value=" . $check[ 'Check_ID' ] . "/>";
        echo "<input type='hidden' name='Check_Duration' value=" . $check[ 'Check_Duration' ] . "/>";
        echo "<input type='hidden' name='Check_Score' value=" . $check[ 'Check_Score' ] . "/>";
        echo "<input type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";


        echo "<td><form action='/~db/db-aviation/models/deleteChecks.php' method='post'>";
        echo "<input type='hidden' name='Registration_Number' value=" . $check[ 'Registration_Number' ] . "/>";
        echo "<input type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        
        
        echo "</tr>";
    }

?>
</table>

<th><a href="/~db/db-aviation/views/createChecks">Insert</a></th>


<?php
    include "../footer.php";
?>
