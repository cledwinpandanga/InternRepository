<?php 
include 'connection.php';
include 'function.php';

session_start();

if ($_SESSION['name'] == "" && $_SESSION['level'] == "") {
  displayAlert("alert","You need to login first!");
  header("Location: login.php");
}
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- font style -->
  <link rel="preconnect" href="https://fonts.gstatic.com">  
  <!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet"> -->
  <!--   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">   -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Work+Sans&display=swap" rel="stylesheet">  
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <title>KainTenunKu-Customer</title>

</head>
<body>
  <!-- NAVBAR --> 
  <header>        
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="logo" src="img/logokecil.png" width="110" height="50">
        </a>        
        <div class="collapse navbar-collapse col-md-8" id="navbarNav">          
          <ul class="navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="customerIndex.php">Home</a>
            </li>  

            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="Cart.php">Cart</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="productList.php">Product List</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="#">Chat Seller</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="productList.php">Payment</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="logout.php">Logout</a>
            </li>                                                                            
          </ul>        
        </div>
        <div class="navbar navbar-nav col-md-1 col-xs-1">                        
          <div class="collapse navbar-collapse">
            <?php echo $_SESSION['name'].''."<b><p class='card-text'><i class='fas fa-user-alt' style='margin-left:10px;font-size:23px'></i></p></b>" ?>
          </div>          
        </div> 
      </div> 

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>                
    </nav>    
  </header> 

  <section>
    <div class="container-fluid col-md-10" style="margin-top: 8%;">
      <h1 class="text-lg-start">Your Cart</h1>
      <table class="table table-striped">
        <tr>
          <th scope="row">No</th>
          <th scope="row">Product </th>
          <th scope="row">Price </th>
          <th scope="row">Quantity </th>
          <th scope="row">Remove</th>
        </tr>

        <?php 
        $no = 1;
        $sql = "SELECT * FROM data_user";
        $data = mysqli_query($connect,$sql);
        while($display = mysqli_fetch_array($data)){
          echo "
          <tr>              
          <td scope='row'>$no</td>            
          <td scope='row'>$display[username]</td>              
          <td scope='row'>$display[name]</td>              
          <td scope='row'>$display[phone]</td>              
          <td scope='row'><button type='button' class='btn btn-danger'><i class='far fa-trash-alt'>$</i></button></td>
          </tr>
          ";
          $no++;          
        }
        ?>

      </table>
    </div> 
  </section>

</body>

<footer class="bg-light text-center text-lg-start fixed-bottom">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="index.php">KAINTENUNKU.com</a>
  </div>
  <!-- Copyright -->
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<script src="function.js"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  -->
  
  </html>