<?php
include 'process.php';
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $ug= $_POST['ug'];
    $pg= $_POST['pg'];
    $photo= $_FILES['photo'];
    $course= $_POST['course'];
    $interest1= $_POST['interest1'];
    $interest2= $_POST['interest2'];
    $interest3= $_POST['interest3'];
    $hobby1= $_POST['hobby1'];
    $hobby2= $_POST['hobby2'];
    $hobby3= $_POST['hobby3'];
    $skill1= $_POST['skill1'];
    $skill2= $_POST['skill2'];
    $skill3= $_POST['skill3'];


    //print_r($photo);

    $filename=$photo['name'];
    $filepath=$photo['tmp_name'];
    $fileerror=$photo['error'];

    if($fileerror==0){
        $destfile= 'upload/'.$filename;
        //echo "$destfile";
       move_uploaded_file($filepath,$destfile);

       $insertquery= "insert into userdata(username,ug,pg,photo, course, interest1, interest2, interest3, hobby1, hobby2, hobby3, skill1, skill2, skill3) values('$username', '$ug', '$pg', '$destfile', '$course', '$interest1', '$interest2', '$interest3', '$hobby1', '$hobby2', '$hobby3', '$skill1', '$skill2', '$skill3')";
       $query= mysqli_query($con, $insertquery);

       if($query){
        echo '<script>alert("Welcome to your own website")</script>'; 
       }
       else{
           echo "not inserted";
       }
    }
}
else{
    echo "No button clicked";
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Swati Basu</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS stylesheet -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/stylesuser.css">
        <link rel="icon" href="form-page.png">

        <!-- JS stylesheet -->
        <link rel="stylesheet" href="js/index.js">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Montserrat:wght@500&family=Satisfy&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script src="https://kit.fontawesome.com/88cde55360.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <section class="colored-section" id="title" >
            <div class="container-fluid" >
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="">
                      <i class="intro-image fas fa-book-open"></i>
                      <P class="welcome">Welcome!</P>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                            <a class="nav-link" href="#start">Introduction</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#testimonials">Achievements</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#third">Interest</a>
                          </li>
                        </ul>
                      </div>
                </nav> 
           </div> 
           <div class="post">
           <p class="heading">I am <?php echo "$username" ?></p>
           <i class="grad fas fa-user-graduate"></i>
           <div class="btn btn-lg btn-outline-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
           <strong><em>Qualifications</em></strong>
           </div>
           <div class="collapse container" id="collapseExample">
            <div class="card card-body" id="myself">
              <P><strong>UNDERGRADUATION-</strong> <?php echo "$ug" ?></P>
              <p><strong>COURSE-</strong> <?php echo "$course" ?></p>
              <div class="line">
                <div class="spinner-grow text-primary" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-secondary" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-success" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-danger" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-warning" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-info" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-light" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class="spinner-grow text-dark" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
              </div>
              <p><strong>POST-GRADUATION-</strong> <?php echo"$pg" ?></p>
            </div>
           </div>
           </div>
        </section>

    <section class="self" id="start">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <img class="remote-image" src="https://www.codetantra.com/images/i/undraw_remotely_2j6y.svg" alt="swati-img">
          </div>
          <div class="col-lg-4">
              <p class="self-intro">My name is <?php echo "$username" ?>. 
                 I did my undergraduation from <?php echo"$ug" ?> in <?php echo "$course" ?>.
                 I am a hard working, motivated and always strive to achieve the highest standard possible, at any given task and in any given situation.
                 I am accustomed to working in a challenging and a fast-paced environment, particulary when dealing with multiple projects and priorities at the same time.
              </p>
                </div> 
          <div class="col-lg-4">
            <img class="self-image" src="<?php print_r($destfile) ?>" alt="no-img">
          </div>
        </div>
      </div>
    </section>    

    <section class="user-section" id="third">
      <div class="row cards-user">

        <div class="col-lg-4 col-md-6">
          <div class="card border-dark mb-3">
            <div class="card-header ">
              <h3><strong>Areas of Interest</strong></h3>
            </div>
            <div class="card-body">
              <p><?php echo "$interest1" ?></p>
              <p><?php echo "$interest2" ?></p>
              <p><?php echo "$interest3" ?></p>
              </a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6">
          <div class="card border-dark mb-3">
            <div class="card-header">
              <h3><strong>Hobbies</strong></h3>
            </div>
            <div class="card-body">
              <p><?php echo "$hobby1" ?></p>
              <p><?php echo "$hobby2" ?></p>
              <p><?php echo "$hobby3" ?></p>
              </a>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4">
          <div class="card border-dark mb-3">
            <div class="card-header">
              <h3><strong>Skills</strong></h3>
            </div>
            <div class="card-body">
              <p><?php echo "$skill1" ?></p>
              <p><?php echo "$skill2" ?></p>
              <p><?php echo "$skill3" ?></p>
              </a>  
            </div>
          </div>
        </div>
      </div>
    </section>
        
    <section class="feed-user">
      <div class=" container feed-user1">
        <div  class="row justify-content-around">
          <div class="col-md-auto">
            <i class="social-icon-user fas fa-heart"></i>
            <h3 class="feedback">Like</h3>
          </div>
          <div class="col-md-auto">
            <i class="social-icon-user fas fa-comment-alt" id="feedback"></i>
          <h3 class="feedback">Feedback</h3>
          </div>
        </div>
      </div>
    </section>

    </body>
</html>