@extends('layouts.main')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('public/lib/images/bg.jpg')}}')">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h1 class="title h1-responsive introMessage animated infinite fadeInDown welcomeTitle" data-wow-delay="1s"><span class="orange">Fitness </span>Training</h1>
        <h4  class="wow animated infinite fadeInDown welcomeText h4-responsive" data-wow-delay="1.4s">We believe in the adage of building something that matters. Meeting the needs and wants of our clients is what we are passionate about. Our end product results in positive outcomes that make a difference..</h4>
        <br>
        <a href="contact-us.php" target="_blank" class="btn btn-danger btn-raised btn-lg intro-btn">
          <i class="fa fa-phone"></i> Join us now
        </a>
      </div>
    </div>
  </div>
</div>
<div class="main main-raised">
  <div class="container">
    <div class="section text-center section1">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <h2 class="title he-responsive">Home of Champion</h2>
          <p class="description intro intro introWelcome">We are committed to the creation  of next generation champions that gives our community proud</p>
        </div>
      </div>
      <div class="features">
        <div class="row">
          <div class="col-md-4">
            <div class="info serviceInfo">
              <div class="icon image">
<!--                  <i class="material-icons">create</i>-->
                  <img src="{{ asset('public/lib/images/weight-1.jpg')}}" alt="images with 300x300px will be here" class="img-responsive image-customer">
              </div>
              <h4 class="info-title serviceTitle h4-responsive"><span class="orange">Weight </span> Section</h4>
              <p  class="intro">Our websites are user friendly ensuring that each website is designed with the correct.</p>
              <button class="btn btn-primary btn-round btn-more">Read More</button>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info serviceInfo">
              <div class="icon image">
<!--                  <i class="material-icons">web</i>-->
                  <img src="{{ asset('public/lib/images/ladie-1.jpg')}}"  alt="images with 300x300px will be here" class="img-responsive image-customer">
              </div>
              <h4 class="info-title serviceTitle h4-responsive"><span class="orange">Ladies</span> Section</span></h4>
              <p class="intro">Our web applications are defined by the audience scope and created  easy to use.</p>
              <button class="btn btn-primary btn-round btn-more">Read More</button>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info serviceInfo">
              <div class="icon images">
<!--                  <i class="material-icons">desktop_windows</i>-->
                  <img src="{{ asset('public/lib/images/boxing-1.jpg')}}"  alt="images with 300x300px will be here" class="img-responsive image-customer">
              </div>
              <h4 class="info-title serviceTitle h4-responsive"><span class="orange">Boxing </span> Training</h4>
              <p class="intro">Our responsibility is to ensure that the entire life cycle of each of our projects.</p>
              <button class="btn btn-primary btn-round btn-more">Read More</button>
            </div>
          </div>
        </div>
      </div>
      <!-- time of Training or gallary -->
      <div class="features">
        <div class="row">
          <div class="col-md-4">
            <div class="info serviceInfo">
              <div class="icon image">
                  <img src="{{ asset('public/lib/images/20140823_15.jpg')}}" alt="images with 300x300px will be here" class="img-responsive image-customer">
              </div>
              <h4 class="info-title serviceTitle h4-responsive"><span class="orange">Amateur </span> Tournament</h4>
              <p  class="intro">Our websites are user friendly ensuring that each website is designed.</p>
              <button class="btn btn-primary btn-round btn-more">Read More</button>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info serviceInfo">
              <div class="icon image">
                  <img src="{{ asset('public/lib/images/alex.jpg')}}"  alt="images with 300x300px will be here" class="img-responsive image-customer">
              </div>
              <h4 class="info-title serviceTitle h4-responsive"><span class="orange">Men</span> Section</span></h4>
              <p class="intro">Our training section are defined by the audience scope .</p>
              <button class="btn btn-primary btn-round btn-more">Read More</button>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info serviceInfo">
              <div class="icon images">
                  <img src="{{ asset('public/lib/images/20140823.jpg')}}"  alt="images with 300x300px will be here" class="img-responsive image-customer">
              </div>
              <h4 class="info-title serviceTitle h4-responsive"><span class="orange">Boxing </span> Training</h4>
              <p class="intro">Our responsibility is to ensure that the entire life cycle of each of our projects.</p>
              <button class="btn btn-primary btn-round btn-more">Read More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div><!--end of main tags-->
@endsection
