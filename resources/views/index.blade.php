<!DOCTYPE html>
<head>
    <title>Lifestyle Store</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/index.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="{{ url('index') }}">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('signup') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="banner-image">
            <div class="container">
            <center>
                <div class="banner_content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p> 
                    <a href="{{ url('products') }}" class="btn btn-danger
                    btn-lg active">Shop Now</a>  
                </div>
            </center>
            </div>
             
        </div>
        <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" ><div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>
    
                    <div class="col-sm-4">
                        <a href="products.php#watches" ><div class="thumbnail">
                                <img src="img/7.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>
    
                    <div class="col-sm-4">
                        <a href="products.php#shirts" ><div class="thumbnail">
                                <img src="img/8.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <footer>
            <div class="container">
                <center>
                 <p>Copyright © Lifestyle Store. All Rights
                Reserved | Contact Us: +91 90000 00000”. </p>
                </center>	
            </div>    
        </footer>
</body>
    </html>