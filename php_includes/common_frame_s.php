<?php

include_once("php_includes/check_login_status.php");

if($_SESSION['userType'] == 'admin'){
   // $img = 'img/profile/admin/'.$_SESSION['userid'] . '.jpg';
    $img1 = 'img/profile/default_pic.png';
}else if($_SESSION['userType'] == 'student'){
    $img1 = 'img/profile/default_pic.png';
    if(file_exists ( $img1 )){

    }else{
        $img1 = 'img/profile/student/unknown.png';
    }
}


?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="shortcut icon" href="#" type="image/x-icon">
        <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="TVMxNURoTUUdBl54LDd6LQ48CUcAPy82fhdWdzAxPiYfKUcGMSo8Jw==">
        <title>Edusystem-system of selfeducation</title>
          <link href="css/bootstrap.css" rel="stylesheet">

<link href="css/fullcalendar.print.css" rel="stylesheet" media="print">
<link href="css/jquery-ui.css" rel="stylesheet">
<link href="css/fullcalendar.css" rel="stylesheet">
<link href="css/AdminLTE.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="css/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="css/bootstrap-multiselect.css" rel="stylesheet">
<link href="css/EdusecCustome.css" rel="stylesheet">
<link href="css/my_css.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/yii.js"></script>
<script src="js/AdminLTE/app.js"></script>
<script src="js/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="js/bootstrap-multiselect.js"></script>
<script src="js/custom-delete-confirm.js"></script>
<script src="js/bootbox.js"></script>
<script src="js/bootstrap.file-input.js"></script>
<script src="js/bootstrapx-clickover.js"></script></head>

    <style type="text/css">
    .aaa:hover{
        color:#aaa;
    }
    </style>
    <body class="skin-black">


<header class="header">

<a class="logo" href="home.php"><!--img src="img/edusec.png" alt="" height="22px" width="120px;"--><h3>EDUSYSTEM</h3></a>
<nav class="navbar navbar-static-top" role="navigation">

    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</a>
<div class="navbar-right">

<ul class="nav navbar-nav">
<li class="module-menu">
	</li>
<li class="dropdown module-menu">
    </a>
	
<ul class="dropdown-menu">
    <li>
        <ul class="menu">
			            <li>
				<a href="Master Configuration.htm"><i class="fa fa-cogs text-aqua fa-2x"></i><h4> Configuration</h4></a>            </li>
						            <li>
				<a href="Dashboard Modules.htm"><i class="fa fa-dashboard text-green fa-2x"></i> <h4>Dashboard</h4></a>            </li>
						            <li>
				<a href="?controller=admin&action=course_management"><i class="fa fa-graduation-cap text-yellow fa-2x"></i> <h4>Course</h4></a>            </li>
						            <li>
				<a href="Student Module.htm"><i class="fa fa-users text-orange fa-2x"></i> <h4>Student</h4></a>            </li>
						            <li>
				<a href="Employee Module.htm"><i class="fa fa-user text-purple fa-2x"></i> <h4>Employee</h4></a>            </li>
						            <li>
				<a href="Fees Module.htm"><i class="fa fa-money text-green fa-2x"></i> <h4>Fees</h4></a>            </li>
						            <li>
				<a href="Report Center.htm"><i class="fa fa-line-chart text-blue fa-2x"></i> <h4>Report Center</h4></a>            </li>
						            <li>
				<a href="Assignments.htm"><i class="fa fa-user-secret text-orange fa-2x"></i> <h4>User Rights</h4></a>            </li>
  <li>
				<a href="Mess Module.html"><i class="fa fa-money text-green fa-2x"></i> <h4>Mess</h4></a>            </li>
						              <li>
				<a href="Hostel Module.htm"><i class="fa fa-money text-green fa-2x"></i> <h4>hostel</h4></a>            </li>
						             
  <li>
				<a href="Transotation Module.htm"><i class="fa fa-money text-green fa-2x"></i> <h4>Transportation</h4></a>            </li>
						            <li></ul>
    </li>
</ul>
</li>
<!-- Notifications: style can be found in dropdown.less -->

<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"edusystem");

$user="student";
$status="InActive";
$strSQL1 = "SELECT count(*) FROM notification WHERE usr_typ = '".$user."' AND status!='".$status."'" ;
    $rs1 = mysqli_query($conn,$strSQL1);
    $row1 = mysqli_fetch_array($rs1);

?>

<script type="text/javascript">
function notify( note_id1) {
alert(note_id1);    
}

function sendInfo(n)  
{  
var v=n;  
var url="notification.php?id="+v;  
  
if(window.XMLHttpRequest){  
request=new XMLHttpRequest();  

}  
else if(window.ActiveXObject){  
request=new ActiveXObject("Microsoft.XMLHTTP");  
}  
  
try{  
    
request.onreadystatechange=getInfo;  
request.open("GET",url,true);  
request.send();  
}catch(e){alert("Unable to connect to server");}  
}  
  
function getInfo(){  
    
if(request.readyState==4){  
var val1=request.responseText;  
//document.getElementById(id).value=val1;  
//desc(id);
}  
}  


</script>


    <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span><?php echo $_SESSION['userid']; ?> <i class="caret"></i></span>
        </a>
        <ul class="dropdown-menu" style="margin-right:10px">
            <!-- User image -->
            <li class="user-header bg-light-blue">
                <img src="<?php echo $img1; ?>" class="img-circle" alt="User Image">

                <p style="font-size: 18px;">
                    <?php echo $_SESSION['userid']; ?> </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body" style="display:none">
                <div class="col-xs-6 no-padding">
		    <a class="btn btn-default btn-flat" href="Admin Dashboard.htm" style="font-size:13px">View Profile</a>                </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
		    <a class="btn btn-default btn-flat" href="changePassword.php" style="font-size:12px">Change Password</a>                </div>
                <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="out.php" style="font-size:12px">Sign out</a>                </div>
            </li>
        </ul>
    </li><!-- User Account: style can be found in dropdown.less -->

</ul>
</div>
</nav>
</header>
