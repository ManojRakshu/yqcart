<?php

  include 'conn.php';
  $query="SELECT * FROM `locations` ORDER BY `lname` ASC";
  $result=mysqli_query($con,$query);
  ?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      *{
        margin: 0;
        padding: 0;
        font-family: 'Josefin Sans', sans-serif;
      }
    
    #n1 {
      position: relative; 
    }
    #di1 {
      background-image: url("images/order.jpg");
      height: 600px;
      width: 100%;
      /*min-width: 920px;*/
      width: 90%;
      max-width: 1920px;
      position: relative;
        }
    #di2 {
      padding-left: 50%;
      padding-top: 25%;
    }

</style>
</head>
<body>
  <header>

      <nav class="navbar fixed-top navbar-expand-lg navbar-inverse bg-light col-md-12" id="n1">
  <a class="navbar-brand" href="index.html"><img src="images/logo.png" width="120px" height="80px"></a>
  <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto h5">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#wwd">What we do?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#abtus">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#cntctus">Contact Us</a>
      </li>
      </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>
<div class="container-fluid form-group" id="di1">
<!-- <img src="images/order.jpg" class="img-fluid"> -->
<div class="input-group mb-3 mt-5" style="padding-right:20%;padding-left: 20%;" id="di2">
  <div class="input-group-prepend" >
    <button class="btn btn-outline-success" type="button">Search Offers</button>
  </div>
  <select class="custom-select form-control" id="inputGroupSelect03">
    <option selected>Select Your Location</option>
    <?php while ($row = mysqli_fetch_array($result)):; ?>
    <option value="<?php echo $row['id'];?>"><a href="#"><?php echo $row['lname'];?></a></option>
    <?php endwhile; ?>
  </select>
</div>
</div>
<div id="servmodal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>    
                </div>  
                <div class="modal-body" id="Services are">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
<footer class="bg-dark mt-5">
<p class="text-light" style="margin-left: 40%;" id="cntctus">Connect With Us on</p>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-4"></div>
          <div class="col-lg-4 col-md-4 col-4">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-4">
                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>    
              </div>
              <div class="col-lg-4 col-md-4 col-4">
                <a href="#" ><i class="fa fa-twitter-square" aria-hidden="true"></i></a>    
              </div>
              <div class="col-lg-4 col-md-4 col-4">
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>    
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-4"></div>
        </div>
    </footer>
    <script>  
 $(document).ready(function(){  
      $('#serv').click(function(){  
           var id = $(this).attr("id");
           var tname =  $(this).attr("tname");
           $.ajax({  
                url:"selectservice.php",  
                method:"post",  
                data:{id:id
                      tname:tname
                },  
                success:function(data){  
                     $('#Services are').html(data);  
                     $('#servmodal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>