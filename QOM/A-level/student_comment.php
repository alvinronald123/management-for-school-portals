<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/comment.css">
</head>
<body>
<?php require "header1.php"; ?>
<div class="student_profile">
    <img src="images/student.jpg" alt="Name">
    <div class="student_info">
        <h2>Student Information</h2>
        <div class="info_group">
            <p><strong>Name:</strong> John Doe</p>
            <p><strong>Age:</strong> 16</p>
            <p><strong>Class:</strong> 10A</p>
        </div>
        <div class="info_group">
            <p><strong>Class Teacher:</strong> Mrs. Smith</p>
            <p><strong>Head Teacher:</strong> Mr. Johnson</p>
            <p><strong>Stream:</strong> Science</p>
        </div>
        <div class="info_group">
            <p><strong>House:</strong> Blue House</p>
            <p><strong>Sex:</strong> Male</p>
            <p><strong>Date of Birth:</strong> 2005-05-10</p>
        </div>
        <div class="info_group">
            <p><strong>Student Number:</strong> 123456789</p>
            <p><strong>Parent Name:</strong> Jane Doe</p>
            <p><strong>Email:</strong> john.doe@example.com</p>
        </div>
    </div>
</div>
<br>
<hr>
<br>

<div class="container">
  <div class="links-container">
    <!-- Links here -->
    <div class="my_links">
    
   
<div class="links">
<p><h3>DASHBOARD</h3></p>
                <br>
    <a href="<?php echo "student_results.php"; ?>">Results</a>
    <a href="<?php echo "student_comb_sub.php";?>">Subjects</a>
    <a href="<?php echo "student_assignment.php";?>">Assignments</a>
    <a href="<?php echo "student_reaction.php";?>">Reactions</a>
    <a href="<?php echo "student_grading_used.php";?>">Grading Used</a>
    <a href="<?php echo "student_financial_view.php";?>">Financial View</a>
    <a href="<?php echo "student_teachers.php";?>">Teachers</a>
    <a href="<?php echo "student_prefects.php"; ?>">Prefects</a>
    <a href="<?php echo "student_comment.php";?>">Comments</a>
    <a href="<?php echo "student_time_table.php";?>">Time Table</a>
   <a href="<?php echo "student_attendance.php";?>">Attendance</a>
   <a href="<?php echo "student_uneb.php"; ?>">UNEB Past Results</a>
                    <a href="<?php echo "student_report.php"; ?>">Report</a>
                    


</div>

</div>
  </div>
  <div class="details-container">
  <h2>Comments From Students To QOM Management</h2>
  <br>
        <hr>
    <p class="paragraphy"><h3> Note:Comments must be fully academic or school based, if not a punishment will be awarded </h3></p>
    <hr>
    <br><br><br>
    <hr>
    <!-- Student details here -->
    <div>
    <form action="submit_comment.php" method="POST" class="comment-form">
        
  <div class="form-column">
    
    <div class="form-group">
        
      <label for="surname">Surname:</label>
      <input type="text" id="surname" name="surname" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="student-number">Student Number:</label>
      <input type="text" id="student-number" name="student-number" required>
    </div>
    <div class="form-group">
      <label for="house">House:</label>
      <input type="text" id="house" name="house" required>
    </div>
    <div class="form-group">
      <label for="age">Age:</label>
      <input type="text" id="age" name="age" required>
    </div>
    <div class="form-group">
      <label for="class-teacher">Class Teacher:</label>
      <input type="text" id="class-teacher" name="class-teacher" required>
    </div>
    <div class="form-group">
      <label for="parent-name">Parent Name:</label>
      <input type="text" id="parent-name" name="parent-name" required>
    </div>
  </div>
  <div class="form-column">
    <div class="form-group">
      <label for="other-names">Other Names:</label>
      <input type="text" id="other-names" name="other-names" required>
    </div>
    <div class="form-group">
      <label for="class">Class:</label>
      <input type="text" id="class" name="class" required>
    </div>
    <div class="form-group">
      <label for="combination">Combination:</label>
      <input type="text" id="combination" name="combination" required>
    </div>
    <div class="form-group">
      <label for="date-of-birth">Date of Birth:</label>
      <input type="text" id="date-of-birth" name="date-of-birth" required>
    </div>
    <div class="form-group">
      <label for="head-teacher">Head Teacher:</label>
      <input type="text" id="head-teacher" name="head-teacher" required>
    </div>
    <div class="form-group">
      <label for="parent-number">Parent Number:</label>
      <input type="text" id="parent-number" name="parent-number" required>
    </div>
    <div class="form-group">
      <label for="parent-number">Gender:</label>
      <input type="text" id="gender" name="gender" required>
    </div>
  </div>
  
</form>
<form action="submit_comment.php" method="POST" class="comment-form">
  <div class="form-column">
    <!-- First column fields -->
  </div>
  <div class="form-column">
    <!-- Second column fields -->
  </div>
  <div class="form-group textarea-group">
    <label for="comment">Comment:</label>
    <textarea id="comment" name="comment" placeholder="Enter your comment here" required></textarea>
  </div>
  <input type="submit" value="Submit" class="btn">
</form>


    </div>
  </div>
</div>
<br><br>
<?php require "footer.php"; ?>


</body>
</html>