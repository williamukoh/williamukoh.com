<?php
function getURL(){

  $url = "";

  if( isset( $_GET['utm_source'] ) && !empty( $_GET['utm_source'] ) ){

    switch( $_GET['utm_campaign'] ){

    case "Contact Details":
      $url = "http://goo.gl/3469LZ";
      break;
    default:
      $url = "http://twitter.com/williamukoh";
    }

  }else{
    $url = "http://twitter.com/williamukoh";
  }

  return $url;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>williamukoh.com</title>
<meta name="google-site-verification" content="5JXRa8MWPTK7Ld4skrEczp9GmPLV74UjKUqowttjSP0" />
<style type="text/css">
.hidden { display:none; height:1px; visibility:hidden; }
</style>
<noscript>
<meta http-equiv="refresh" content=2;url=<?php echo getURL(); ?>" />
</noscript>
</head>
<body>
	<!-- <div class="hidden">
		<h1>About William Ukoh</h1>
		<p>Chemical Engineer by academic qualification. RIA, User Interface and Interaction Design enthusiast focusing on technologies that provide great user experiences</p>
	</div> -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-602563-34']);
  _gaq.push(['_setDomainName', '.williamukoh.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

	setTimeout(function(){
    window.location.href = "<?php echo getURL(); ?>";
	},2000);
  })();

</script>
</body>
</html>