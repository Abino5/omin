<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <script src="https://use.fontawesome.com/881ea29844.js"></script>

    <link href="http://vjs.zencdn.net/5.11.6/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <link rel="icon" href="<?php echo base_url(); ?>images/logo.ico" type="image/x-icon" />
    <link rel='stylesheet' href='<?php echo base_url(); ?>stylesheets/foundation.css' />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>stylesheets/style.css">
    <meta charset="utf-8">
</head>
<title>Ominzy</title>
<body>
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
            <ul class="vertical menu" data-drilldown><!-- start of the drilldown multi level menu -->
                <li>
                    <a>Item 1</a>
                    <ul class="vertical menu">
                        <li><a href="#">Item 1A</a></li>
                        <li><a href="#">Item 1B</a></li>
                        <li><a href="#">Item 1C</a></li>
                        <li><a href="#">Item 1D</a></li>
                        <li><a href="#">Item 1E</a></li>
                    </ul>
                </li>
                <li>
                    <a>Item 2</a>
                    <ul class="vertical menu">
                        <li><a href="#">Item 2A</a></li>
                        <li><a href="#">Item 2B</a></li>
                        <li><a href="#">Item 2C</a></li>
                        <li><a href="#">Item 2D</a></li>
                        <li><a href="#">Item 2E</a></li>
                    </ul>
                </li>
                <li>
                    <a>Item 3</a>
                    <ul class="vertical menu">
                        <li><a href="#">Item 3A</a></li>
                        <li><a href="#">Item 3B</a></li>
                        <li><a href="#">Item 3C</a></li>
                        <li><a href="#">Item 3D</a></li>
                        <li><a href="#">Item 3E</a></li>
                    </ul>
                </li>
                <li><a href="#">Item 4</a></li>
            </ul>
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="title-bar">
                <div class="title-bar-left">
                    <button class="menu-icon" type="button" data-open="offCanvasLeft"></button>
                    <span class="title-bar-title">Foundation</span>
                </div>
                <div class="title-bar-right">
                    <button class="menu-icon" type="button" data-open="offCanvasRight"></button>
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
                <div class="large-6 small-4 medium-4 columns topbar-fixer">
                    <div class="large-1 large-centered logo">

                    </div>
                </div>

                <div class="large-3 small-4 medium-4 columns topbar-fixer fixer-topbar">
                    <div id="sb-search" class="sb-search">
                        <input class="sb-search-input" placeholder="Search..." type="search" value="" name="search" id="search">
                        <input class="sb-search-submit" id="search_btn" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    </div>

                    <div class="settings">
                        <div id="favs"><div class="tooltip-arrow tool">Your favorite list</div></div>
                        <div id="sorter"><div class="tooltip-arrow tool2">Sort order</div></div>

                        <div id="account-name">Login</div>

                    </div>

                </div>

            </div>


            <button type="button" class="button" data-toggle="offCanvas">Open Menu</button>





            <div class="row fullWidth small-top-bar show-for-medium-down hide-for-large">
                <div class="small-4 medium-4 common-adjust columns">

                </div>
                <div class="small-4 medium-4 common-adjust columns">
                    <div class="medium-2 small-2 small-centered medium-centered logo">

                    </div>


                </div>
                <div class="small-4 medium-4 common-adjust columns"></div>

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
                        <div class="large-12 small-12 medium-12 stats">
                            <div class="large-3 small-3 medium-3 columns like"><a href="" id="like">LIKE</a> </div>
                            <div class="large-3 small-3 medium-3 columns tag"><a href="" id="tag"> TAG FRIENDS</a></div>
                            <div class="large-3 small-3 medium-3 columns likes"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span class="likes-value"> 5454</span></div>
                            <div class="large-3 small-3 medium-3 columns views"><i class="fa fa-eye" aria-hidden="true"></i> <span class="views-value">54545</span></div>
                        </div>
                    </div>
                    <div class="large-4 medium-12 small-12 comment-section columns">
                        <div class="large-12 small-12 medium-12 pre-comments">
                            <div class="large-12 small-12 medium-12 title">

                            </div>
                            <div class="large-12 small-12 medium-12 comments">
                                <!--	<div class="large-12 small-12 medium-12 single-comment">
                                        <span class="commenter-name">Abino: </span> my name is abe and please try to herlp me with ttsingle-commentmy name is abe and please try to herlp me with ttsingle-comment<br>
                                        <span class="commenter-date">5 days ago</span>
                                    </div>
                                    -->
                                <div class="large-12 small-12 medium-12 load-section">
                                    <div class="large-12 small-12 medium-12 load-holder">
                                        <div class="large-2 large-centered small-centered medium-centered small-2 medium-2 comment-loading">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="large-12 small-12 medium-12 commenter">
                            <div class="large-10 small-10 medium-10 comment-area columns">
                                <textarea id="comment"></textarea>
                            </div>
                            <div class="large-2 small-2 medium-2 comment-btn columns">
                                <div class="comment-btn2"> > </div>
                            </div>
                        </div>
                    </div>
                </div>













            </div>




        </div>
    </div>
</div>
</body>