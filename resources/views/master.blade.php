<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Comm Project</title>

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

        {{View::make('header')}}

        @yield('content')

        {{View::make('footer')}}

</body>
<style>
    .custommer-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 300px !important;
    }
    .custom-product{
        height: 600px;
    }
    .slide-text{
        text-shadow: 0 1px 2px rgb(0 0 0 / 60%);
        background-color: #57615a52;
    }
    .trending-image{
        height: 150px;
    }
    .trending-image:hover{
      -moz-box-shadow: 0 0 10px #ccc;
      -webkit-box-shadow: 0 0 5px #ccc;
      box-shadow: 0 0 10px #ccc;
    }
    .cartlist-image{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 16%;
    }
    .trending-wrapper{
        margin: 30px;
        margin-left:80px;
    }
    .detail-img{
        height: 300px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .product-name{
        margin-left: 30px;
    }
    .search-box{
        width: 500px !important;
    }
    .cart-list-devider
    {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
</style>
<script>

</script>
</html>
