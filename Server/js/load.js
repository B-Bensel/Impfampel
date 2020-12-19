var kabine = 1;

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
		postMessage(kabine+"|"+this.responseText);
		if (kabine == 16) {
			kabine = 1;
			setTimeout("loadDoc()",3000);
		} else {
			kabine = kabine + 1;
			setTimeout("loadDoc()",100);
		}
    }
  };
  xhttp.open("GET", "../update.php?ik="+kabine, true);
  xhttp.send();
}

loadDoc();
