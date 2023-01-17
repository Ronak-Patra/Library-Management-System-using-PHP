<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Document</title>
  <style>
    body {
      overflow-x: hidden;
      font-family: Sans-Serif;
      margin: 0;
    }

    .btn:hover {
      background-color: rgb(224, 190, 190);
      color: aliceblue;
      transition: 1s;
      outline: black;
      border: black;
    }

    .foter {
      background-color: maroon;
      color: #ffff;
      height: 150px;
    }

    .foter h2 {
      margin: 5% 10% 1% 10%;
      font-size: 20px;
      text-align: center;
      display: block;
      font-weight: bolder;
      /* position:relative; */
      /* bottom:0; */
      color: #ffff;
    }

    .foter p {
      margin: 9px 20%;
      text-align: center;
      color: #ffff;
    }

    .social {
      display: flex;
      /* width: 12%; */
      margin: auto;
      align-items: center;
      justify-content: center;
    }

    .social i {
      text-align: center;
      padding: 5px;

    }

    .foter p {
      font-size: 15px;
    }

    .social {
      width: auto;
    }

    .nav-item a::after {
      content: "";
      width: 0%;
      height: 2px;
      background: white;
      display: block;
      margin: auto;
      transition: 0.5s;
    }

    .nav-item a:hover::after {
      width: 100%;
    }

    .nav-item {
      font-size: 20px;
    }
  </style>
</head>

<body>
  <?php
		if(isset($_SESSION['login_user']))
		{
	?>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: maroon;">
    <div class="container">
      <a class="navbar-brand" href="home.html">

        <img src="images/Pcacs.png" alt="" width="100px" height="60px" class="d-inline-block align-text-top">



      </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="home.php" style="color: aliceblue;">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="books.php" style="color: aliceblue;">Books</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="feedback.php" style="color: aliceblue;">Feedback</a>
          </li>




        </ul>
        
      </div>
    </div>
  </nav>
  <?php
    }
    else
		{
			?>
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: maroon;">
    <div class="container">
      <a class="navbar-brand" href="home.html">

        <img src="images/Pcacs.png" alt="" width="100px" height="60px" class="d-inline-block align-text-top">



      </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="home.php" style="color: aliceblue;">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="books.php" style="color: aliceblue;">Books</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="feedback.php" style="color: aliceblue;">Feedback</a>
          </li>




        </ul>
        <form class="d-flex">
          &nbsp; &nbsp; &nbsp; &nbsp;
          <button type="button btn" class="btn btn-light"><a style="text-decoration: none; color: black;" href="admin_login.php">SIGN IN</a></button>
          
          &nbsp; &nbsp; &nbsp;
          <button type="button btn" class="btn btn-light"><a style="text-decoration: none; color: black;" href="registration.php">SIGN UP</a></button> &nbsp; &nbsp; &nbsp;
        </form>
      </div>
    </div>
  </nav>
  <?php
		}
			
		?>



  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/library-1.jpg" class="d-block w-100" alt="..." style="height: 680px;">
        <div class="carousel-caption">
          <h3>Architecture</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/library-2.png" class="d-block w-100" alt="..." style="height: 680px;">
        <div class="carousel-caption">
          <h3>IT/CS</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/library-3.jpeg" class="d-block w-100" alt="..." style="height: 680px;">
        <div class="carousel-caption">
          <h3>Biotech</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <br><br><br>

    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="images/angle.png" class="card-img-top" alt="..." height="300px">
            <div class="card-body">
              <h5 class="card-title">Architecture Library</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/angle.png" class="card-img-top" alt="..." height="300px">
            <div class="card-body">
              <h5 class="card-title">IT CS Library</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/angle.png" class="card-img-top" alt="..." height="300px">
            <div class="card-body">
              <h5 class="card-title">Biotech library</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content.</p>
            </div>
          </div>
        </div>

      </div>
    </div>


    <br><br><br><br>


    <div class="container " style="background-color:maroon; color: aliceblue;">



      <div class="container">
        <div class="row">
          <div class="col">

            <br>
            <h4>The PCACS Library staff :
            </h4><br>
            <table class="table table-light table-striped">
              <tbody>
                <tr>
                  <td>Sanjay B. Munavalli</td>
                  <td>Librarian</td>
                </tr>
                <tr>
                  <td>Priya N. Dhawale</td>
                  <td>Library Assistant</td>
                </tr>
                <tr>
                  <td>Sunita S. Joshi</td>
                  <td>Library Assistant</td>
                </tr>
                <tr>
                  <td>Sumangala Pillai</td>
                  <td>Library Assistant</td>
                </tr>
                <tr>
                  <td>Ganesh Bhujabul</td>
                  <td>Library Attendant</td>
                </tr>
                <tr>
                  <td>Monu Singh Sode</td>
                  <td>Library Helper</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col">
            <br>
            <h4>The PCACS library services .
            </h4><br>
            <table class="table table-light table-striped">
              <tbody>
                <tr>
                  <td>OPAC (Online Public Access Catalog)</td>

                </tr>
                <tr>
                  <td>Bibliographic Service (On Demand)
                  </td>

                </tr>
                <tr>
                  <td>Reference Service
                  </td>

                </tr>
                <tr>
                  <td>Current Awareness Service</td>

                </tr>
                <tr>
                  <td>Inter-Library Lending
                  </td>
                </tr>
                <tr>
                  <td>Internet, Scanner, Reprography
                  </td>
                </tr>
              </tbody>
            </table><br>

          </div>

        </div>
      </div>
      <br>
    </div>
    <footer class="foter">
      <h2>About Us</h2>
      <p>Copyright © 2012
        Mahatma Education Society's
        Pillai's College of Arts, Commerce & Science
        New Panvel, Maharashtra.</p>
      
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>


</body>

</html>