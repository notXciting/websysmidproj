<!DOCTYPE>
<html>
<head>
<title>Student Admission</title>
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
          <h2>Student Admission Form</h2>
          <p>*Please ensure all the fields in the form are filled in accurately.</p>
          <form action="form_submission.php" method="POST">
    <div class="form-group">
        <label for="last_name" id="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
    </div>
    <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
    </div>
    <div class="form-group">
        <label for="name_extension">Name Extension(Jr./Sr./III):</label>
        <input type="text" id="name_extension" name="name_extension">
    </div>
    <div class="form-group">
        <label for="middle_name">Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name">
    </div>
    <div class="form-group">
        <label for="date_of_birth">Date of Birth(mm/dd/yy):</label>
        <input type="text" id="date_of_birth" name="date_of_birth" required>
    </div>
    <div class="form-group">
        <label for="place_of_birth">Place of Birth(City/Municipality/Province):</label>
        <input type="text" id="place_of_birth" name="place_of_birth" required>
    </div>
    <div class="form-group">
        <label for="sex">Sex:</label>
        <select id="sex" name="sex" required>
            <option value=""></option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>
    <div class="form-group">
        <label for="civil_status">Civil Status:</label>
        <select id="civil_status" name="civil_status" required>
            <option value=""></option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
            <option value="Separated">Separated</option>
            <option value="Annulled">Annulled</option>
        </select>
    </div>
    <div class="form-group">
        <label for="nationality">Nationality:</label>
        <input type="text" id="nationality" name="nationality" required>
    </div>
    <div class="form-group">
        <label for="citizenship">Citizenship:</label>
        <input type="text" id="citizenship" name="citizenship" required>
    </div>
    <div class="form-group">
        <label for="permanent_address">Permanent Address:</label>
        <input type="text" id="permanent_address" name="permanent_address" required>
    </div>
    <div class="form-group">
        <label for="residential_address">Residential Address:</label>
        <input type="text" id="residential_address" name="residential_address" required>
    </div>
    <div class="form-group">
        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="contact_number" required>
    </div>
    <div class="form-group">
        <label for="email_address">Email Address:</label>
        <input type="email" id="email_address" name="email_address" required>
    </div>
    <div class="form-group">
        <label for="religion">Religion:</label>
        <input type="text" id="religion" name="religion" required>
    </div>
    <div class="form-group">
        <label for="dialect">Dialect:</label>
        <input type="text" id="dialect" name="dialect" required>
    </div>
    <div class="form-group">
        <label for="course">Course:</label>
        <select id="course" name="course" required>
            <option value=""></option>
            <option value="Doctor of Philosophy in Business Management">Doctor of Philosophy in Business Management</option>
            <option value="Master of Arts in Nursing major in Disaster Resilience">Master of Arts in Nursing major in Disaster Resilience</option>
            <option value="Master in Business Management">Master in Business Management</option>
            <option value="Bachelor of Science in Civil Engineering">Bachelor of Science in Civil Engineering</option>
            <option value="Bachelor of Science in Mechanical Engineering">Bachelor of Science in Mechanical Engineering</option>
            <option value="Bachelor of Science in Electrical Engineering">Bachelor of Science in Electrical Engineering</option>
            <option value="Bachelor of Science in Electronics Engineering">Bachelor of Science in Electronics Engineering</option>
            <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
            <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
            <option value="Bachelor of Library Information Science">Bachelor of Library Information Science</option>
            <option value="Bachelor of Science in Information Systems">Bachelor of Science in Information Systems</option>
            <option value="Bachelor of Science in Nursing">Bachelor of Science in Nursing</option>
            <option value="Bachelor of Science in Midwifery">Bachelor of Science in Midwifery</option>
            <option value="Bachelor of Science in Office Administration">Bachelor of Science in Office Administration</option>
            <option value="Bachelor of Science in Hospitality Management">Bachelor of Science in Hospitality Management</option>
            <option value="Bachelor of Science in Tourism Management">Bachelor of Science in Tourism Management</option>
            <option value="Bachelor of Science in Entrepreneurship">Bachelor of Science in Entrepreneurship</option>
            <option value="BTVTEd, Major in Food Service Management">BTVTEd, Major in Food Service Management</option>
            <option value="BTVTEd, Major in Electronics Technology">BTVTEd, Major in Electronics Technology</option>
            <option value="BTVTEd, Major in Fish Processing">BTVTEd, Major in Fish Processing</option>
            <option value="Bachelor of Physical Education">Bachelor of Physical Education</option>
            <option value="Bachelor of Culture and Arts Education">Master of Arts in Nursing</option>
            <option value="Bachelor of Special Needs Education">Bachelor of Special Needs Education</option>
            <option value="Bachelor of Arts in English Language Studies">Bachelor of Arts in English Language Studies</option>
            <option value="Bachelor of Science in Mathematics">Bachelor of Science in Mathematics</option>
            <option value="Bachelor of Science in Development Communication">Bachelor of Science in Development Communication</option>
            <option value="Bachelor of Public Administration">Bachelor of Public Administration</option>
            <option value="Bachelor in Human Services">Bachelor in Human Services</option>
        </select>
    </div>
    <div class="form-group">
        <div class="submit-button">
        <input type="submit" value="Submit">
        </div>
    </div>
</form>
          <br />
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
