<?php
     $koneksi = mysqli_connect("localhost","root","","dp_laundry");

     if (mysqli_connect_errno()) {
     	 echo "koneksi database gagal : ".
     	     mysqli_connect_error();
     }
 ?>