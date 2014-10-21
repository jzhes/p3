<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Developer\'s Best Friend')</title>
	<meta charset='utf-8'>
	
	<link rel='stylesheet' href='css/main.css' type='text/css'>
	
	@yield('head')
	
</head>
	<body>
		<h1>Developer's Best Friend</h1>
		@yield('content')
	</body>
</html>	