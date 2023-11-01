
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<div class="formCon">
<div class="form">
    <h1>Register</h1>
    <form action="POST">

    <label for="firstName">First name</label>
    <input type="text" id="firstName">
    <label for="LastName">Last name</label>
    <input type="text" id="LastName" >


    <label for="Email">Email</label>
    <input type="text" id='Email' placeholder=" Example@example.com">
    <label for="confirm">Confirm email</label>
    <input type="text" id= 'confirm' placeholder=" Example@example.com">


  
 
    <label class="GenderLabel" for="gender">Gender</label>
<div class="genderContainer">
        <div id="gender">
            <input type="radio" name ="gender" value= "Male"  class="g1"> Male
            </div>


            <div id="gender">
            <input type="radio" name="gender" value="Female"  class="g2"> Female
            </div>
            
    </div>

    <label for="job">Job title</label>
    <input type="text" id='job' placeholder="Ex. Web Developer">


    <label for="phone">Phone number</label>
    <input type="tel" id="phone" name="phone" placeholder=" +966 5XX-XXX-XXX">   
     <input id="submit" type="submit" name="Register" value="Register">
   
    
</form>
    </div>
</div>
</body>
</html>