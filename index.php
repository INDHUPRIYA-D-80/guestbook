<?php     
    session_start(); 
    if (isset($_GET['logout'])) 
    {
        session_destroy();
        unset($_SESSION['name']);
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en" class="js csstransitions">
<head>
<title>GUESTBOOK</title><meta charset="utf-8">
<link href="index.css" rel="stylesheet" >
</head>
<body>
<div id="pagewrapper">
<div id="topbg"></div>
<div id="systemName">
<h1><strong>GUESTBOOK....</strong></h1>
</div>
<div id="header">
<div id="mainmenu">
<header>
<ul>

<?php if (!isset($_SESSION['name'])){?>
    <li><a href="home.php">HOME</a></li>
<?php }?>
<?php if (isset($_SESSION['name']))
{?>
<li><a href="index.php">Home</a></li>
<li><a href="selection.php">Select Your Theme</a></li>
<li><a href="selected.php">Your Guestbook Design</a></li>
<li> <a href="index.php?logout='1'">Logout</a> </li>
<?php }?>
</ul>
</header>
</div>
</div>
<div class="content">
<!-- notification message -->
<?php if (isset($_SESSION['success'])) {?>
<div class="error success" >
<h3 style="color: green;">
<?php
echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3></div>
<?php } ?>
</div>
<div id="content">
<h1>Welcome <?php
if (isset($_SESSION['name']))
{ echo
$_SESSION['name'];
}
?>
</h1>

</div>
</body>
</html>