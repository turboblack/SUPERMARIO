<!DOCTYPE html>
<html lang="en">
<head>
<link href="themes/black/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=wCMS::get('config','siteTitle')?> - <?=wCMS::page('title')?></title>
	<meta name="description" content="<?=wCMS::page('description')?>">
	<meta name="keywords" content="<?=wCMS::page('keywords')?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=wCMS::asset('css/style.css')?>">
	<?=wCMS::css()?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<?=wCMS::alerts()?>
	<?=wCMS::settings()?>

    <div id="sun"></div>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="col-sm-5 text-center">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMobile">&#9776;</button>
					<a href="./"><h3><?=wCMS::get('config','siteTitle')?><span class="navbar" id="logo"></span></h3></a>
				</div>
			</div>
			<div class="col-sm-7 text-center">
				<div class="collapse navbar-collapse" id="navMobile">
					<ul class="nav navbar-nav navbar-right">
						<?=wCMS::menu()?>

					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="col-xs-12 col-sm-8">
			<div class="whiteBackground grayFont padding20 rounded5">
				<?=wCMS::page('content')?>

			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="visible-xs spacer20"></div>
			<div class="blueBackground padding20 rounded5">
				<?=wCMS::block('subside')?>

				<br>
				<!-- Add font awesome icons below this comment -->

				<!-- Add font awesome icons above this comment -->
			</div>
		</div>
	</div>

	<footer class="container-fluid">
		<div class="padding20 text-right">
			<?=wCMS::footer()?>
		</div>
	</footer>

			<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>
		<?=wCMS::js()?>
	<?=wCMS::js()?>
	<div id="scroller" class="b-top" style="display: none;"><span class="b-top-but">Back to top</span></div>
	<script type="text/javascript">
	$(document).ready(function() {
		$("body").css("display", "none");
		$("body").fadeIn(1000);

		$("a.fade").click(function(event){
			event.preventDefault();
			linkLocation = this.href;
			$("body").fadeOut(1000, redirectPage);
		});
		function redirectPage() {
			window.location = linkLocation;
		}
	});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function () {if ($(this).scrollTop() > 0) {$('#scroller').fadeIn();} else {$('#scroller').fadeOut();}});
			$('#scroller').click(function () {$('body,html').animate({scrollTop: 0}, 400); return false;});
		});
	</script>
    <embed src="<?=wCMS::asset('01-main-theme-overworld.mp3')?>" width="0" height="0" align="left" hidden="true" autostart="true" loop="True">
</body>
</html>
