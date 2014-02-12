phpAjax - Simple jQuery Plugin for Ajax and PHP
=======



Those who were searching for ajax listening to php. This will be a basic plugin to that.
Example:
Download jquery libraryin www.jquery.com
include phpAjax.js
Sample implemetation

	$(document).ready(function(){
		$("form").phpAjax({
			"url":"controller.php",     // php file path
			"method": "get",            // form method (post , get)
			"result": "#result",        // result container
			"successNote" : "Success!",   // note if the request is success
			"errorNote" : "Error!"   // note if the request is success
		});
	})

