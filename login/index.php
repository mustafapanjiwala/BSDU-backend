<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script>
        function favTutorial() {
            var mylist = document.getElementById("myList");
            document.getElementById("favourite").value = mylist.options[mylist.selectedIndex].text;
        }

    </script>
</head>

<body>
    <form action="register.php" method="post">
        <input type="text" name="fname" placeholder="Full Name*"><br>
        <select id = "myList" onchange = "favTutorial()" name="programmes">
        <option> Select Programmes </option>
        <option> Under Graduate </option>
        <option> Post Graduate </option>
        </select>
       <br>
       <select id = "myList" onchange = "favTutorial()" name="course">
        <option> Select Course</option>
        <option> B.Voc in Entrepreneurship Skills (Beauty & Wellness) </option>
        <option> B.Voc in Electrical Skills </option>
        <option> B.Voc in Electrical Skills </option>
        <option> B.Voc in Electrical Skills </option>
        <option> B.Voc in Electrical Skills </option>
        </select>
       
<input type="number" placeholder="Mobile Number" name="number">
    <input type="email" placeholder="Email Address" name="mail">
    
<br>
       <select id = "myList" onchange = "favTutorial()" name="state">
        <option> Select State</option>
        <option> maharashtra </option>
        <option> mp </option>
        <option> ap </option>
        <option> up </option>
        <option> hp </option>
        </select>
        
        <br>
       <select id = "myList" onchange = "favTutorial()" name="city">
        <option> Select City</option>
        <option> Dehli </option>
        <option> mumbai </option>
        <option> indore </option>
        <option> ujjain </option>
        <option> jaipur </option>
        </select>
        
        <br>
<input type="Submit" name="submit" value="submit">
    </form>
</body>

</html>
