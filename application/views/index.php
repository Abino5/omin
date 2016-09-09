<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<script src="https://use.fontawesome.com/881ea29844.js"></script>
	<script src="//cdn.jsdelivr.net/emojione/2.2.6/lib/js/emojione.min.js"></script>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/emojione/2.2.6/assets/css/emojione.min.css"/>
	<link href="http://vjs.zencdn.net/5.11.6/video-js.css" rel="stylesheet">
	<script type="text/javascript" src="http://mervick.github.io/lib/google-code-prettify/prettify.js"></script>
	<!-- If you'd like to support IE8 -->
	<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
	<link rel="icon" href="<?php echo base_url(); ?>images/logo.ico" type="image/x-icon" />
	<link rel='stylesheet' href='<?php echo base_url(); ?>stylesheets/foundation.css' />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>stylesheets/jquery.cssemoticons.css">


	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>stylesheets/style.css">
	<meta charset="utf-8">
</head>
<title>Ominzy</title>
<body class="contents-wrapper">
<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
			<ul class="vertical menu" data-drilldown><!-- start of the drilldown multi level menu -->
				<li class="large-12 small-12 medium-12 columns account">
					<div class="large-12 small-12 medium-12 columns">
					</div>
				</li>
				<ul class="large-12 small-12 medium-12 columns menu-settings">

						<li class="small-12 medium-12 single-menu menu-name smovies">
							<i class="fa fa-film" aria-hidden="true"></i>Movies
						</li>
						<li class="small-12 medium-12 single-menu menu-name scomedy">
							<i class="fa fa-smile-o" aria-hidden="true"></i>Comedies
						</li>
						<li class="small-12 medium-12 single-menu menu-name svideoclips">
							<i class="fa fa-music" aria-hidden="true"></i>Clips
						</li>
						<li class="small-12 medium-12 single-menu menu-name stvshow">
							<i class="fa fa-television" aria-hidden="true"></i>Live Eri-Tv
						</li>
					<li class="small-12 medium-12 single-menu divider">

					</li>

					<li class="small-12 medium-12 single-menu menu-name favorites">
						<i class="fa fa-heart-o" aria-hidden="true"></i>	My Favorites
					</li>
					<li class="small-12 medium-12 single-menu divider">

					</li>
					<ul class="large-12 small-12 medium-12 columns menu-settings menu-settings02">

					<li class="small-12 medium-12 single-menu reverse-clickable">
						Sort Order
					</li>
						<li class="small-12 medium-12 single-menu menu-name dadded">
							<i class="fa fa-calendar" aria-hidden="true"></i>Date added
						</li>
						<li class="small-12 medium-12 single-menu menu-name popularity">
							<i class="fa fa-line-chart" aria-hidden="true"></i>	Popularity
						</li>
						<li class="small-12 medium-12 single-menu divider">

						</li>
						<li class="small-12 medium-12 single-menu menu-name logout">
							<i class="fa fa-sign-out" aria-hidden="true"></i>Log Out
						</li>
						</ul>

</ul>
			</ul>
		</div>
		<div class="off-canvas-content bg-changer" data-off-canvas-content>
			<div class="title-bar">
				<div class="title-bar-left sandwich">
					<button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
					<span class="title-bar-title">Ominzy</span>
				</div>
				<div class="title-bar-right">
					<div class="row collapse title-fix">

						<div class="large-10 small-10 columns">
							<input class="test-form" type="text" placeholder="Type movie name">
						</div>
						<div class="large-2 small-2 steps columns">
							<a href="#" class="success button expand step fi-magnifying-glass size-60"></a>
						</div>
					</div>
				</div>
			</div>



			<div class="loader">
				<div class="loader-gif"></div>
			</div>
			<div class="row fullWidth top-bar show-for-large-only">
				<div class="large-3 small-4 medium-4 columns topbar-fixer">
					<div class="media-options movies">

					</div>

					<div class="media-options comedy">
					</div>
					<div class="media-options videoclips">
					</div>
					<div class="media-options shows">
					</div>

				</div>
				<div class="large-5 small-4 medium-4 columns topbar-fixer">
					<div class="large-1 large-centered logo">

					</div>
				</div>

				<div class="large-4 small-4 medium-4 columns topbar-fixer fixer-topbar">
					<div id="sb-search" class="sb-search">
						<input class="sb-search-input" placeholder="Search..." type="search" value="" name="search" id="search">
						<input class="sb-search-submit" id="search_btn" type="submit" value="">
						<span class="sb-icon-search"></span>
					</div>

					<div class="settings">
						<div id="favs"><div class="tooltip-arrow tool">Your favorite list</div></div>
						<div id="sorter"><div class="tooltip-arrow tool2">Sort order</div></div>

						<div id="account-status"><?php echo $user_status;?></div>
						<div id="account-name"><?php echo $user_name;?></div>

					</div>

				</div>

			</div>








			<div class="row fullWidth">

				<div class="small-12 medium-12 large-12 columns media-container">


					<!--	<div class="content large-2 small-4 medium-3">
				<img src="<?php echo base_url()?>images/movies/batman_dark_knight.jpg " class="thumbnails"/>
				<div class="info">

				</div>

			</div>
-->


				</div>
			</div>




			<div class="media-panel success callout" data-closable="slide-out-right" id="data">
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close="">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="large-10 small-10 medium-10 large-centered medium-centered small-centered panel">
					<div class="large-8 small-12 medium-12 media columns">
						<div class="large-12 small-12 medium-12 media-player">
							<div class="large-12 small-12 medium-12" id="thePlayer">
								<video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
									   poster="" data-setup="{}">
									<source src="<?php echo base_url()?>/movies/Ab_gergsum.mp4" type='video/mp4'>
									<p class="vjs-no-js">
										To view this video please enable JavaScript, and consider upgrading to a web browser that
										<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
									</p>
								</video>
							</div>
						</div>

					</div>
					<div class="large-4 medium-12 small-12 comment-section columns">
						<div class="large-12 small-12 medium-12 pre-comments">
							<div class="large-12 small-12 medium-12 title">
								<div class="large-2 small-2 medium-2 columns poster">
									<img src="#" class="poster-image" />
								</div>
								<div class="large-6 medium-3 small-3 columns video-info">
									<div class="large-12 medium-12 small-12 columns video-title">

									</div>
									<div class="large-12 medium-12 small-12 columns video-postdate">

									</div>
								</div>

								<div class="large-12 large-centered medium-5 small-5 columns video-description">
								</div>
							</div>

							<div class="large-12 small-12 medium-12 stats">
								<div class="large-3 small-3 medium-3 columns like"><a href="" id="like">Like</a> </div>
								<div class="large-3 small-3 medium-3 columns tag"><a href="" id="tag">Favorite</a></div>
								<div class="large-3 small-3 medium-3 columns likes"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span class="likes-value"> 5454</span></div>
								<div class="large-3 small-3 medium-3 columns views"><i class="fa fa-eye" aria-hidden="true"></i> <span class="views-value">54545</span></div>
							</div>
							<div class="large-12 small-12 medium-12 comments">
								<div class="clearfix fix"></div>
								<div class="large-12 small-12 medium-12 load-section">
									<div class="large-12 small-12 medium-12 load-holder">
										<div class="large-2 large-centered small-centered medium-centered small-2 medium-2 comment-loading">

										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="large-12 small-12 medium-12 commenter">
							<div class="large-10 large-centered small-centered medium-centered small-10 medium-10 comment-area columns">
								<input type="text" class="emoji-wysiwyg-editor" data-emojiable="true" id="comment" placeholder="Write a comment..."/>

							</div>

						</div>
					</div>
				</div>













			</div>




		</div>
	</div>
</div>







<!-- Reveal Modals begin -->
<div id="firstModal" class="reveal-modal" data-reveal aria-labelledby="firstModalTitle" aria-hidden="true" role="dialog">
	<div class="large-8 large-centered small-centered medium-centered small-11 medium-11 columns form">
		<table class="sign-form"><form action="http://localhost:8080/register" method="post">
				<tr class="trow">
					<td class="lcolumn">Full name</td>
					<td class="rcolumn"><input type="text" required class="text-left" maxlength="25" id="fullname"/> </td>
				</tr>
				<tr class="trow">
					<td class="lcolumn">Username</td>
					<td class="rcolumn"><input type="text" required class="text-left" maxlength="10" id="username"/> </td>
				</tr>
				<tr class="trow">
					<td class="lcolumn">Email</td>
					<td class="rcolumn"><input type="email" required class="text-left" id="email"/> </td>
				</tr>
				<tr class="trow">
					<td class="lcolumn">Password</td>
					<td class="rcolumn"><input type="password" required class="text-left" id="password"/> </td>
				</tr>
				<tr class="trow">
					<td class="lcolumn">Re-type Password</td>
					<td class="rcolumn"><input type="password" required class="text-left" id="rpassword"/> </td>
				</tr>

		</table>
	</div>
	<div class="status" style="text-align: center; margin: 10px;color:darkred; font-weight: bold"></div>
	<input type="submit" data-reveal-id="register" class="large-4 small-6 medium-6 large-centered small-centered medium-centered register-btn secondary button btn-success columns">Register</input>
	</p></form>
	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

<div id="secondModal" class="reveal-modal" data-reveal aria-labelledby="secondModalTitle" aria-hidden="true" role="dialog">
	<div class="large-8 large-centered small-centered medium-centered small-11 medium-11 columns form">
		<table class="sign-form"><form action="http://localhost:8080/register" method="post" id="sign">

				<tr class="trow">

					<td class="rcolumn"><input placeholder="Username or Email" type="text" required class="text-left" id="susername"/> </td>
				</tr>

				<tr class="trow">

					<td class="rcolumn"><input placeholder="Password" type="password" required class="text-left" id="spassword"/> </td>
				</tr>


		</table>
	</div>
	<p id="status" style="text-align: center; margin: 10px;color: #00CC00; font-weight: bold"></p>
	<input type="submit" data-reveal-id="register" value="Sign In" class="large-4 small-6 medium-6 large-centered small-centered medium-centered sign-btn secondary button btn-success columns">
	</p>
	</form>
	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>javascripts/jquery.nicescroll.js"></script>
<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="/fancybox/jquery.easing-1.4.pack.js"></script>
<script src="//cdn.jsdelivr.net/velocity/1.1.0/velocity.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>javascripts/_main.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>javascripts/vendor/foundation.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>javascripts/app.js"></script>

<script src="http://vjs.zencdn.net/5.11.6/video.js"></script>

</body>
</html>