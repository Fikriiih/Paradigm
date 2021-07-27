<!DOCTYPE html>
<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta name="mobile-web-app-capable" content="yes" />
		<title>Virtual Exhibition Paradigm 2021</title>
		<meta name="author" content="karetsatudio">
		<meta name="description" content="paradigm 2021">
		<meta name="keywords" content="creative, works, showcase, portfolio, highlight, projects, modern, tourog, digital, studio, css, animation, transition, freelancers">
		<style type="text/css" title="Default">
			/* fullscreen */
			@import url("https://fonts.googleapis.com/css?family=Fjalla+One|Poppins:300,400,600,800&display=swap");
			html {
				height:100%;
			}
			body {
				height:100%;
				margin: 0px;
				overflow:hidden; /* disable scrollbars */
				-webkit-tap-highlight-color: rgba(0, 0, 0, 0); /* remove highlight on tab for iOS/Android */
				font-family: "Fjalla One", sans-serif;
			}
			/* fix for scroll bars on webkit & >=Mac OS X Lion */ 
			::-webkit-scrollbar {
				background-color: rgba(0,0,0,0.5);
				width: 0.75em;
			}
			::-webkit-scrollbar-thumb {
    			background-color:  rgba(255,255,255,0.5);
			}

			.side-bar {
				position: fixed;
				z-index: 9;
				left: -300px;
				width: 300px;
				height: 100%;
				background-color: #222327;
				transition: all .5s ease;
			}

			.side-bar header {
				font-size: 50px;
				color: white;
				text-align: center;
				line-height: 70px;
				user-select: none;
				margin-top: 200px;
				font-weight: 600;
			}

			.side-bar ul a {
				display: block;
				height: 100%;
				width: 100%;
				line-height: 65px;
				font-size: 20px;
				color: white;
				padding-left: 40px;
				box-sizing: border-box;
				transition: .4s;
			}

			ul a {
				text-decoration-line: none;
				font-weight: 600;
				
			}

			ul a:hover{
				padding-left: 50px;
				
			}

			#check {
				display: none;
			}

			label #btn{
				position: absolute;
				cursor: pointer;
				z-index: 10;
				left: 40px;
				top: 85%;
			}

			.logo {
				left: -20;
				width: 50px;
				position: fixed;
				z-index: 11;
				margin: 50px;
			}

			.menu-icon {
				width: 50px;
			}

			#check:checked ~ .side-bar {
				left: 0;
			}


			.audio {
				width: 50px;
				z-index: 10;
				left: 40px;
				position: absolute;
				top: 80%;
				cursor: pointer;
			}

			



			@media only screen and (max-width: 767px), only screen and (max-device-width: 767px) {
				.logo {
					left: 10;
					width: 50px;
					position: fixed;
					z-index: 11;
					margin: 30px;
				}

				label #btn {
					top: 90%;
					left: 20px;
				}

				.audio {
					left: 20px;
					top: 80%;
				}
				.side-bar header {
					font-size: 30px;
					color: white;
					text-align: center;
					line-height: 70px;
					user-select: none;
					margin-top: 200px;
					font-weight: 600;
				}
			}

		</style>
		<link href="<?= base_url('assets/'); ?>ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
		<link href="<?= base_url('assets/'); ?>ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
		<link href="<?= base_url('assets/'); ?>ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
		<link href="<?= base_url('assets/'); ?>ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
		<link href="<?= base_url('assets/'); ?>ico/favicon.png" rel="shortcut icon">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<script>

			var source = "<?= base_url('assets/'); ?>audio/ES_Center of My Universe - Christian Andersen.mp3";
			var audio = new Audio(); // use the constructor in JavaScript, just easier that way
			audio.addEventListener("load", function() {
			  audio.play();
			}, true);
			audio.src = source;
			audio.autoplay = true;
			audio.loop = true;
			audio.volume = 0.2;
			
			
			var playing = true;
			function playaudio(){
				if (playing == false) {
			  		audio.play();
					playing = true;
					document.getElementById('audio').src="<?= base_url('assets/'); ?>images/audio_on.png"
				} else {
					audio.pause();
					playing = false;
					document.getElementById('audio').src="<?= base_url('assets/'); ?>images/audio_off.png"
				}
			}

			// $('.equalizer').click();		
			// var playing = true;		
			// $('.equalizer').click(function() {
			// 	if (playing == false) {
			//   audio.play();
			// 		playing = true;

			// 	} else {
			// 		audio.pause();
			// 		playing = false;
			// 	}
			// });
		
		</script>
	</head>
	<body>
		<!-- <div class="logo" style="position: absolute; margin: 50px; z-index: 10;">
			<a href="index.html"><img src="images/logo.PNG" style="width: 50px;"></a>
		</div> -->
	
		<img class="logo" src="<?= base_url('assets/'); ?>images/logo.PNG">
	
		
		<input type="checkbox" id="check">	
		<label  for="check">
			<img class="menu-icon" src="<?= base_url('assets/'); ?>images/menu.png" id="btn">
		</label>
		<img id="audio" class="audio" onclick="playaudio()" src="<?= base_url('assets/'); ?>images/audio_on.png" alt="audio">
		
		<div class="side-bar">
			<header>Virtual Exhibition</header>
			<ul>
				<a href="index.html">Home</a>
				<a href="studio.html">Livestream</a>
				<a href="blog.html">Blog</a>
				<a href="contact.html">Faculty Information</a>
				
			</ul>
		</div>
		
<!-- - - - - - - 8<- - - - - - cut here - - - - - 8<- - - - - - - -->
		<script type="text/javascript" src="<?= base_url('assets/'); ?>pano2vr_player.js">
		</script>
		<script type="text/javascript" src="<?= base_url('assets/'); ?>skin.js">
		</script>
		<script src="<?= base_url('assets/'); ?>webxr/three.min.js"></script>
		<script src="<?= base_url('assets/'); ?>webxr/webxr-polyfill.min.js"></script>
		<div id="container" style="width:100%;height:100%;overflow:hidden;">
		<br>Loading...<br><br>
		</div>
		<script type="text/javascript">
	
			// create the panorama player with the container
			pano=new pano2vrPlayer("container");
			// add the skin object
			skin=new pano2vrSkin(pano);
			// load the configuration
		
			window.addEventListener("load", function() {
				pano.readConfigUrlAsync("<?= base_url('assets/'); ?>pano.xml");
			});
			if (window.navigator.userAgent.match(/iPhone/i)) {
				// fix for white borders, rotation on iPhone
				function iosHfix() {
					window.scrollTo(0, 1);
					document.documentElement.style.setProperty('height', '100vh');
				};
				window.addEventListener('orientationchange', function() {
					setTimeout(iosHfix, 0);
					setTimeout(iosHfix, 200);
					setTimeout(iosHfix, 2000);
				});
			}
		</script>
		<noscript>
			<p><b>Please enable Javascript!</b></p>
		</noscript>
<!-- - - - - - - 8<- - - - - - cut here - - - - - 8<- - - - - - - --> 
	</body>
</html>
