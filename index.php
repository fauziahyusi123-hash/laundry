<!DOCTYPE html>
<html>
<head>
	<title>sistem informasi laundry</title>
	<link rel="stylesheet" type="text/css" href="assts/css/bootstrap.css">
	<script type="text/javascript" src="assts/js/jquery.js"></script>
	<script type="text/javascript" src="assts/js/bootstrep.js"></script>
</head>
<body style="background: #f0f0f0;">
     <br><br><br>
     <center>
     	<h2>SISTEM INFORMASI LAUNDRY</h2>
     </center>
     <br><br><br>
     <div class="container">
     	<div class="col-md-4 col-md-offset-4">
               <?php
          if (isset($_GET['pesan'])) {
               if ($_GET['pesan'] =="gagal") {
                    echo "<div class = 'alert alert-danger'>login gagal! username atau password SALAH!</div>";
               }elseif ($_GET['pesan'] == "logout") {
                    echo "<div class='alert alert-info'>anda telah berhasil logout</div>";
               }elseif ($_GET['pesan'] == "belum_login") {
                    echo "<div class='alert alert-danger'>anda harus login untuk mengakses halaman admin!</div>";
               }
          }
          ?>
            <form method="post" action="login.php">
            	<div class="panel">
            		<br>
            		<div class="panel-body">
            			<div class="form-grop">
            				<label>username</label>
            				<input type="text" class="form-control" name="username">
            			</div>
            			<div class="form-grop">
            				<label>password</label>
            				<input type="password" class="form-control" name="password">
            			</div>
            			<input type="submit" class="btn btn-primary" value="log in">
            		</div>
            		<br>
            	</div>
            </from>
        </div>
    </div>
</body>
</html>