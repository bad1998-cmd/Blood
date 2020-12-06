    <?php
    include("connection.php");
    error_reporting(0);
    ?>


   <!DOCTYPE html>  
     <html>  
     <head>  
      <title>Need of Blood</title>  
    </head>  
     <body background="wp4323556.jpg">  
         <h2>REQUEST OF BLOOD FORM</h2>  
        <form>  
         <fieldset>  
            <legend>BLOOD REQUEST</legend>  
            <label>Patient full name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
            <input type="text" name="name"required><br>  
             <br><br><label>Patient Email id</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <input type="email" name="email"required><br>  
             <br><br><label>Patient Age</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
             <input type="text" name="age"required><br>

             <br>Patient Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
             <input type="text" name="address"required><br>
             //<textarea></textarea><br> 

             <br><br><label>Patient Mobile Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
             <input type="text" name="mobile"required><br>  
             <br><br><label>Patient gender</label><br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="gender" name="gender" value="male"/>Male  <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="gender" name="gender" value="female"/>Female <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="gender" name="gender" value="others"/>others <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

             <br><br><label>Patient Refrence Or Hospital Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
             <input type="text" name="hospital"required><br>

             <br><br><label>Docter Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
             <input type="text" name="dname"required><br>

             <br><br><label>Any disease in Last One Months</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
              <input type="radio" id="disease" name="disease" value="yes"/>Male  <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="disease" name="disease" value="no"/>Female <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             


              <br>Need of Blood Group:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="radio" id="Group" name="group" value="A+"/>A(+ve) <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="Group" name="group" value="A-"/>A(-ve) <br/>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="Group" name="group" value="B+"/>B(+ve) <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="radio" id="Group" name="group" value="B-"/>B(-ve) <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="Group" name="group" value="AB+"/>AB(+ve) <br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="Group" name="group" value="AB-"/>AB(+ve) <br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="Group" name="group" value="O+"/>O(+ve) <br/>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="Group" name="group" value="O-"/>O(-ve) <br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <br><br><label>Need of Blood Unit</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="Number" name="unit"required><br>
             
            <br><br><label>Date</label>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="Date" name="date"required><br>
             
             <br><br><input type="Submit" value="Submit" name="submit">
                   &nbsp;&nbsp;&nbsp;
                   <input type="Reset" value="Reset" name="reset">

         </fieldset>  
      </form>  
     </body>  
    </html>  

    <?php

    $n=$_GET['name'];
    $email=$_GET['email'];
    $age=$_GET['age'];
    $address=$_GET['address'];
    $mno=$_GET['mobile'];
    $gender=$_GET['gender'];
    $hn=$_GET['hospital'];
    $dn=$_GET['dname'];
    $disease=$_GET['disease'];

    $bg=$_GET['group'];
    $bu=$_GET['unit'];
    $date=$_GET['date'];

    $query="INSERT INTO request VALUES ('$n','$email','$age','$address','$mno','$gender','$hn','$dn','$disease','$bg','$bu','$date')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        //echo"Successfully Blood request";
    }
    else
    {
        echo "faild to data in databases";
    }

    ?>