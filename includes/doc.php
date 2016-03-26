<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!--begin meta-->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />

<!--styles-->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,600|Bitter:400,400italic,700" rel="stylesheet" type="text/css"/>  <!--google font-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css"/>  <!--flexslider css-->
<link rel="stylesheet" href="css/styles.css" type="text/css" media="all"/>

<!--scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>  <!--flexslider js-->
<script>
	$(document).ready(function() {
		$('.flexslider').flexslider();
		$("#toggle").click(function() {
			$("#navigation").toggle();
		});
	});
</script>
