<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="public/styles.css">
    </head>
    <body>
        <div id="header">
            @yield('header')
            <h1>投稿一覧</h1>
        </div><!-- header -->
        <div id="main">
            @yield('content')
        </div><!-- main -->
    </body>
</html>
