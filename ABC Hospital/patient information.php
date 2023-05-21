<?php

session_start();

include("info.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   $firstname = $_POST['fname'];
   $lastname = $_POST['lname'];
   $gmail = $_POST['email'];
   $Gender = $_POST['gender'];
   $date = $_POST['date'];
   $NIC = $_POST['id'];
   $MaritalStatus = $_POST['status'];
   $ContactNumber = $_POST['number'];
   $address = $_POST['address'];
   $city = $_POST['city'];
   $province = $_POST['province'];
   $postalcode = $_POST['zipcode'];
   $fullname = $_POST['fullname'];
   $relationship = $_POST['relationship'];
   $EContactNumber = $_POST['cnumber'];
   $InsuranceCompany = $_POST['icompany'];
   $policynumber = $_POST['pnumber'];
   $groupnumber = $_POST['gnumber'];

   if (!empty($gmail) && !is_numeric($gmail)) {
      $query = "INSERT INTO personal_information (fname, lname, gmail, gender, date, id, status, number, address, city, province, zipcode, fullname, relationship, cnumber, iCompany, pnumber, gnumber)
                VALUES ('$firstname', '$lastname', '$gmail', '$Gender', '$date', '$NIC', '$MaritalStatus', '$ContactNumber', '$address', '$city', '$province', '$postalcode', '$fullname', '$relationship', '$EContactNumber', '$InsuranceCompany', '$policynumber', '$groupnumber')";

      
      mysqli_query($con, $query);

      echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
   } else {
      echo "<script type='text/javascript'> alert('Please Enter Valid Information')</script>";
   }
}
?>




<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="patient information.css"/>
        <title>Patient Information</title>
        <link rel="icon" href="icon.png">
    </head>

    <body>
        <img class="logo" src="Logo.png"/>
        <hr />
        
        
            <div class="box">
    
                <h1 class="h1">New Patient Registration</h1>
                <p class="p">Please fill in the form below</p>
                <hr class="line"/><br>

                

                <div class="info">
                    <h2 class="h2">(1) Personal Information</h2><br>
                
            <form class="form" method="POST">
                
                &nbsp;&nbsp;&nbsp;&nbsp;<label>First Name</label>
                <input type="text" name="fname" required>&nbsp;&nbsp;&nbsp;&nbsp;
               
                &nbsp;&nbsp;&nbsp;&nbsp;<label>Last Name</label>
                <input type="text" name="lname" required><br><br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;<label>Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="email" placeholder="ex:myname@example.com" ><br><br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;<label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label>Male</label>
            <input  type="radio" name="gender" value="Male" checked >  
            <label>Female</label> 
            <input  type="radio" name="gender" value="Female" checked ><br><br><br>

            &nbsp;&nbsp;&nbsp;&nbsp;<label>Date Of Birth</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="date" class="date" name="date" required><br><br><br>
            <label>NIC (National Identity Card)</label>
             <input type="CNIC" class="id"  name="id"  placeholder="xxxxxxxxxv"  /><br><br><br>

             <label>Marital Status:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <label>Single</label>
             <input  type="radio" name="status" value="Single"  >  
             <label>Married</label> 
             <input  type="radio" name="status" value="Married"  >
 


             <hr class="line1"/><br><br>

             <label>Contact Number</label>
             <input type="tel" name="number" class="number"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="xxx-xxx-xxxx"/><br><br><br>

             <label>Address</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="address" />

             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>City</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="city" /><br><br><br>

             <label>Province</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <select name="province" >
                <option value="province">Select Your Province</option>
                <option value="Northern">Northern Province</option>
                <option value="North Central">North Central Province</option>
                <option value="North Western">North Western Province</option>
                <option value="Central">Central Province</option>
                <option value="Eastern">Eastern Province</option>
                <option value="Western">Western Province</option>
                <option value="Sabaragamuwa">Sabaragamuwa Province</option>
                <option value="Uva">Uva Province</option>
                <option value="Southern">Southern Province</option>

             </select>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Postal/Zip code</label>
             <input type="text" name="zipcode" /><br><br>

             <hr class="line1"/><br><br>

            <p>In a Case of emergency...</p><br>

            <label>Full Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="fullname" /><br><br><br>

            <label>Relationship</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="relationship" /><br><br><br>

            <label>E Contact Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="tel" name="cnumber" class="number"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="xxx-xxx-xxxx"/><br><br><br>

             <hr class="line1"/><br><br>

             <h2 class="h2">(2) Insurance Information</h2><br><br>

             <label>Insurance Company</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text"  name="icompany"/><br><br><br>

             <label>Policy Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text"  name="pnumber"/><br><br><br>

             <label>Group Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text"  name="gnumber"/><br><br><br><br><br><br>

             <label class="checkbox" for="myCheckboxId">
                <input class="checkbox_ _input" type="checkbox" name="checkbox" id="checkbox" required>
                <div class="checkbox_ _box" requried></div> 
                <p class="cbox">I certify that the Information submitted by me is correct and true.</p> <br><br><br>
                </label>
                <input  type="submit" name="submit" value="Register">

                <p class="p1">If You Want To Update Information</p>
       <p class="click"><a href="update information.php">Click Here</a><br></br>
       Or<br>
    Go To Home Page<br><br>
    <a href="Home page.php"> Click Here </p>
                
                

                
              

            </form>
            </div>
    </body>
</html>