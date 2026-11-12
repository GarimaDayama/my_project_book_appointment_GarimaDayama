            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Handling Login
            if (isset($_POST['login'])) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                echo "Login attempt for user: " . htmlspecialchars($user);
            }

            // Handling Appointment Forms (General Logic)
            if (isset($_POST['app_id'])) {
                $app_id = $_POST['app_id'];
                $client = $_POST['client_name'];
                echo "Appointment Saved for: " . htmlspecialchars($client) . " (ID: $app_id)";
            }
            }
            ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concept house</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="frontendproject.css"/>
</head>
<body>

                            <!--navigation bar-->
        
        <nav class="navbar navbar-expand-lg navbar-light lg-light">
    <a class="navbar-brand" href="index.html"><b>Concept House</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#" id="home-link">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Services</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" id="buy-design">Buy Design appointment</a>
                    <a class="dropdown-item" href="#" id="customize-design">Customize Design appointment</a>
                    <a class="dropdown-item" href="#" id="hire-design">Hire for Designing appointment</a>
                    <a class="dropdown-item" href="#" id="assistance">Assistance appointment</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
    </div>
</nav>

<div id="main-content">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">...</div>
    <div class="container my-5">...</div>
</div>

<div id="form-container" class="container my-5" style="display:none;">
    </div>


                               <!--sliders-->


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="slider1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slider2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slider3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                     
                     <!--info and image section-->

        <div class="container my-5">
  <div class="row align-items-center">
    
    <div class="col-md-4">
      <img src="image5.jpg" class="img-fluid rounded shadow" alt="House Concept">
    </div>

    <div class="col-md-8">
      <h2 class="mb-4">Our Design Philosophy</h2>
      <p>Welcome to <strong>Concept House</strong>, where we bring architectural visions to life. We specialize in providing high-quality design solutions that blend functionality with aesthetic appeal.</p>
      <p>Whether you are looking to purchase a pre-made blueprint or need a custom design tailored to your specific needs, our team of experts is here to assist you every step of the way.</p>
      <ul>
        <li>Innovative Architectural Solutions</li>
        <li>Customized Interior Designs</li>
        <li>Professional Consultation</li>
      </ul>
     <button class="btn mt-3" style="background-color: #d3d3d3; color: maroon; border: 1px solid #bcbcbc;"><b>
       Learn More</b>
     </button>
    </div>

  </div>
</div>






                                  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


                       <!--J QUERRY-->

                  $(document).ready(function() {
    function showForm(content) {
        $("#main-content").hide();
        $("#form-container").html(content).fadeIn();
    }

    // Home - Login Form
    $("#home-link").click(function() {
        let html = `
            <h3 class="form-header">Login</h3>
            <form action="process.php" method="POST">
                <div class="form-group"><label>Username</label><input type="text" name="username" class="form-control" required></div>
                <div class="form-group"><label>Password</label><input type="password" name="password" class="form-control" required></div>
                <button type="submit" name="login" class="btn btn-custom">Submit</button>
            </form>`;
        showForm(html);
    });

    // Buy Design Form
    $("#buy-design").click(function() {
        let html = `
            <h3 class="form-header">Buy Design Appointment</h3>
            <form action="process.php" method="POST">
                <div class="form-group"><label>Appointment ID</label><input type="text" name="app_id" class="form-control"></div>
                <div class="form-group"><label>Client Name</label><input type="text" name="client_name" class="form-control"></div>
                <div class="form-group"><label>Meeting Topic</label><input type="text" name="topic" class="form-control"></div>
                <div class="form-group"><label>Meeting Date</label><input type="date" name="date" class="form-control"></div>
                <div class="form-group"><label>Start Time</label><input type="time" name="start_time" class="form-control"></div>
                <div class="form-group"><label>Duration</label><input type="text" name="duration" class="form-control"></div>
                <button type="submit" name="submit_buy" class="btn btn-custom">Book Appointment</button>
            </form>`;
        showForm(html);
    });

    // Customize Design Form
    $("#customize-design").click(function() {
        let html = `
            <h3 class="form-header">Customize Design Appointment</h3>
            <form action="process.php" method="POST">
                <div class="form-group"><label>Appointment ID</label><input type="text" name="app_id" class="form-control"></div>
                <div class="form-group"><label>Client Name</label><input type="text" name="client_name" class="form-control"></div>
                <div class="form-group"><label>Meeting Date</label><input type="date" name="date" class="form-control"></div>
                <div class="form-group"><label>Start Time</label><input type="time" name="start_time" class="form-control"></div>
                <div class="form-group"><label>Duration</label><input type="text" name="duration" class="form-control"></div>
                <div class="form-group"><label>Budget</label><input type="number" name="budget" class="form-control"></div>
                <button type="submit" name="submit_custom" class="btn btn-custom">Book Appointment</button>
            </form>`;
        showForm(html);
    });

    // Hire for Designing Form
    $("#hire-design").click(function() {
        let html = `
            <h3 class="form-header">Hire for Designing</h3>
            <form action="process.php" method="POST">
                <div class="form-group"><label>Appointment ID</label><input type="text" name="app_id" class="form-control"></div>
                <div class="form-group"><label>Client Name</label><input type="text" name="client_name" class="form-control"></div>
                <div class="form-group"><label>Date of Meeting</label><input type="date" name="date" class="form-control"></div>
                <div class="form-group"><label>Space Type</label>
                    <select name="space" class="form-control">
                        <option>Home</option>
                        <option>Work Place</option>
                        <option>Office Room</option>
                    </select>
                </div>
                <button type="submit" name="submit_hire" class="btn btn-custom">Submit</button>
            </form>`;
        showForm(html);
    });

    // Assistance Appointment Form
    $("#assistance").click(function() {
        let html = `
            <h3 class="form-header">Assistance Appointment</h3>
            <form action="process.php" method="POST">
                <div class="form-group"><label>Appointment ID</label><input type="text" name="app_id" class="form-control"></div>
                <div class="form-group"><label>Client Name</label><input type="text" name="client_name" class="form-control"></div>
                <div class="form-group"><label>Meeting Date</label><input type="date" name="date" class="form-control"></div>
                <div class="form-group"><label>Start Time</label><input type="time" name="start_time" class="form-control"></div>
                <div class="form-group"><label>Work With</label>
                    <select name="work_with" class="form-control">
                        <option>Lead Architect</option>
                        <option>Junior Designer</option>
                        <option>Consultant</option>
                    </select>
                </div>
                <button type="submit" name="submit_assist" class="btn btn-custom">Submit</button>
            </form>`;
        showForm(html);
    });
});
   
      

    
</body>
</html>