<?php  
  include 'database.php';
  query(
    "INSERT INTO EMPLOYEES (
        Emp_Code,
        SSN,
        Union_Membership_Number,
        First_Name,
        Surname,
        Street_Name,
        Street_Number,
        Postal_Code,
        Year_of_Birth,
        Salary
    )
    VALUES (
        $_POST[Emp_Code],
        $_POST[SSN],
        $_POST[Union_Membership_Number],
        '$_POST[First_Name]', 
        '$_POST[Surname]',
        '$_POST[Street_Name]',
        $_POST[Street_Number],
        $_POST[Postal_Code],
        $_POST[Year_of_Birth],
        $_POST[Salary]
    )");

  query(
      "INSERT INTO E_MAILS (
        Emp_Code,
        E_mail
    )
    VALUES (
        $_POST[Emp_Code],
        '$_POST[E_mail]'
    )");
     
  query(
      "INSERT INTO PHONES (
        Emp_Code,
        Phone_Number
    )
    VALUES (
        $_POST[Emp_Code],
        $_POST[Phone_Number]
    )");

 
    
    $numargs = func_num_args();
    echo "Number of arguments: $numargs\n";
    Header ('Location: /~db/db-aviation/views/listEmployees.php');
?>
