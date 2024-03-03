<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home-page</title>
</head>
<body>
  @include('common/navigation',[
    'current_page' => $current_page
  ])
  
  @yield('content')
</body>
</html>