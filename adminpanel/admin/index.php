<?php 
session_start();
if(isset($_SESSION['admin']['adminnakalogin']) == true) header("location:home.php");

 ?>

<?php 

include("login-ui/index.php");
// http://localhost/CEE/adminpanel/admin/

 ?>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>