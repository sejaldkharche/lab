<!DOCTYPE html>
<script>
    function validateForm() {
  let firstname = document.forms["myForm"]["firstname"].value;
  let middlename = document.forms["myForm"]["middlename"].value;
  let lastname = document.forms["myForm"]["lastname"].value;
  let phone = document.forms["myForm"]["phone"].value;
  let email = document.forms["myForm"]["email"].value;
  let percentile = document.forms["myForm"]["percentile"].value;
  let address = document.forms["myForm"]["address"].value;
  var regPhone=/^\d{10}$/;
  var regEmail=/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/g;
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
  if (phone == "" || !regPhone.test(phone)) {
                    alert("Please enter valid phone number.");
                    return false;
                }
  if (email == "" || !regEmail.test(email)) {
                    window.alert("Please enter a valid e-mail address.");
                    return false;
                }
  if (percentile == "") {
    alert("CET percentile must be filled out");
    return false;
  }
  if (address == "") {
                    window.alert("Please enter your address.");
                    return false;
                }
}
</script>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            body{
                font-family: Calibri, Helvetica, sans-serif;
                background-color: #5B2C6F;
                padding-left: 100px;
                padding-right: 100px;
                padding-top: 200px;
                padding-bottom: 200px;
            }

            .container {
              padding: 50px;
              background-color:#BB8FCE;
            }

            input[type=text], input[type=password], textarea {
                width: 100%;
                padding: 7px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
            }
            input[type=text]:focus, input[type=password]:focus {
                background-color: orange;
                outline: none;
            }
             div {
                         padding: 10px 0;
                     }
            hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
            }
            .submitbtn {
                background-color: #4caf50;
                color: white;
                padding: 16px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
            }
            .submitbtn:hover {
                opacity: 1;
            }
        </style>
    </head>
    <body>
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
            <label>
                <b>course :</b>
            </label>

            <select>
                <option value="Course">Course</option>
                <option value="BCA">BCA</option>
                <option value="BBA">BBA</option>
                <option value="B.Tech">B.Tech</option>
                <option value="MBA">MBA</option>
                <option value="MCA">MCA</option>
                <option value="M.Tech">M.Tech</option>
            </select>
            <label>
                <b>Category :</b>
            </label>

            <select>
                <option value="Category">Category</option>
                <option value="OPEN">OPEN</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
                <option value="NT">NT</option>
                <option value="PWD">PWD</option>
            </select>
            </div>
            <div>
            <label>
                <b>Gender :</b>
            </label><br>
            <input type="radio" value="Male" name="gender" checked > Male
            <input type="radio" value="Female" name="gender"> Female
            <input type="radio" value="Other" name="gender"> Other
            </div>
            <label>
                <b>Phone :</b>
            </label>
            <input id="phone" name="phone" type="tel" placeholder="Enter phone number" />
            <br>
            <br>
            <b>Current Address :</b>
            <textarea cols="80" rows="5" placeholder="Current Address" name="address" value="address">
            </textarea>
            <label for="Email"><b>Email :</b></label>
            <input type="text" name="email" placeholder="Enter Email">

            <label for="dob"><b>DOB :</b></label>
            <input type="date" name="dob" placeholder="Enter DOB"><br>
            <br>

            <label for="Percentage"><b>MHT-CET Total Percentile :</b></label>
            <input type="text" name="percentile" placeholder="Enter MHT-CET Total Percentile">

            <label for="Physics percentile"><b>Physics Percentile (Optional) :</b></label>
            <input type="text" name="phypercentile" placeholder="Enter Physics Percentile">

            <label for="Chemistry percentile"><b>Chemistry Percentile (Optional) :</b></label>
            <input type="text" name="chempercentile" placeholder="Enter Chem Percentile">

            <label for="Maths percentile"><b>Maths Percentile (Optional) :</b></label>
            <input type="text" name="mathpercentile" placeholder="Enter Maths Percentile">

            <button type="submit" class="submitbtn">submit</button>
        </form>
    </body>
</html>
