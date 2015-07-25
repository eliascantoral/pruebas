<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<!--<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <video width="320" height="240" controls>
          <source src="http://52.5.124.101:1935/vods3/mp4:amazons3/guaflix-vid-stream/wp-content/uploads/2015/07/Introduction-to-Amazon-S3.mp4" type="video/mp4">
          <source src="http://52.5.124.101:1935/vods3/mp4:amazons3/guaflix-vid-stream/wp-content/uploads/2015/07/Introduction-to-Amazon-S3.m3u8" type="video/mp4">
        Your browser does not support the video tag.
        </video>
        
        <video controls src="http://52.5.124.101:1935/live/myStream/playlist.m3u8"> 
        </video>        
    </body>
</html>
-->


<!--
http://52.5.124.101:1935/vods3/_definst_/mp3:amazons3/guaflix-vid-stream/wp-content/uploads/2015/07/Queen-Bohemian-Rhapsody.mp3/manifest.f4m
-->
<html>
<head>
<meta charset="utf-8" />
<!-- Website Design By: www.happyworm.com -->
<title>Demo : jPlayer Android Fix</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="jplayer/dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jplayer/lib/jquery.min.js"></script>
<script type="text/javascript" src="jplayer/dist/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	$("#jquery_jplayer_1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				title: "Amazon Cloud",
				rtmpv: "rtmp://52.5.124.101:1935/vods3/mp4:amazons3/guaflix-vid-stream/wp-content/uploads/2015/07/Introduction-to-Amazon-S3.mp4",
				poster: "http://www.noticias.ufm.edu/noticias/images/c/ca/141024_UFM_AKADEMEIA.jpg"
			});
		},
		swfPath: "jplayer/dist/jplayer",
		supplied: "rtmpv",
		size: {
			width: "640px",
			height: "360px",
			cssClass: "jp-video-360p"
		},
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: false,
		keyEnabled: true,
		remainingDuration: true,
		toggleDuration: true
	});

	//$("#jplayer_inspector").jPlayerInspector({jPlayer:$("#jquery_jplayer_1")});
});
//]]>
</script>
<!-- Flattr -->
<script type="text/javascript">
	/* Flattr code for jPlayer.org */
	(function() {
		var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
		s.type = 'text/javascript';
		s.async = true;
		s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
		t.parentNode.insertBefore(s, t);
	})();
</script>
</head>
<body>
<div id="jquery_jplayer_1" class="jp-jplayer"></div>
<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
	<div class="jp-type-single">
		<div class="jp-gui jp-interface">
			<div class="jp-controls">
				<button class="jp-play" role="button" tabindex="0">play</button>
				<button class="jp-stop" role="button" tabindex="0">stop</button>
			</div>
			<div class="jp-progress">
				<div class="jp-seek-bar">
					<div class="jp-play-bar"></div>
				</div>
			</div>
			<div class="jp-volume-controls">
				<button class="jp-mute" role="button" tabindex="0">mute</button>
				<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
			</div>
			<div class="jp-time-holder">
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
				<div class="jp-toggles">
					<button class="jp-repeat" role="button" tabindex="0">repeat</button>
				</div>
			</div>
		</div>
		<div class="jp-details">
			<div class="jp-title" aria-label="title">&nbsp;</div>
		</div>
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>
</body>

</html>
