<!DOCTYPE>
<html>
<head>
<title>Student Admission Form Submission</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />
</head>
<body>
<div id="wrapper">
  <div id="left">
    <h1></h1>
    <div id="copyright">
      <p>Web Systems & Technologies 2</p>
      <p><a href="https://www.facebook.com/dave.oares" target="_blank">Oares, Dave Kale</a></p>
      <p><a href="https://www.facebook.com/kenneth.aurillas" target="_blank">Aurillas, John Kenneth</a></p>
      <p><a href="https://notxciting.github.io/" target="_blank">Zorilla, Jethro</a></p>
    </div>
  </div>
  <div id="right">
    <div id="nav">
      <ul>
        <li class="selected"><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Offer</a></li>
        <li><a href="#">Contact us</a></li>
        <li class="last"><a href="#">Log In</a></li>
      </ul>
    </div>
    <div id="body">
      <div id="body-top">
        <div id="body-bot">
          <div class="form_header">
            <img src="images/cspc_logo.jpg" alt="cspc_logo">
            <h2>Student Information</h2>
          </div>
          <hr>
        <br>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $last_name = $_POST["last_name"];
    $first_name = $_POST["first_name"];
    $name_extension = $_POST["name_extension"];
    $middle_name = $_POST["middle_name"];
    $date_of_birth = $_POST["date_of_birth"];
    $place_of_birth = $_POST["place_of_birth"];
    $sex = $_POST["sex"];
    $civil_status = $_POST["civil_status"];
    $nationality = $_POST["nationality"];
    $citizenship = $_POST["citizenship"];
    $permanent_address = $_POST["permanent_address"];
    $residential_address = $_POST["residential_address"];
    $contact_number = $_POST["contact_number"];
    $email_address = $_POST["email_address"];
    $religion = $_POST["religion"];
    $dialect = $_POST["dialect"];
    $course = $_POST["course"];

    echo "<div class='form-submission'>";
    echo "<div class='container'>";
    echo "<div class='sub-form-group'>";
    echo "<label for='last_name'>Last Name:</label>";
    echo "<input type='text' id='last_name' name='last_name' value='$last_name' readonly>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='first_name'>First Name:</label>";
    echo "<input type='text' id='first_name' name='first_name' value='$first_name' readonly>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='name_extension'>Ext.:</label>";
    echo "<input type='text' id='name_extension' name='name_extension' value='$name_extension' readonly>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='middle_name'>Middle Name:</label>";
    echo "<input type='text' id='middle_name' name='middle_name' value='$middle_name' readonly>";
    echo "</div>";
    echo "</div>";
    echo "<div class='container'>";
    echo "<div class='sub-form-group'>";
    echo "<label for='date_of_birth'>Date of Birth(mm/dd/yy):</label>";
    echo "<input type='text' id='date_of_birth' name='date_of_birth' value='$date_of_birth' readonly>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='place_of_birth' class='place_of_birth'>Place of Birth(City/Municipality/Province):</label>";
    echo "<input type='text' id='place_of_birth' name='place_of_birth' value='$place_of_birth' readonly>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='sex'>Sex:</label>";
    echo "<input type='text' id='sex' name='sex' value='$sex' readonly>";
    echo "</div>";
    echo "</div>";
    echo "<div class='container'>";
    echo "<div class='sub-form-group'>";
    echo "<label for='civil_status'>Civil Status:</label>";
    echo "<input type='text' id='civil_status' name='civil_status' value='$civil_status' readonly>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='nationality'>Nationality:</label>";
    echo "<input type='text' id='nationality' name='nationality' value='$nationality' readonly>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='citizenship'>Citizenship:</label>";
    echo "<input type='text' id='citizenship' name='citizenship' value='$citizenship' readonly>";
    echo "</div>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='permanent_address'>Permanent Address:</label>";
    echo "<input type='text' id='permanent_address' name='permanent_address' value='$permanent_address' readonly>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='residential_address'>Residential Address:</label>";
    echo "<input type='text' id='residential_address' name='residential_address' value='$residential_address' readonly>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='email_address'>Email Address:</label>";
    echo "<input type='text' id='email_address' name='email_address' value='$email_address' readonly>";
    echo "</div>";
    echo "<div class='container'>";
    echo "<div class='sub-form-group'>";
    echo "<label for='contact_number'>Contact Number:</label>";
    echo "<input type='text' id='contact_number' name='contact_number' value='$contact_number' readonly>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='religion'>Religion:</label>";
    echo "<input type='text' id='religion' name='religion' value='$religion' readonly>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='dialect'>Dialect:</label>";
    echo "<input type='text' id='dialect' name='dialect' value='$dialect' readonly>";
    echo "</div>";
    echo "</div>";
    echo "<div class='sub-form-group'>";
    echo "<label for='course'>Course:</label>";
    echo "<input type='text' id='course' name='course' value='$course' readonly>";
    echo "</div>";
    echo "</div>";
}
?>
          <br>
        </div>
      </div>
    </div>
    <button onclick="window.print()">Print</button>
  </div>
</div>
</body>
</html>