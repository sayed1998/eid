<!DOCTYPE html>
<html>
<head>
	<title>Eid Mubarak</title>
	<style type="text/css">
		div{
			padding-top: 150px;
		}
		#frame{
			color: #fff;
			animation: anim 5s infinite;
		}
		@keyframes anim{
			0%{color: #F00;}
			0%{color: #FF0; transform: scale(1.5);}
			0%{color: #FF0080; transform: scale(0.8);}
			75%{color: #8000FE; transform: scale(1.5);}
			100%{color: #F00; transform: scale(1);}
		}
	</style>
</head>
<body background="eid.jpg" style="background-size: 1370px 680px;">
	<div>
		<pre>
			<h1 id='frame'>
				<?php echo "Eid Mubarak ".$_GET['name']."<br>";?>
				   From Wasim Khan
			</h1>
		</pre>
	</div>
</body>
</html>