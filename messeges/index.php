<?php
session_start ();
function loginForm() {
    echo '
   <div id="loginform">
   <form action="index.php" method="post">
       <p>Please enter your name to continue:</p>
       <label for="name">Name:</label>
       <input type="text" name="name" id="name" />
       <input type="submit" name="enter" id="enter" value="Enter" />
   </form>
   </div>
   ';
}
 
if (isset ( $_POST ['enter'] )) {
    if ($_POST ['name'] != "") {
        $_SESSION ['name'] = stripslashes ( htmlspecialchars ( $_POST ['name'] ) );
        $fp = fopen ( "log.html", 'a' );
        fwrite ( $fp, "<div class='msgln'><i>User " . $_SESSION ['name'] . " has joined the chat session.</i><br></div>" );
        fclose ( $fp );
    } else {
        echo '<span class="error">Please type in a name</span>';
    }
}
 
if (isset ( $_GET ['logout'] )) {
   
    // Simple exit message
    $fp = fopen ( "log.html", 'a' );
    fwrite ( $fp, "<div class='msgln'><i>User " . $_SESSION ['name'] . " has left the chat session.</i><br></div>" );
    fclose ( $fp );
   
    session_destroy ();
    header ( "Location: index.php" ); // Redirect the user
}
 
?>

<!DOCTYPE html>
<html lang="bg">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link href="../assets/css/ie10-viewport-bug-workaround.css" type="text/css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link href="../carousel.css" type="text/css" rel="stylesheet">
		<style type="text/css">
		.img-thumbnail {
		margin: 50px 0 10px;
		width: 20em;
		height: 20em;
		}
		
		.avatar {
		width: 15em;
		height: 15em;
		position: relative;
		top: 0px;
		}
		.top{
			margin-top: 50px;
			
		}
		.msgButtons {
			display: flex;
			justify-content: space-around;
			margin-bottom: 1%;
		}
		.list-group-item {
			margin-bottom: 1%;
			border-radius: 4px;
		}
		.jumbotron{
			margin-bottom: 0px;
			border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}
		#jumbotronFix{
						border-bottom-left-radius: 0px;
			border-bottom-right-radius: 0px;
		}
		body{
			padding-bottom: 0;
		}
		.blog-footer {
		padding: 40px 0;
		color: #999;
		margin-top: 0;
		text-align: center;
		background-color: #f9f9f9;
		border-top: 1px solid #e5e5e5;
		}
		.blog-footer p:last-child {
		margin-bottom: 0;
		}
		#fix li>a{
		padding: 15px 10px 15px 5px;
		}
		form, p, span {
		margin:0;
		padding:0; }
		
		input { font:12px arial; }
		
		a {
		color:#0000FF;
		text-decoration:none; }
		
		a:hover { text-decoration:underline; }
		
		#wrapper, #loginform {
			text-align:center;
			position:relative;
		margin:5% auto;
		padding-bottom:25px;
		background:#EBF4FB;
		width:504px;
		border:1px solid #ACD8F0; }
		
		#loginform { 

			padding-top:18px; }
		
		#loginform p { 
text-align: center;
			margin: 5px; }
		
		#chatbox {
		text-align:left;
		margin:0 auto;
		margin-bottom:25px;
		padding:10px;
		background:#fff;
		height:270px;
		width:430px;
		border:1px solid #ACD8F0;
		overflow:auto; }
		
		#usermsg {
			margin:0 auto;
		display:inline-block;
		width:385px;
		border:1px solid #ACD8F0; }
		
		#submit {
		margin:0 auto;
		display:inline-block;
			width: 60px; }
		#submitForm {
			text-align:center;
			position:relative; }
		
		.error { color: #ff0000; }
		
		#menu { padding:12.5px 25px 12.5px 25px; }
		
		.welcome { float:left; }
		
		.logout { float:right; }
		
		.msgln { margin:0 0 2px 0; }
		</style>
		<title>Students</title>
	</head>
	<body>
		<div class="navbar-wrapper">
			<div class="container">
				<nav class="navbar navbar-inverse navbar-static-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" style="padding: 5px 5px;" href="../index.html">
								<img src="../img/future.png" style="height:35px;margin-bottom:20%">
							</a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav" id="fix">
								
								<li><a href="#" class="disabled">Защо България?</a></li>
								<li>
									<a href="../uni/unilist.html">Университети</span></a>
								</li>
								<li><a href="../aboutus.html">За Нас</a></li>
							</ul>
							<form class="navbar-form navbar-right" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Търсене:">
								</div>
								<button type="submit" class="btn btn-default">Намери</button>
							</form>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<!-- NAVBAR END
		================================================== -->
		<div class="container">
			<div class="jumbotron" id="jumbotronFix">
				<div class="row">
    <?php
    if (! isset ( $_SESSION ['name'] )) {
        loginForm ();
    } else {
        ?>
<div id="wrapper">
        <div id="menu">
            <p class="welcome">
                Welcome, <b><?php echo $_SESSION['name']; ?></b>
            </p>
            <p class="logout">
                <a id="exit" href="#">Exit Chat</a>
            </p>
            <div style="clear: both"></div>
        </div>
        <div id="chatbox"><?php
        if (file_exists ( "log.html" ) && filesize ( "log.html" ) > 0) {
            $handle = fopen ( "log.html", "r" );
            $contents = fread ( $handle, filesize ( "log.html" ) );
            fclose ( $handle );
           
            echo $contents;
        }
        ?></div>
 
				<div id="submitForm">
					<form name="message" action="">
						<input name="usermsg" type="text" id="usermsg" size="63" />
						<input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="blog-footer">
	<p>Build by <span class="text-danger"><a href="#">Koko Sexa</a></span> and <span class="text-success"><a href="#">Antonio Banderas</a></span></p>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript">
// jQuery Document
$(document).ready(function(){
});
 
//jQuery Document
$(document).ready(function(){
    //If user wants to end session
    $("#exit").click(function(){
        var exit = confirm("Are you sure you want to end the session?");
        if(exit==true){window.location = 'index.php?logout=true';}     
    });
});
 
//If user submits the form
$("#submitmsg").click(function(){
        var clientmsg = $("#usermsg").val();
        $.post("post.php", {text: clientmsg});             
        $("#usermsg").attr("value", "");
        loadLog;
    return false;
});
 
function loadLog(){    
    var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
    $.ajax({
        url: "log.html",
        cache: false,
        success: function(html){       
            $("#chatbox").html(html); //Insert chat log into the #chatbox div  
           
            //Auto-scroll          
            var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
            if(newscrollHeight > oldscrollHeight){
                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
            }              
        },
    });
}
 
setInterval (loadLog, 2500);
</script>
<script>
window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')
</script>
<script src="../js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
<?php
    }
    ?>
</body>
</html>