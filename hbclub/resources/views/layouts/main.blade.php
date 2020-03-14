<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon"  href="images/favicon.png">
  <link rel="icon" type="image/png" href="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Hillbrow Boxing Club | Home
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="web development Digital Marketing Social Media Marketing Agency Affordable web development Affordable Digital Marketing, Affordable Social media Marketing">
    <meta  name="description" content="We build and develop fully customized e-commerce  stores  We also offer the services of maintaining websites">
    <meta name="keywords" content="is our core specialty Building websites for the internet and also building private networks">
    <meta name="keywords" content="We design logos with a view to name and functions of an organization. Our uniquely designed logos set organizations apart from others.">
    <meta name="description" content="Our main focus is web development, digital marketing, social media marketing and branding.. We help grow businesses by taking them to the next level through unique online promotions">
    <meta name="description" content="Our strength is incorporating the taste of our clients into latest website designs that will appeal to web visitors. All our designs work across all platforms - desktop, mobile, tablets">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">-->
  <!-- CSS Files -->
  <link href="{{ asset('public/lib/css/material-kit.min.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('public/lib/css/animate.css')}}">
  <!-- custom css here -->
  <link rel="stylesheet" href="{{ asset('public/lib/css/customerStyle.css')}}">
  <link rel="stylesheet" href="{{ asset('public/lib/css/custom-font-face.css')}}" />
</head>

<body class="landing-page sidebar-collapse">
  @include('layouts.navbar')
  @yield('content')

 @include('layouts.footer')
  <!--   Core JS Files   -->
  <script src="{{ asset('public/lib/js/jquery.min.js')}}"></script>
  <script src="{{ asset('public/lib/js/popper.min.js')}}"></script>
  <script src="{{ asset('public/lib/js/bootstrap-material-design.min.js')}}"></script>
  <script src="{{ asset('public/lib/js/plugin/material-kit.js')}}"></script>
</body>

</html>
