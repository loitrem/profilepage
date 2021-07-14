<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Erik Kowalski - Home</title>
</head>
<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse fs-4" id="navbarNav" style="justify-content:space-around;">
        <a class="navbar-brand fs-4" href="#home">Erik Kowalski - Full Stack Developer</a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
      </div>
    </div>
  </nav>
  <div>
    
    <a id="home">
      <section class="section1"><div class="banner-text">Hello I'm Erik,<br>A Driven Ful-Stack Developer<br>
      <a href="#contact"><button type="button" class="btn-lg btn-primary">Contact me</button></a>
    </div>
      </section>
    </a>
      <a id="projects">
      <section class="section2">
        <div class="row">
          <div class="col">
              <span class="fw-bold">Warehouse Inventory Management</span> <br><br>
              Java - Spring Boot - MariaDB - Bootstrap - Thymeleaf<br><br>
              <a href="https://github.com/loitrem/WarehouseInventoryManagementCaseStudy.git" class="text-decoration-none" style="color:darkblue">View Github Repo Here</a>
          </div>
      <div class="col">
        <img src="images\casestudy.PNG" alt="" class="project-img"></section>
      </a>
      </div>
    </div>
      <a id="about"></a>
      <section class="section3">
        <table class="table1">
          <tr>
            <td class="table-item fw-bold">Programming Languages</td>
            <td class="table-item"></td>
            <td class="table-item"></td>
          </tr>
          <tr>
            <td class="table-item">Java</td>
            <td class="table-item"><img src="images\java.png" alt="" style="height:75px;"></td>
            <td class="table-item"></td>
          </tr>
          <tr>
            <td class="table-item">PHP</td>
            <td class="table-item"><img src="images\php.png" alt="" style="height:75px;"></td>
            <td class="table-item"></td>
          </tr>
          <tr>
            <td class="table-item border-bottom">JavaScript</td>
            <td class="table-item border-bottom"><img src="images\javascript.png" alt="" style="height:75px;"></td>
            <td class="table-item border-bottom"></td>
          </tr>
          <tr>
            <td class="table-item"></td>
            <td class="table-item"></td>
            <td class="table-item fw-bold">Front End</td>
          </tr>
          <tr>
            <td class="table-item"></td>
            <td class="table-item"><img src="images\html.png" alt="" style="height:75px;"></td>
            <td class="table-item">HTML</td>
          </tr>
          <tr>
            <td class="table-item border-bottom"></td>
            <td class="table-item border-bottom"><img src="images\css.png" alt="" style="height:75px;"></td>
            <td class="table-item border-bottom">CSS</td>
          </tr>
          <tr>
            <td class="table-item fw-bold">Back End</td>
            <td class="table-item"></td>
            <td class="table-item"></td>
          </tr>
          <tr>
            <td class="table-item border-bottom">Spring Boot</td>
            <td class="table-item border-bottom"><img src="images\springboot.png" alt="" style="height:75px;"></td>
            <td class="table-item border-bottom"></td>
          </tr>
          <tr>
            <td class="table-item"></td>
            <td class="table-item"></td>
            <td class="table-item fw-bold">Databases</td>
          </tr>
          <tr>
            <td class="table-item"></td>
            <td class="table-item"><img src="images\mysql.png" alt="" style="height:75px;"></td>
            <td class="table-item">MySQL</td>
          </tr>
          <tr>
            <td class="table-item"></td>
            <td class="table-item"><img src="images\mariadb.png" alt="" style="height:75px;"></td>
            <td class="table-item">MariaDB</td>
          </tr>

        </table>
      </section>
    </a>
<section id="contact">
  <div class="container">
  <div class="row">
    <div class="col">
      <h1 style="text-align: center;">Contact Me</h1><br><br>
  </div>
</div>
  
  <div class="row">
    <div class="col">
  <form action="mail.php" method="POST" class="contact-form">
    <div class="mb-3">
      <label for="email" class="form-label">Your Email address </label><span style="font-weight: bold;"> *Required </span>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="textarea" class="form-label">Leave a Message </label><span style="font-weight: bold;"> *Required </span>
      <textarea class="form-control" id="textarea" name="textarea" rows="3"></textarea>
    </div>
    <div class="g-recaptcha" data-sitekey="6Ldet5QbAAAAAOZOrHqZoWFlMgvxPlE02AAcFq0U"></div>
      <br/>

      <?php

      if (isset($_GET["error"])&& addslashes($_GET["error"])==1){
        echo "<span style='color: maroon; font-weight: bold; font-size: 30px;'> Please make sure checkbox is checked</span>";
      } 
      else if (isset($_GET["error"])&& addslashes($_GET["error"])==2){
        echo "<span style='color: maroon; font-weight: bold; font-size: 30px;'> Please ensure Email and Message are filled</span>";
      }

      ?>

    <div><button type="submit" class="btn btn-primary">Send Message</button></div>
  </div>
  </form>

</div>
</div>
</section>

  </div>  
   </body>
</html>