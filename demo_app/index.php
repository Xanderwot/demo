<?php
header("Content-Type: text/html;charset=windows-1251");
if ( stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 6.0') )
{print "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>\n";}
elseif ( stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0') )
{print "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>\n"; }
elseif ( stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') )
{print "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>\n"; }
elseif ( stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0') )
{print "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>\n"; }
elseif ( stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.0') )
{print "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>\n"; }
?>
<html>

<head>
  <title>ОАО "Гомельский завод теплоизолированных труб"</title>
  <link rel="stylesheet" type="text/css" href="css/custom.css" />
  <script type="text/javascript">
  	function getPosition() {  		var a = document.getElementById("current");
  		window.scrollTo(0, a.offsetTop);  	}
  </script>
</head>

<body>
<div id="page">
<?php
$link = $_GET["link"].".html";
if (! file_exists($link)) {
	$link = "home.html"; }
include_once("logo_page.html");
include_once("menu_page.html");
print "<div id='content'>";
include($link);
print "</div>";
include_once("footer.html");
?>
</div>
</body>

</html>