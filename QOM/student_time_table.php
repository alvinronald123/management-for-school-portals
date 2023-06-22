<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/time_table.css">
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
    <a href="<?php echo "student_attendance.php";?> ">Attendance</a>
    <a href="<?php echo "student_uneb.php"; ?>">UNEB Past Results</a>
                    <a href="<?php echo "student_report.php"; ?>">Report</a>
                  
    


</div>

</div>
  </div>
  <div class="details-container">
    <!-- Student details here -->
    <div class="form-container">
        <br>
    <h2>QOM Time Tables.</h2>
        <br>
        <hr>
    <p class="paragraphy"><h3> QOM--YEAR:2023--TERM:ONE </h3></p>
    <hr>
    <br>
    <div class="container">
        
        <table>
            <thead>
                <tr>
                    <th>TB Type</th>
                    <th>Class</th>
                    <th>Class Teacher</th>
                    <th>Term</th>
                    <th>Download</th>
                    <th>Done</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Exams</td>
                    <td>P4</td>
                    <td>Alvin</td>
                    <td>One</td>
                    <td><a href="path/to/assignment.pdf" class="btn">Download</a></td>
                    <td> <input type="checkbox" name="check"> </td>
                </tr>
                <tr>
                    <td>Exams</td>
                    <td>P4</td>
                    <td>Alvin</td>
                    <td>One</td>
                    <td><a href="path/to/assignment.pdf" class="btn">Download</a></td>
                    <td> <input type="checkbox" name="check"> </td>
                </tr>
                <tr>
                    <td>Exams</td>
                    <td>P4</td>
                    <td>Alvin</td>
                    <td>One</td>
                    <td><a href="path/to/assignment.pdf" class="btn">Download</a></td>
                    <td> <input type="checkbox" name="check"> </td>
                </tr>
             
          
                
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    </div>
    <div class="form-container">
        <br>
    <h2>QOM Time Tables.</h2>
        <br>
        <hr>
    <p class="paragraphy"><h3> QOM--YEAR:2023--TERM:ONE </h3></p>
    <hr>
    <br>
    <div class="container">
        
        <table>
            <thead>
                <tr>
                    <th>TB Type</th>
                    <th>Class</th>
                    <th>Class Teacher</th>
                    <th>Term</th>
                    <th>Download</th>
                    <th>Done</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Exams</td>
                    <td>P4</td>
                    <td>Alvin</td>
                    <td>One</td>
                    <td><a href="path/to/assignment.pdf" class="btn">Download</a></td>
                    <td> <input type="checkbox" name="check"> </td>
                </tr>
                <tr>
                    <td>Exams</td>
                    <td>P4</td>
                    <td>Alvin</td>
                    <td>One</td>
                    <td><a href="path/to/assignment.pdf" class="btn">Download</a></td>
                    <td> <input type="checkbox" name="check"> </td>
                </tr>
                <tr>
                    <td>Exams</td>
                    <td>P4</td>
                    <td>Alvin</td>
                    <td>One</td>
                    <td><a href="path/to/assignment.pdf" class="btn">Download</a></td>
                    <td> <input type="checkbox" name="check"> </td>
                </tr>
             
          
                
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    </div>
  </div>
</div>
<br><br>
<?php require "footer.php"; ?>


</body>
</html>