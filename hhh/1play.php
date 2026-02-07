<head>
<script src="https://jwpsrv.com/library/XpMfzFwiEeOfZhIxOQfUww.js" type="text/javascript"></script>
</head>
<script type="text/javascript">
        if(!FlashDetect.installed){
            alert("Flash is required to use this site.");
        }
</script>

<script>
function getParam ( sname )
{
  var params = location.search.substr(location.search.indexOf("?")+1);
  var sval =  params.replace("sv=", "");
  
  return sval;
}
var sv = getParam("sv");

</script>

<script>
  var responseText = ''+sv+'';
  urlArry = responseText.split(',');
  start = true;
  num_of_urlArry = urlArry.length;
  index_of_urlArry = 0;
</script>

<div class="col-sm-offset-4"><div id="HN-TV"></div>
<script type="text/javascript">
if( navigator.userAgent.match(/android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 != null) {
            var stream = ""+sv+"";
        }else{
            var stream = ""+sv+"";
        }
jwplayer("HN-TV").setup({
			"title"		: "BINODON TV",
			"stretching"	: "exactfit",
        		"width"		: "100%",
        		"height"	: "100%",
        		"skin"		: "vapor",
			"autostart"	: "true",
			"androidhls"	: "true",
			"mute"		: "false",
			"file"		: stream,
	
    });
		  
jwplayer("HN-TV").onError(function(){
jwplayer().load({file:"https://content.jwplatform.com/videos/7RtXk3vl-52qL9xLP.mp4",image:"https://content.jwplatform.com/thumbs/7RtXk3vl-480.jpg"});
	jwplayer().play();
});
jwplayer("HN-TV").onComplete(function(){
	window.location = window.location.href;
}); 	  
			  
jwplayer("HN-TV").onPlay(function(){
	clearTimeout(theTimeout);
});


</script>
