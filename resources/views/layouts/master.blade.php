<!DOCTYPE html>
<html>

<head>
  <title>RuConsulting24</title>
  <!--meta-->
  <link rel="stylesheet" href="assets/css/main.css" type="text/css" />
  <link rel="stylesheet" href="assets/materialize/css/materialize.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/css/landio.css" type="text/css" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>
