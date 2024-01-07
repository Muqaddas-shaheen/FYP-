<?php
session_start();

if (isset($_SESSION['email'], $_SESSION['user_type'])) {
    $user_email = $_SESSION['email']; 
    $user_type = $_SESSION['user_type']; 

    // Check the user type and email as needed
    if ($user_type === 'admin') {
        // This user is an admin, allow access to admin-specific content
    } else {
        header("Location: index.php"); 
    }
} else {
    
    header("Location: index.php"); 
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <div class="bar">
        <!-- <div class="fullbar"> -->
        <div class="sidebar">

            <div><img src="magic11.png" alt="logo"
                    style="height: 60px; margin-top: 10px; margin-left: 15px; margin-bottom: 30px;"></div>
            <ul class="ul-main">
                <li class="main-elmnt" style="margin-top: 0px;"><a href="#" class="main-elmnt">Dashboard</a></li>
                <li class="buton">
                    <button class="button" id="student-btn">Student</button>
                    <ul id="student" class="ul-sub">
                        <li class="nav-elmnt"><a href="add-std.php" class="nav-elmnt">Add student</a></li>
                        <li class="nav-elmnt"><a href="del-std-form.php" class="nav-elmnt">Delete Account</a></li>
                        <li class="nav-elmnt"><a href="upt-std.php" class="nav-elmnt">Update Account</a></li>
                        <li class="nav-elmnt"><a href="view-std.php" class="nav-elmnt">View List</a></li>
                    </ul>
                </li>
                <li class="buton"><button class="button" id="teacher-btn">Teacher</button>
                    <ul class="ul-sub" id="teacher">
                        <li class="nav-elmnt"><a href="add-teach.php" class="nav-elmnt">Add Teacher</a></li>
                        <li class="nav-elmnt"><a href="del-tech.php" class="nav-elmnt">Delete Account</a></li>
                        <li class="nav-elmnt"><a href="updt-teach.php" class="nav-elmnt">Update Account</a></li>
                        <li class="nav-elmnt"><a href="view-tech.php" class="nav-elmnt">View List</a></li>

                    </ul>
                </li>
                <li class="buton"><button class="button" id="books-btn">Books</button>
                    <ul class="ul-sub" id="books">
                        <li class="nav-elmnt"><a href="book-cat.html" class="nav-elmnt">Add category</a></li>
                        <li class="nav-elmnt"><a href="add-book.php" class="nav-elmnt">Add Book</a></li>

                        <li class="nav-elmnt"><a href="view-books.php" class="nav-elmnt">View list</a></li>
                        <li class="nav-elmnt"><a href="updt-book.php" class="nav-elmnt">Update info</a></li>
                    </ul>
                </li>
                <li class="buton"><button class="button" id="author-btn">Author</button>
                    <ul class="ul-sub" id="author">

                        <li class="nav-elmnt"><a href="approve-authors." class="nav-elmnt">Approve</a></li>
                        <li class="nav-elmnt"><a href="view-author.html" class="nav-elmnt">View Author</a></li>
                        <!-- <li class="nav-elmnt"><a href="" class="nav-elmnt">Remove</a></li> -->
                    </ul>
                </li>
                <li class="buton"><button class="button" id="review-btn">Book Reviews</button>
                    <ul class="ul-sub" id="review">
                        <li class="nav-elmnt"><a href="view-reviews.php" class="nav-elmnt">View</a></li>
                      
                    </ul>
                </li>
                <li class="buton"><button class="button" id="reserve-btn">Book Reservation</button>
                    <ul class="ul-sub" id="reserve">
                        <li class="nav-elmnt"><a href="view-res.php" class="nav-elmnt">View requests</a></li>
                        <li class="nav-elmnt"><a href="" class="nav-elmnt">Extend period</a></li>
                        <li class="nav-elmnt"><a href="" class="nav-elmnt">Cancel</a></li>
                        <li class="nav-elmnt"><a href="" class="nav-elmnt">Reports</a></li>
                        <li class="nav-elmnt"><a href="" class="nav-elmnt">Setting</a></li>
                    </ul>
                </li>


                <li class="main-elmnt"><a href="video.html" class="main-elmnt">Video tutorials</a></li>
                <li class="main-elmnt"><a href="logout.html" class="main-elmnt">Logout</a></li>

            </ul>

            <!-- </div> -->
        </div>

        <!-- <div style="display: flex; flex-direction: row;"> -->
        <div class="header">
            <div class="right">
                <p style="font-weight: bold; font-size: 20px; padding-left: 18px;">Dashboard</p>
                <div id="datetime">
                    <!-- <i class="fas fa-calendar-alt"></i> -->
                    <span id="date" class="date"></span> <span
                        style="margin-left: 50px;  padding-top: 7px; font-weight: bold;">Account</span> <img
                        src="student.png" alt=""
                        style="width: 35px; height: 35px; margin-left: 15px; border-radius: 100px; margin-right: -70px;">
                </div>

            </div>
            <div class="page">
                <div style="display: flex; flex-direction: row; margin-left: 80px;" >
                    <div>
                        <div style="  width: 300px; margin-left: 150px; ">
                            <img src="teacher.png" alt="" style="width: 300px; padding: 40px;">
                            <div class="name">
                                <p class="nam">Teachers</p>
                                <p class="amnt" style="margin-left: 110px;">20+</p>
                            </div>
                        </div>
                        
                    </div>
                    <div >
                        <div style="  width: 300px; margin-left: 50px; ">
                            <img src="student.png" alt="" style="width: 300px; padding: 40px;">
                            <div class="name">
                                <p class="nam" style="margin-left: 100px;">Students</p>
                                <p class="amnt" style="margin-left: 120px;">200+</p>
                            </div>
                        </div>
                        <!-- <div class="name">
                            <p class="nam" style="margin-left: 100px;">Students</p>
                            <p class="amnt" style="margin-left: 120px;">200+</p>
                        </div> -->
                    </div>
                </div>

                <div style="display: flex; flex-direction: row; margin-left: 80px; margin-bottom: 100px;">
                    <div>
                        <div style="  width: 300px; margin-left: 130px;  ">
                            <img src="book.png" alt="" style="width: 350px; padding: 40px; height: 250px; margin-top: 30px;">
                            <div class="name">
                                <p class="nam" style="margin-left: 120px;">Books</p>
                                <p class="amnt" style="margin-left: 130px;">2000+</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="  width: 300px; margin-left: 70px; ">
                            <img src="author.png" alt="" style="width: 300px; padding: 40px;">
                            <div class="name">
                                <p class="nam" style="margin-left: 90px;">Authors</p>
                                <p class="amnt" style="margin-left: 110px;">200+</p>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="section-7">
                    <footer>
                        <div class="container">
                            <p>&copy; 2023 Your Website. All rights reserved.</p>
                        </div>
                    </footer>
                </section>
            </div>
            <!-- </div> -->
        </div>

    </div>



    <script src="test.js"></script>

</body>

</html>