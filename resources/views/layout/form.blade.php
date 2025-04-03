<!DOCTYPE html>
<html lang="jp">
<head>
	<link rel="shortcut icon" sizes="16x16" href="img/icon/favicon.ico">
	<meta charset="UTF-8">
	<title>旅行事変投票フォーム</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

	<meta name="referrer" content="strict-origin-when-cross-origin">
	<meta name="robots" content="noindex">
	<meta property="og:title" content="旅行事変投票フォーム">
	<meta property="og:type" content="article">
	<meta property="og:site_name" content="Google Docs">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<meta property="og:image:width" content="200">
	<meta property="og:image:height" content="200">
	<meta property="og:ttl" content="604800">
	<meta http-equiv="Cache-Control" content="no-cache">
	
	<!--<link rel='stylesheet' href='css/bootstrap/css/bootstrap.min.css'>-->
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<!--<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>-->
	<!--<link rel="stylesheet" href="/css/style.css?2020090205">-->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <header>
           <div class="row">
                    <h1>旅行事変投票フォーム</h1>
            </div>
        </header>
    </div>

    <hr>
    
    <div class="container">
        @yield('content')
    </div>

    <hr>

    <div class="container">
        <footer>
            <!--<p>&copy; N.Shirae.</p>-->
        </footer>
    </div>
</body>
</html>