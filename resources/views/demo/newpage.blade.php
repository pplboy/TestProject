<!DOCTYPE html>
<html>
<head>
    <title>Froala Design Blocks - Footers</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />

    <script src="http://localhost:35729/livereload.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link type="text/css" rel="stylesheet" href="{{asset('css/froala_blocks.css')}}">

    <style>
        .fdb-block {
            border-bottom: solid 1px #EEE;
        }
    </style>
</head>
<body>


    <nav class="navbar navbar-expand-md no-gutters">
        <div class="col-3 text-left">
            <a href="https://www.froala.com">
                <img src="{{asset('imgs/img_logo.png')}}" height="30" alt="image">
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse-2" aria-controls="navbarNav7" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-collapse-2 justify-content-center col-md-6" id="navbarNav7">
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item active">
                    <a class="nav-link" href="https://www.froala.com">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.froala.com">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.froala.com">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.froala.com">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.froala.com">Contact</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse navbar-collapse-2">
            <ul class="navbar-nav ml-auto justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.froala.com">Log In</a>
                </li>
            </ul>

            <a class="btn ml-md-3" href="https://www.froala.com">Register</a>
        </div>
    </nav>
    <section class="fdb-block" style="background-image: url({{asset('imgs/bg_c_2.svg')}});">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-md-9 col-lg-8">
                    <div class="fdb-box fdb-touch">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <h1>这是一个测试</h1>
                                <p class="text-h3">使用这一套块元素快速的开展一个 laravel项目是个不错的</p>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <div class="col-12 col-lg-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your email address">
                                    <span class="input-group-btn">
                    <button class="btn" type="button">Submit</button>
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-6">

            <section class="fdb-block" style="background-image: {{asset('imgs/bg_3.svg')}}">
                <div class="container">
                    <div class="fdb-box">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-10 col-sm-6 col-md-4 col-lg-3 col-xl-2 m-auto">
                                <img alt="image" class="img-fluid" src="{{asset('imgs/img_round.svg')}}"/>
                            </div>

                            <div class="col-12 col-md-8 ml-auto mr-auto mt-4 mt-md-0">
                                <p class="text-h3">
                                    "Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar."
                                </p>

                                <p class="text-h3 mt-4 mt-lg-5"><strong>Person Name</strong></p>
                                <p><em>Co-founder at Company</em></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>


    </div>


    <section class="fdb-block">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>Pricing</h1>
                </div>
            </div>

            <div class="row mt-5 align-items-center">
                <div class="col-12 col-sm-10 col-md-8 col-md-8 m-auto col-lg-4 text-center">
                    <div class="bg-dark pb-5 pt-5 pl-3 pr-3 br">
                        <h2 class="font-weight-light">Hobby</h2>
                        <p class="text-h2"><strong>$9 / month</strong></p>
                        <p class="text-h3">Even the all-powerful Pointing has no control about the blind texts.</p>

                        <ul class="text-left mt-5 mb-5">
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                        </ul>

                        <p><a href="https://www.froala.com" class="btn mt-4">这是一个测试</a></p>
                    </div>
                </div>

                <div class="col-12 col-sm-10 col-md-8 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0">
                    <div class="bg-dark pb-5 pt-5 pl-3 pr-3 fdb-touch br">
                        <h2 class="font-weight-light">Professional</h2>
                        <p class="text-h2"><strong>$19 / month</strong></p>
                        <p class="text-h3">Far far away, behind the word mountains, far from the countries.</p>

                        <ul class="text-left mt-5 mb-5">
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                        </ul>

                        <p><a href="https://www.froala.com" class="btn mt-4">这是一个测试</a></p>
                    </div>
                </div>

                <div class="col-12 col-sm-10 col-md-8 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0">
                    <div class="bg-dark pb-5 pt-5 pl-3 pr-3 br">
                        <h2 class="font-weight-light">Business</h2>
                        <p class="text-h2"><strong>$49 / month</strong></p>
                        <p class="text-h3">Wild Question Marks, but the Little Blind Text didn’t listen.</p>

                        <ul class="text-left mt-5 mb-5">
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                        </ul>

                        <p><a href="https://www.froala.com" class="btn mt-4">Subscribe</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>





<footer class="fdb-block footer-large bg-dark">
    <div class="container">
        <div class="row align-items-top text-center text-md-left">
            <div class="col-12 col-sm-6 col-md-4">
                <h3><strong>Country A</strong></h3>
                <p>Street Address 52<br>Contact Name</p>
                <p>+44 827 312 5002</p>
                <p><a href="https://www.froala.com">countrya@amazing.com</a></p>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-4 mt-sm-0">
                <h3><strong>Country B111</strong></h3>
                <p>Street Address 100<br>Contact Name</p>
                <p>+13 827 312 5002</p>
                <p><a href="https://www.froala.com">countryb@amazing.com</a></p>
            </div>

            <div class="col-12 col-md-4 mt-5 mt-md-0 text-md-left">
                <h3><strong>About Us</strong></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col text-center">
                &copy; 2017 Froala. All Rights Reserved
            </div>
        </div>
    </div>
</footer>

</body>
</html>