<meta http-equiv="refresh" content="400">
<meta name="referrer" content="no-referrer">
<meta name="robots" content="noindex">
<body>
</body>
<script>
var domain = 'trendlavida.com';
var time = Date.now();
if(window.location.host != domain) {
    window.location.href = "https://" + domain + "/pixel1.php?t=" + time;
}

setTimeout(function() {
	try {
		document.getElementById("player").remove();
	} catch(ex){}
	window.location.href = "https://" + domain + "/pixel1.php?t=" + time
}, 300*1000);

function createFrame1(url, id) {
    var iframe = document.createElement('iframe');
	iframe.src = url;
	iframe.id = id;
    document.body.appendChild(iframe);
}

function createFrame(videoId, el, autoplay, cc, id) {
	var iframe = document.createElement('iframe');
	iframe.src = 'https://www.google.com/url?sa=D&q=https%3A%2F%2Fwww.youtube.com%2Fembed%2F'+ videoId +'%3Fenablejsapi%3D0%26autoplay%3d'+ autoplay + '%26mute%3d1%26el%26showinfo%3D0%26playsinline%3D0%26modestbranding%3D0%26rel%3D0%26loop%3D0%26cc_load_policy%3D' + cc +'%26origin%3D*';
	iframe.id = id;
	iframe.style.height="1px";
	iframe.style.width="1px";
	document.body.appendChild(iframe);
}
</script>

