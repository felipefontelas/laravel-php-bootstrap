
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <script src="/js/main.js" ></script>

</head>

<body>

<header>
    @include('layouts.nav')

    <div class="blog-header">
        <div class="container">
            <img src="http://static-carladiaz.gcampaner.com.br/wp-content/uploads/2015/10/outubro-rosa.png" class="blog-header__img">
            <h1 class="blog-title">Cancêr de Mama</h1>
            <p class="lead blog-description">Conscientização Outubro Rosa. Recomendações, dicas e adendos!</p>
        </div>
    </div>
</header>

<main role="main" class="container">

    <div class="container">
        @yield('content')
        @include('layouts.sidebar')
    </div>
<!-- /.blog-main -->


</main><!-- /.container -->

@include('layouts.footer')>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
