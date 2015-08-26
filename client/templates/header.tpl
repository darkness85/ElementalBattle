<!DOCTYPE html>
<html>
<head>
	{if dirname($smarty.server.REQUEST_URI) ne '/'}<base href="http{if $smarty.server.HTTPS}s{/if}://{$smarty.server.HTTP_HOST}/">{/if}
	<link href="include/jqueryui/jquery-ui.min.css" rel="stylesheet">
	<link href="include/client.css" rel="stylesheet">
	<script src="include/hammer.min.js"></script>
	<script src="include/canvasengine-1.3.2.all.min.js"></script>
	<script src="include/jquery-1.11.3.min.js"></script>
	<script src="include/jqueryui/jquery-ui.min.js"></script>
	<script src="include/appCore.js"></script>
</head>


<body>