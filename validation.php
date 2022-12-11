<!DOCTYPE html>
<script>
    function validateForm() {
  let firstname = document.forms["myForm"]["firstname"].value;
  let middlename = document.forms["myForm"]["middlename"].value;
  let lastname = document.forms["myForm"]["lastname"].value;
  if (firstname == "") {
    alert("Name must be filled out");
    return false;
  }
  if (middlename == "") {
    alert("Middle name must be filled out");
    return false;
  }
  if (lastname == "") {
    alert("Last name must be filled out");
    return false;
  }
}
  </script>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <style>
    .div1 {
        background-color: aquamarine;
    }

    .div2 {
        background-color: blanchedalmond;
    }
    </style>
    <form name="myForm" onsubmit="return validateForm()" method="post">
            <div class="container">
                <center> <h1>VIT PUNE Student Admission Form</h1></center>
                <hr>
                <label><b>Firstname:</b></label>
                <input type="text" name="firstname" placeholder="Firstname" size="15" />
                <label><b>Middlename:</b></label>
                <input type="text" name="middlename" placeholder="Middlename" size="15" />
                <label><b>Lastname:</b></label>
                <input type="text" name="lastname" placeholder="Lastname" size="15" />
            <div>
            <button type="submit" class="submitbtn">submit</button>
        </form>
    


        

</body>

</html>