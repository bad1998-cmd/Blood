    <?php
    include("connection.php");
    error_reporting(0);
    ?>


    <!DOCTYPE html>  
     <html>  
     <head>  
      <title>Donner</title>  
    </head>  
     <body background="dashbod.jpg">  
         <h2>BLOOD DONATION FORM</h2>  
        <form>  
         <fieldset>  
            <legend>Donner Details</legend>  
            <label>Enter your full name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
            <input type="text" name="name" required><br>  
             <br><br><label>Enter your email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <input type="email" name="email"required><br>  
             <br><br><label>Enter your Age</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
             <input type="text" name="age"required><br>

             <br>Enter your Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
             <input type="text" name="address"required><br>
             

             <br><br><label>Enter Your Mobile Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
             <input type="text" name="mobile"required><br>  
             <br><br><label>Enter your gender</label><br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="gender" name="gender" value="male"/>Male  <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="gender" name="gender" value="female"/>Female <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="gender" name="gender" value="others"/>others <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


              <br>Enter your Blood Group:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="radio" id="Group" name="group" value="A+"/>A(+ve) <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="Group" name="group" value="A-"/>A(-ve) <br/>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="Group" name="group" value="B+"/>B(+ve) <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input type="radio" id="Group" name="group" value="B-"/>B(-ve) <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="Group" name="group" value="AB+"/>AB(+ve) <br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="Group" name="group" value="AB-"/>AB(+ve) <br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="Group" name="group" value="O+"/>O(+ve) <br/>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="radio" id="Group" name="group" value="O-"/>O(-ve) <br/>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <br><br><label>Blood Unit</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="Number" name="unit"required><br>
             
            <br><br><label>Date</label>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="Date" name="date"required><br>
             
             <br><br><input type="Submit" value="Submit" name="submit">
                   &nbsp;&nbsp;&nbsp;
                   <input type="Reset" value="Reset" name='reset'>

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
    $bg=$_GET['group'];
    $bu=$_GET['unit'];
    $date=$_GET['date'];

    $query="INSERT INTO donner VALUES ('$n','$email','$age','$address','$mno','$gender','$bg','$bu','$date')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        //echo"Successfully Donate";
    }
    else
    {
        echo "faild to data in databases";
    }

    ?>