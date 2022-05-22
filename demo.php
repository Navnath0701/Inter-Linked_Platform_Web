<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICTE | ADD DATA</title>
    <link rel="stylesheet" href="AddDetails.css">
    
</head>

<body>
    <div>
        <div class="Top_Header">
            <img class="aicte_icon" id="img1" src="AICTE.jpeg">
            <div class="allheadings">
                <h1 class="heading">All India Council for Technical Education</h1>
                <h3 class="Subheading">Goverment Of India</h3>
                <h5 class="Subheading">Inter Linked Platform for College Placement Details</h5>

            </div>

        </div>
        <nav class="nav">
            <ul>
                <li><a href="http://127.0.0.1:5501/Project.html">Home</a></li>
                <li><a href="http://127.0.0.1:5501/AddDetails.html">Add Details</a></li>
                <li><a href="http://localhost/cwd/viewdetails.php">View Details</a></li>
                <li><a href="http://127.0.0.1:5501/Project.html">Education</a></li>
                <li><a href="http://127.0.0.1:5501/Project.html">About</a> </li>
                <li><a href="#">Log Out</a> </li>

            </ul>
        </nav>

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "Demo";
                    $conn = mysqli_connect($servername,$username,$password,$database);


                    // $sql = "CREATE DATABASE DEMO";
                    

                    // student table 
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $email = $_POST['email'];
                    $gender = $_POST['gender'];

                    $sql = "INSERT INTO `student`(`firstname`, `lastname`, `email`, `gender`) VALUES ('$firstname','$lastname','$email','$gender')";
                    mysqli_query($conn,$sql);

                    
                    $conn = mysqli_connect($servername,$username,$password,$database);
                    // Educational table 
                    $nameofuniversity = $_POST['nameofuniversity'];
                    $collegename = $_POST['collegename'];
                    $branchname = $_POST['branchname'];
                    $yearofcompletion = $_POST['yearofcompletion'];
                    $cgpa = $_POST['cgpa'];
                    $sql = "INSERT INTO `education`(`nameofuniversity`, `collegename`, `branchname`, `dateofcompletion`, `cgpa`, `email`) VALUES ('$nameofuniversity','$collegename','$branchname','$yearofcompletion','$cgpa','$email')";
                    mysqli_query($conn,$sql);

                    
                    $conn = mysqli_connect($servername,$username,$password,$database);
                    // Placement Details
                    $placed = $_POST['placed'];
                    $nameofcompany = $_POST['nameofcompany'];
                    $salary = $_POST['salary'];

                    $sql = "INSERT INTO `placement`(`placed`, `nameofcompany`, `CTC`,`email`) VALUES ('$placed','$nameofcompany','$salary','$email')";

                    mysqli_query($conn,$sql);
                    
                }

        
        ?>
        <form form-id="student-detail" action= "#" method="post">
            <div>
                <h1 class="main-heading-one">Student Details</h1>
                <br>
                <div>
                    
                        <h2 class="main-subheadings">Personal Details</h2>
                        <hr class="hr">
                        <div>
                            <br>
                            <label for="firstname">First Name :</label>
                            <input type="text" id="firstname" name="firstname" />

                            <label for="lastname">Last Name :</label>
                            <input type="text" id="lastname" name="lastname" />

                            <label for="email">Email :</label>
                            <input type="email" id="email" name="email" />
                            <br>
                            <br>
                            <label for="gender">Gender :</label>
                            <input type="text" id="gender" name="gender" />
                    


                </div>

            </div>
            <div>
                <br>
                <h2 class="main-subheadings">Educational Details</h2>
                <hr class="hr">
                <div>
                    <br>
                    <label for="nameofuniversity">Name of University : </label>
                    <input type="text" id="nameofuniversity" name="nameofuniversity" />

                    <label for="collegename">College Name :</label>
                    <input type="text" id="collegename" name="collegename" />

                    <label for="branchname">Branch Name :</label>
                    <input type="text" id="branchname" name="branchname" />

                    <label for="yearofcompletion">Date of Completion :</label>
                    <input type="date" id="yearofcompletion" name="yearofcompletion" />
                    <br>
                    <br>
                    <label for="cgpa">cgpa/percentage :</label>
                    <input type="text" id="collegename" name="cgpa" />

                </div>

            </div>
            <div>
                <br>
                <h2 class="main-subheadings">Placement Details</h2>
                <hr>
                <div>
                    <br>
                    <label for="placed">placement status (specify yes/no) :</label>
                    <input type="text" id="placed" name="placed" />


                    <br>
                    <br>

                    <label for="nameofcompany">Name of the company :</label>
                    <input type="text" id="nameofcompany" name="nameofcompany" />

                    <label for="salary">CTC :</label>
                    <input type="text" id="salary" name="salary" />

                </div>

            </div>
            <br>
           <button type="submit" class="btn">Submit</button>
            <br>
            <br>
    </div>


    </form>

    <div class="foot">
        <div class="foot-content">
            <p class="foot-a">Copyright © 2021. AICTE <br> Nelson Mandela Marg, Vasant Kunj <br> New Delhi -110070<br>by
                navnathKate</p>

        </div>
        <div class="foot-content">
            <div class="footer-content">
                <ul class="foot-b">
                    <a href="https://www.facebook.com/OfficialAICTE/" class="fa fa-facebook">facebook</a>
                    <a href="https://twitter.com/AICTE_INDIA" class="fa fa-twitter">twitter</a>
                    <a href="https://www.aicte-india.org/" class="fa fa-more">more</a>


                </ul>
            </div>


        </div>
    </div>

</body>

</html>