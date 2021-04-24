@extends('master')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ml-auto">
     
        <li class="nav-item">
            <a class="nav-link text-white"> Welcome: {{ ucfirst(Auth()->user()->first_name) }} </a>
        </li>

        <li>
      <a class="nav-link" href="{{ url('list') }}"> List </a>
      </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ url('logout') }}"> Logout </a>
        </li>
      </ul>
    </div>
  </nav>
  <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/p.css')}}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Goggle Font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>

	<!-- Font Css -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Animation Css -->
	<link rel="stylesheet" href="css/animate.css">

</head>
<body>
	<div id="homeFullScreen">
		<div class="header-text">
    
    <div id="message" class="mg"></div>
		</div>
        <div class="container">
        <h2> Add Product</h2>
            <div class="product">
            <form action="product" method="GET">
                <input  type="text" name="p_id" placeholder="Enter Product name" />
                <br><br><input  type="text" name="p_name" placeholder="Enter Product Price" />
                <br><br><input  type="text" name="p_quantity" placeholder="Enter Quantity" />
                <br><br><button type="submit">Save</button>
            </form>
            </div>
        </div>
	</div>



<!-- Main JS -->
<script type="text/javascript" src="js/jquery-main.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Animation JS -->
<script type="text/javascript" src="js/wow.min.js"></script>

<!-- Custom JS -->
<script type="text/javascript" src="js/custom.js"></script>


</body>
</html>

@endsection
