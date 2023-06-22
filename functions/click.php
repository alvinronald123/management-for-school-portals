<?php
// Get the selected link from your PHP logic
$selectedLink = "Results"; // Replace this with your selected link variable

// Array of available links
$links = array(
    "Results" => "student_results.php",
    "Combination/Subjects" => "student_comb_sub.php",
    "Assignments" => "student_assignment.php",
    "Reactions" => "student_reaction.php",
    "Grading Used" => "student_grading_used.php",
    "Financial View" => "student_financial_view.php",
    "Teachers" => "student_teachers.php",
    "Comments" => "student_comment.php",
    "Time Table" => "student_time_table.php",
    "Attendance" => "student_attendance.php",
    "UNEB Past Results" => "#"
);
?>

<?php
            foreach ($links as $link) {
                $class = ($link == $selectedLink) ? "selected" : "";
                echo '<a href="#" class="' . $class . '">' . $link . '</a>';
            }
            ?>

<a href="<?php echo "student_results.php"; ?>" class="<?php echo ($currentFile === 'student_results.php') ? 'selected' : ''; ?>">Results</a>


<?php
        $links = array(
          "Results" => "student_results.php",
          "Combination/Subjects" => "student_comb_sub.php",
          "Assignments" => "student_assignment.php",
          "Reactions" => "student_reaction.php",
          "Grading Used" => "student_grading_used.php",
          "Financial View" => "student_financial_view.php",
          "Teachers" => "student_teachers.php",
          "Comments" => "student_comment.php",
          "Time Table" => "student_time_table.php",
          "Attendance" => "student_attendance.php",
          "UNEB Past Results" => "#"
        );
        generateLinks($links, basename($_SERVER['PHP_SELF']));
        ?>