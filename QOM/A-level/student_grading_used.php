<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/grade.css">
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
  <div class="subject_title">
        <h2>Grading System For QOM.</h2>
        <hr>
    <p class="paragraphy"><h3> Program:Arts-sciences:Year-2023:Term-1 </h3></p>
    <hr>
    <br>
    <table class="subject_heads">
    <thead>
      <tr>
        <th>Id No</th>
        <th>Scale</th>
        <th>Points</th>
        <th>Remarks</th>
        <th>Points</th>
      </tr>
    </thead>
           
    <tbody>
      <tr>
        <td>1</td>
        <td>A</td>
        <td>6.0</td>
        <td>Excellent</td>
        <td>85%-100%</td>
      </tr>
      <tr>
        <td>2</td>
        <td>B</td>
        <td>5.0</td>
        <td>Perfect</td>
        <td>75%-84%</td>
      </tr>
      <tr>
        <td>3</td>
        <td>C</td>
        <td>4.0</td>
        <td>Good</td>
        <td>65%-74%</td>
      </tr>
      <tr>
        <td>4</td>
        <td>D</td>
        <td>3.0</td>
        <td>Fair</td>
        <td>55%-64%</td>
      </tr>
        <tr>
        <td>5</td>
        <td>E</td>
        <td>2.0</td>
        <td>Poor</td>
        <td>45%-54%</td>
      </tr>
      <tr>
        <td>6</td>
        <td>O</td>
        <td>1.0</td>
        <td>Poor</td>
        <td>40%-44%</td>
      </tr>
      <tr>
        <td>7</td>
        <td>F</td>
        <td>0.0</td>
        <td>Poor</td>
        <td>0%-39%</td>
      </tr>
     
      
 
    
      <!-- Add more rows as needed -->
    </tbody>
        </table>

    </div>
    <div class="subject_title">
        <h2>Grading System For QOM.</h2>
        <hr>
    <p class="paragraphy"><h3> Program:Arts-sciences:Year-2023:Term-1 </h3></p>
    <hr>
    <br>
    <table class="subject_heads">
    <thead>
      <tr>
        <th>Id No</th>
        <th>Scale</th>
        <th>Points</th>
        <th>Remarks</th>
        <th>Points</th>
      </tr>
    </thead>
           
    <tbody>
      <tr>
        <td>1</td>
        <td>A</td>
        <td>6.0</td>
        <td>Excellent</td>
        <td>85%-100%</td>
      </tr>
      <tr>
        <td>2</td>
        <td>B</td>
        <td>5.0</td>
        <td>Perfect</td>
        <td>75%-84%</td>
      </tr>
      <tr>
        <td>3</td>
        <td>C</td>
        <td>4.0</td>
        <td>Good</td>
        <td>65%-74%</td>
      </tr>
      <tr>
        <td>4</td>
        <td>D</td>
        <td>3.0</td>
        <td>Fair</td>
        <td>55%-64%</td>
      </tr>
        <tr>
        <td>5</td>
        <td>E</td>
        <td>2.0</td>
        <td>Poor</td>
        <td>45%-54%</td>
      </tr>
      <tr>
        <td>6</td>
        <td>O</td>
        <td>1.0</td>
        <td>Poor</td>
        <td>40%-44%</td>
      </tr>
      <tr>
        <td>7</td>
        <td>F</td>
        <td>0.0</td>
        <td>Poor</td>
        <td>0%-39%</td>
      </tr>
     
      
 
    
      <!-- Add more rows as needed -->
    </tbody>
        </table>

    </div>
  </div>
</div>

<br><br>
<?php require "footer.php"; ?>


</body>
</html>