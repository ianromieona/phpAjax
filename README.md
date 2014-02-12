phpAjax
=======

Simple jQuery Plugin for Ajax and PHP
=====================================
Those who were searching for ajax listening to php. This will be a basic plugin to that.
Example:
<script src="jquery.js"></script>
<script src="phpAjax.js"></script>
<script>
	$("form").phpAjax({
		"url":"controller.php",     // php file path
		"method": "get",            // form method (post , get)
		"result": "#result",        // result container
		"successNote" : "Success!",   // note if the request is success
		"errorNote" : "Error!"   // note if the request is success
	});
</script>
