<?php
  session_start();
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
      
    header("location: log-in.php");

   }





?>






<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to iCoder. A blog for coding enthusiasts">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>iCoder - Heaven for Programmers</title>
</head>

<body>
<?php
     include 'nav.php';
  ?>

 
  
  <!-- Login Modal -->
 

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to iCoder</h2>
                    <p>Technology News, Development and Trends</p>
                    <button class="btn btn-danger">Technology</button>
                    <button class="btn btn-primary">Web Development</button>
                    <button class="btn btn-success">Tech Fun</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>The Best Coding Blog</h2>
                    <p>Technology News, Development and Trends</p>
                    <button class="btn btn-danger">Technology</button>
                    <button class="btn btn-primary">Web Development</button>
                    <button class="btn btn-success">Tech Fun</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Award winning Blog</h2>
                    <p>Technology News, Development and Trends</p>
                    <button class="btn btn-danger">Technology</button>
                    <button class="btn btn-primary">Web Development</button>
                    <button class="btn btn-success">Tech Fun</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">World</strong>
                  <h3 class="mb-0">Global Conferences</h3>
                  <div class="mb-1 text-muted">Nov 12</div>
                  <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="thumb1.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success">Design</strong>
                  <h3 class="mb-0">Learn Designing</h3>
                  <div class="mb-1 text-muted">Nov 11</div>
                  <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x700/?tech,code,laptop" alt="">

                </div>
              </div>
            </div>
          </div>
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-danger">FrontEnd</strong>
                  <h3 class="mb-0">Bootstrap Templates</h3>
                  <div class="mb-1 text-muted">Nov 12</div>
                  <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="thumb2.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-warning">Python</strong>
                  <h3 class="mb-0">Learn Python</h3>
                  <div class="mb-1 text-muted">Nov 11</div>
                  <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="thumb3.jpg" alt="">

                </div>
              </div>
            </div>
          </div>
    </div>
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2020-2021 iCoder, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>