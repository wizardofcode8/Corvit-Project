<php 

$serverAddress = '';
$userName = '';
$password = '';
$dbName = '';


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
      body{
        font-family: 'Poppins', sans-serif;
      }
    </style>
  </head>

  <body>
    <!--  hello i am ikram -->
<header>
    <div class="container-fluid bodycolor">
        <div class="row pt-4">
            <div class="col-1"></div>
            
            <div class="col txt_color fw-bold ps-4">
              <a href="https://wizardofcode8.github.io/Corvit-Project/index.html"><p style="display:inline-block;">
                <img src="quranlogo (1).png">QuranHub</p></a>
            </div>

            <div class="col-5 txt">

              <ul class="nav justify-content-start fw-medium ">
                <li class="nav-item">
                  <a class="nav-link active txt_color" aria-current="page" href="https://wizardofcode8.github.io/Corvit-Project/index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link txt_color" href="#">About us</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link txt_color" href="#">Reciters</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link txt_color" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link txt_color" href="#">Contact</a>
                </li>
              </ul>

            </div>
            <div class="col-2">
    
              <a href="signin_page.html" class="btn text-success me-md-2 rounded-pill fw-medium" type="button">Sign In</a>
              <a href="signup_page.html" class="btn text-white rounded-pill bg-success fw-medium" type="button">Sign Up</a>

            </div>
            <div class="col-1"></div>
        </div>
    </header>

        <div class="row">
          <div class="col-1"></div>
          <div class="col ps-4">
            <h1 class="txt_color txtsize1 ps-3 fw-bold pt-3">Make Self-Purification<br>by Reading Quran</h1>
          </div>
        </div>
        
        <div class="row pt-5">
          <div class="col-1"></div>
          <div class="col-4 ps-5">
            <img src="quran4.jpeg" class="img-fluid img2 rounded ">
          </div>
          <div class="col-3">
            <img src="quran3.jpg" class="img-fluid img1 rounded ">
          </div>
          <div class="col pt-3 ">
            <p class="txt_color fw-medium ">
              Welcome to our Quran Reading <br> Platform, where you can embark on a <br> transformative journey through the <br> sacred text of Islam
            </p>
            <div class="d-grid gap-2 col-6 ">
              <button class="btn me-md-1 rounded-pill text-white bg_color2" type="button">Start Reading<i class="bi bi-book-half pt-2 "></i></button>
              <button class="btn me-md-1 btn-warning  rounded-pill txt_color" type="button">Listen Audio<i class="bi bi-mic-fill"></i></button>
              
              <div class="rate me-4">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
              </div>

              <div class="pt-3 fw-medium ">
                <p>100K+ ratings on google</p>
              </div>

            </div>
          </div>
        </div>
<footer>
  <div class="row pt-5"></div>
  <div class="row bg_color2 pt-5">
    <div class="col ps-5 text-white">
      <h3 class="fw-bold">Qutor</h3>
      <h5 class="ps-1">Is secured by</h5>
      <img src="secure.png">
    </div>
    <div class="col text-white ">
      <h3 class="fw-bold">Company Info</h3>
      <div class="ps-1">
      <button class="btn text-white me-md-2 rounded-pill fw-medium">Home</button><br>
      <button class="btn text-white me-md-2 rounded-pill fw-medium">About us</button><br>
      <button class="btn text-white me-md-2 rounded-pill fw-medium">Reciters</button><br>
      <button class="btn text-white me-md-2 rounded-pill fw-medium">Blog</button><br>
      <button class="btn text-white me-md-2 rounded-pill fw-medium">Contact</button>
      </div>
    </div>
    <div class="col text-white ">
      <h3 class="fw-bold">Courses</h3>
      <div class="ps-1">
      <button class="btn text-white me-md-2 rounded-pill fw-medium">Nazra</button><br>
      <button class="btn text-white me-md-2 rounded-pill fw-medium">Hifz-e-Quran</button><br>
      <button class="btn text-white me-md-2 rounded-pill fw-medium">Tajweed</button><br>
      <button class="btn text-white me-md-2 rounded-pill fw-medium">Arabic Language</button>
      
      </div>
    </div>
    <div class="col text-white">
      <h3>Follow us:</h3>
      <div class="fs-1 pe-2">
        <i class="bi bi-facebook"></i> <i class="bi bi-instagram"></i> <i class="bi bi-linkedin"></i>
      </div>
    </div>
    <div class="pt-4"></div>
  </div>
    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>