<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiapLapor!</title>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>">
    
    <style>
        p {
            font-size: 80px;
        }
        body{
            background: #a64bf4;
  background: -webkit-linear-gradient(45deg, #00dbde, #fc00ff);
  background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
  background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
  background: linear-gradient(45deg, #00dbde, #fc00ff);
        }
        .col{
            background: #a64bf4;
  background: -webkit-linear-gradient(45deg, #00dbde, #fc00ff);
  background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
  background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
  background: linear-gradient(45deg, #00dbde, #fc00ff);
        }
    </style>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col" align="center" style="padding-top: 13%;">
                <img src="<?php echo base_url('assets/Lami logo.png')?>" style="height: 80px;width: 280px;">
                <br>
                <img src="<?php echo base_url('assets/homepic.jpg')?>" style="height: 427px;width: 401px; margin-bottom: 10%;">
            </div>
            <div class="col bg-light" style="padding-top: 18%;" align="center">
                <p style="font-size: 50px;">LAKUKAN ADUAN ANDA DISINI</p>
                <a href="<?php echo site_url('sistem/login')?>"><button type="button" class="btn btn-dark btn-lg">Login</button></a>
                <a href="<?php echo site_url('aiatem/index2')?>" class="text-decoration-none text-dark" style="margin-left: 2%;font-size: large;">Register</a>
            </div>
        </div>    
    </div>
    

    <!-- Core theme JS-->
    <script src="<?php echo base_url('assets/js/script.js')?>">
    </script>
</body>
</html>