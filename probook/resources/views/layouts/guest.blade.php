<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ProcrastinateBook</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/guest.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class= "content">
            <h1 class="text-uppercase mb-0">Start ProcrastinationBook</h1>
            <hr class="star-light">
            <h2 class="font-weight-strong mb-0">This is a safe place where everyone can come and see nothing but sunshine and rainbows.</h2>
            <h2> <-- TODO later --></h2>
            <h2> <-- figure out what to say along the lines of "procrastination is not bad for you"--></h2>

            <p> We got started by thinking of the idea that could have been revolutionary it was a social media site where all your friends and family can go to and see what their life and see what they were doing. </p>
            <p>Then we procrastinated a bit and that idea became Facebook... But it just proved our point that it was a revolutionary idea so we made ProcrastinationBook.</p>
            <p> <--TODO later --></p>
            <p> <--finish tragic backstory--></p>
            </div>
    </div>


        <div class="col-md-6">


            <div class="tab_container">
                <input id="tab1" type="radio" name="tabs" {{ old('tab') != 'register' ? 'checked' : '' }} class="radio_hidden">
                <label for="tab1" class="head"><i class="fa fa-user"></i><span>LOGIN</span></label>

                <input id="tab2" type="radio" name="tabs" {{ old('tab') == 'register' ? 'checked' : '' }} class="radio_hidden">
                <label for="tab2" class="head"><i class="fa fa-user-plus"></i><span>SIGN UP</span></label>

                <div class="contents">
                    <section id="content1" class="tab-content">

                        @include('auth.login')

                    </section>

                    <section id="content2" class="tab-content">
                        @include('auth.register')

                    </section>
                </div>
            </div>



        </div>

    </div>


    @include('widgets.footer')
</div>


<!-- Scripts -->
<script src="{{ asset('plugins/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
