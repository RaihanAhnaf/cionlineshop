<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Tokoroti</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="<?=base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url()?>assets/img/logo.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content" style="width:300px;">
							<div class="header">
								<div class="logo text-center"><img src="<?= base_url()?>assets/img/boss.png" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" action="<?= base_url('index.php/Login/login')?>" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="text" class="form-control" placeholder="Username"  name="username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control"  placeholder="Password" name="password">
								</div>

								<input type="submit" name="submit" value="Login"  class="btn btn-warning btn-lg btn-block">
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="<?=base_url()?>#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Ada banyak orang yang kelaparan di dunia ini, namun Tuhan tidak dapat mucul di hadapan mereka kecuali dalam bentuk roti.</h1>
							<p>Mahatma Gandhi</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
