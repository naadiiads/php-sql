<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Data</title>
</head>
<body>
<h2>EMPLOYEES</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Extension</th>
        <th>Email</th>
        <th>Office Code</th>
        <th>ReportsTo</th>
        <th>Job Title</th>
    </tr>
    <?php
    include 'koneksi.php';
    
    $employees = mysqli_query($koneksi, "SELECT * from employees");
    foreach ($employees as $row){
        echo "<tr>
            <td>".$row['employeeNumber']."</td>
            <td>".$row['lastName']."</td>
            <td>".$row['firstName']."</td>
            <td>".$row['extension']."</td>
            <td>".$row['email']."</td>
            <td>".$row['officeCode']."</td>
            <td>".$row['reportsTo']."</td>
            <td>".$row['jobTitle']."</td>
            </tr>";
    }
    ?>
</table>

<h2>Product Line</h2>
<table border="1">
    <tr>
        <th>Product Line</th>
        <th>Text Description</th>
        <th>Html Description</th>
        <th>Image</th>
    </tr>
    <?php
    $product = mysqli_query($koneksi, "SELECT * from productlines");
    foreach ($product as $data){
        echo "<tr>
            <td>".$data['productLine']."</td>
            <td>".$data['textDescription']."</td>
            <td>".$data['htmlDescription']."</td>
            <td>".$data['image']."</td>
            </tr>";
    }
    ?>
</table>
</body>
</html>