<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AICTE | DATA</title>
    <link rel="stylesheet" href="viewdetails.css">

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
                <li><a href="http://localhost/cwd/Project.php">Home</a></li>
                <li><a href="http://localhost/cwd/Adddetails.php">Add Details</a></li>
                <li><a href="http://localhost/cwd/viewdetails.php">View Details</a></li>
                <li><a href="https://www.aicte-india.org/education/overview">Education</a></li>
                <li><a href="http://localhost/cwd/about.php">About</a> </li>
                <li><a href="http://localhost/cwd/LogIn.php">Log Out</a> </li>
                
            </ul>
        </nav>
        <div>
            <div class="div-one">
                <!-- <form action="#" method="get">
                    <label for="college-name-search">Enter college name - </label>
                    <input type="text" id="college-name-search" name="college-name-search" />
                    <br>
                    <button type="submit" class="btn">search</button>
                </form> -->
                <h2 class="view-details-heading">Placement Details</h2>

            </div>

        </div>
        <div class="tableinfo">

            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Name of University</th>
                        <th>Name of college</th>
                        <th>Branch Name</th>
                        <th>CGPA</th>
                        <th>Placement Status</th>
                        <th>Name of Company (Placed)</th>
                        <th>Package(in lakhs)</th>

                        
                    </tr>
                </thead>
                <tbody>
                    



        <?php
                
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "Demo";
            $conn = mysqli_connect($servername,$username,$password,$database);

            $sql = "SELECT * FROM `STUDENT`";
           
            $result = mysqli_query($conn,$sql);
            $num  = mysqli_num_rows($result);

            if($num>0){
                while($row= mysqli_fetch_assoc($result)){
                    
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $email = $row['email'];
                    $gender = $row['gender'];

                    echo " <tr> <td scope='row'>".$row['firstname']."</td><td>".$row['lastname']."</td> <td>".$row['gender']."</td><td>".$row['email']."</td>";
                    
                    $sql1 = "SELECT * FROM `EDUCATION` WHERE email='$email'";
                    $result1 = mysqli_query($conn,$sql1);
                    $row1 = mysqli_fetch_assoc($result1);

                    echo "<td scope='row'>".$row1['nameofuniversity']."</td><td>".$row1['collegename']."</td> <td>".$row1['branchname']."</td><td>".$row1['cgpa']."</td>";
                    
                    $sql2 = "SELECT * FROM `PLACEMENT` WHERE email='$email'";
                    $result2 = mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_assoc($result2);

                    echo "<td scope='row'>".$row2['placed']."</td><td>".$row2['nameofcompany']."</td> <td>".$row2['CTC']."</td></tr>";
                   
                    
                    
                    
                   
                }
            }

        ?>
                    
                </tbody>
            </table>
        </div>
        <div class="foot">
            <div class="foot-content">
                <p class="foot-a">Copyright © 2021. AICTE <br> Nelson Mandela Marg, Vasant Kunj <br> New Delhi
                    -110070<br>by navnathKate</p>

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
    </div>

</body>

</html>