<!DOCTYPE html>
<html lang="en">
<head>
    <title>Make your image unique</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }


        #center_block
        {
            margin-top: 200px;
            margin-bottom: 50px;
        }


    </style>
</head>




<body>
<div class="container">

    <div class="header">
        <h3 class="text-muted"><i class="fa fa-picture-o" aria-hidden="true"></i> Make Your Image Unique <small>(beta)</small></h3>
    </div>


@yield('content')


</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="/js/fileform.js"></script>

<script language="JavaScript">

    $('input[type=file]').bootstrapFileInput();
    $('.file-inputs').bootstrapFileInput();

</script>

</body>
</html>