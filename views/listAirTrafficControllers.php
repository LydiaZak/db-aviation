<?php
    include "../header.php";
?>

<h2>Air Traffic Controllers</h2>
<table>
<tr>
<th>Emp_Code</th>
<th>SSN</th>
<th>Union_Membership_Number</th>
<th>First_Name</th>
<th>Surname</th>
<th>Street_Name</th>
<th>Street_Number</th>
<th>Postal_Code</th>
<th>Year_of_Birth</th>
<th>Salary</th>
<th>e-mail</th>
<th>Phone</th>
<th>      </th>
<th>      </th>
</tr>

<?php
    $employees = include "../models/listAirTrafficControllers.php";

    foreach( $employees as $employee ) {
        echo "\n<tr>";
        
        echo "<td>" .  $employee[ 'Emp_Code' ] . "</td>";
        echo "<td>" .  $employee[ 'SSN' ] . "</td>";
        echo "<td>" .  $employee[ 'Union_Membership_Number' ] . "</td>";
        echo "<td>" .  $employee[ 'First_Name' ] . "</td>";
        echo "<td>" .  $employee[ 'Surname' ] . "</td>";
        echo "<td>" .  $employee[ 'Street_Name' ] . "</td>";
        echo "<td>" .  $employee[ 'Street_Number' ] . "</td>";
        echo "<td>" .  $employee[ 'Postal_Code' ] . "</td>";
        echo "<td>" .  $employee[ 'Year_of_Birth' ] . "</td>";
        echo "<td>" .  $employee[ 'Salary' ] . "</td>";
        echo "<td><a href='mailto:" .  $employee[ 'E_mail' ] . "'>" . $employee[ 'E_mail' ] . "</a></td>";
        echo "<td>" .  $employee[ 'Phone_Number' ] . "</td>";
        
        echo "<td><form action='/~db/db-aviation/views/updateAirTrafficControllers.php' method='post'>";
        echo "<input type='hidden' name='Emp_Code' value=" . $employee[ 'Emp_Code' ] . "/>";
        echo "<input type='hidden' name='SSN' value=" . $employee[ 'SSN' ] . "/>";
        echo "<input type='hidden' name='Union_Membership_Number' value=" . $employee[ 'Union_Membership_Number' ] . "/>";
        echo "<input type='hidden' name='First_Name' value=" . $employee[ 'First_Name' ] . "/>";
        echo "<input type='hidden' name='Surname' value=" . $employee[ 'Surname' ] . "/>";
        echo "<input type='hidden' name='Street_Name' value=" . $employee[ 'Street_Name' ] . "/>";
        echo "<input type='hidden' name='Street_Number' value=" . $employee[ 'Street_Number' ] . "/>";
        echo "<input type='hidden' name='Postal_Code' value=" . $employee[ 'Postal_Code' ] . "/>";
        echo "<input type='hidden' name='Year_of_Birth' value=" . $employee[ 'Year_of_Birth' ] . "/>";
        echo "<input type='hidden' name='Salary' value=" . $employee[ 'Salary' ] . "/>";
        echo "<input type='hidden' name='E_mail' value=" . $employee[ 'E_mail' ] . "/>";
        echo "<input type='hidden' name='Phone_Number' value=" . $employee[ 'Phone_Number' ] . "/>";
        echo "<input type='submit' value='Edit' title='Επεξεργασία'/>";
        echo "</form></td>";
        
        echo "<td><form action='/~db/db-aviation/models/deleteEmployee.php' method='post'>";
        echo "<input type='hidden' name='Emp_Code' value=" . $employee[ 'Emp_Code' ] . "/>";
        echo "<input type='submit' value='&times;' title='Διαγραφή'/>";
        echo "</form></td>";
        
        echo "</tr>";
    }

?>
</table>

<th><a href="/~db/db-aviation/views/createAirTraficControllers/">Insert</a></th>

<?php
    include "../footer.php";
?>