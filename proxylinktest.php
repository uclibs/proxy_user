<!doctype html>
<html>
	<?php $path2 = $_SERVER['DOCUMENT_ROOT'];
include($path2. "/libs/templates/main_generic.php"); 
?>
<link href="/libs/styles/allpages.css" rel="stylesheet" type="text/css" />
<link href="/libs/styles/forms.css" rel="stylesheet" type="text/css" />
<?php 
//start the page
echo $top;?>

<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	

<script language="javascript">

<!--//--><![CDATA[// ><!--

function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}

 
	function makeLink() { 
	var oin=document.frm.intext; 
	var oout=document.frm.outtext; 
	var intxt=oin.value; 
	if(intxt.length==0) { 
	oin.focus(); 
	alert("No URL entered!"); 
	} 
	
	else { 
	var prep="https://proxy.libraries.uc.edu/login?url="; 
	var rc=intxt.indexOf('https://proxy.libraries.uc.edu/login?url=') 
	var rd=intxt.indexOf('.proxy.libraries.uc.edu') 
	var wellFormedHttp=intxt.indexOf('http://') 
	var wellFormedHttps=intxt.indexOf('https://') 
	if(wellFormedHttp=='0'||wellFormedHttps=='0'){ 
	//alert("Matched http://"+wellFormed); 
	//} 
	if(rc==-1) { 
	if(rd==-1){ 
	oout.value=prep+intxt; 
	oout.focus(); 
	oout.select(); 
	} 
	else{ 
	alert("That is a translated EzProxy URL and shouldn't be used. Click OK to fix"); 
	intxt = intxt.replace(/.proxy.libraries.uc.edu/g,"") 
	oout.value=prep+intxt; 
	oin.focus(); 
	oin.select(); 
	} 
	} 
	else { 
	alert("That is already an EzProxy prefixed URL, so no change is needed"); 
	oout.value=""; 
	oin.focus(); 
	oin.select(); 
	} 
	} 
	else{ 
	alert("The URL source URL doesn't start with http:// or https:// or contains multiple entries, please enter a valid URL like https://someaddress.com"); 
	oout.value=""; 
	oin.focus(); 
	oin.select(); 
	} 
	} 
	
	} 
	
//--><!]]>

</script>
	
<h1> Proxy link generator</h1>
	<p>Have a link to a library electronic resource and want to ensure it works both on and off campus? Use our Proxy Link Generator! </p>
	<p>It will add the proxy server's referring URL (http://proxy.westernu.edu/login?url=) to the beginning of a link, ensuring off-campus access works correctly. </p>
	<ul>
      <li>The link must be a stable, persistent link as opposed to a dynamic URL which includes session information (usually "session" or "sid" in the URL) that will expire and can't be reused (see Finding Stable Links tab).
      </li>
      <li>Sites that have dynamic URLs usually have a link for a "permalink" or "jumpstart" URL.
      </li>
      <li>You do not need to add the proxy to freely available sites or links that already contain http://proxy.westernu.edu/login?url=.... </li>
    </ul>
	<hr>
    <form name="frm" id="frm">
1.<strong> Copy and paste your source URL here:</strong>
<p><textarea aria-label="Source URL" cols="60" name="intext" rows="5"></textarea><br />
 </p>
<p>2<strong>. Click the Create Link button:</strong>
  <input onclick="makeLink();" type="button" value="Create Link" class="btn">
  </p>
<p><br />
  3.<strong> Copy, use, and share this result link:</strong><br>
  
</p>
<p><textarea aria-label="Resulting Link" cols="60" name="outtext" rows="5"  id="myInput"></textarea>
  <br>
  <br>
 
  <button class="btn" onclick="myFunction()">Copy link to Clipboard</button> <i>(Click this button to copy the url to your clipboard)</i>
<br></p>
<p>&nbsp;</p>
<p>  <br />
  <input type="reset" value="Clear Form" />
</p>
<h3>&nbsp;</h3>

</form>


<?php echo $bottom;?>
</body>
</html>