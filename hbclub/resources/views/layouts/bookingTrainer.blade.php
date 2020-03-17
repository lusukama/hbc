@extends('layouts.main')
@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('public/lib/images/bg-trainer.jpg')}}')">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h1 class="title h1-responsive introMessage animated infinite fadeInDown welcomeTitle" data-wow-delay="1s"><span class="orange">Fitness </span>Training</h1>
        <h4  class="wow animated infinite fadeInDown welcomeText h4-responsive" data-wow-delay="1.4s">We believe in the adage of building something that matters. Meeting the needs and wants of our clients is what we are passionate about. Our end product results in positive outcomes that make a difference..</h4>
        <br>
        <a href="contact-us.php" target="_blank" class="btn btn-danger btn-raised btn-lg intro-btn">
          <i class="fa fa-phone"></i> Book Now A Trainer
        </a>
      </div>
    </div>
  </div>
</div>
<div class="main main-raised">
  <div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="section-bg">
         <h2>Who We Are</h2>
         <p class="intro">
         We are a boxing club based in johannesburg Hillbrow .Established in 2004 by <strong>George Khosi</strong>, who was a former boxer at <a href="http://www.rgit.co.za/" target="_blank" class="richfield" title="go to richfield website">South African Association Boxing</a> with National Diploma in IT Systems Development.  <strong> Selianord Group</strong> pride itself on a winning combination of cutting edge technical skills, fresh creative, innovative talent and intricate of knowledge of the digital technology environment. We take pleasure in learning new things and view each project as an opportunity to expand our knowledge.
         </p>
      </div>
  </div>
  <div class="col-md-4">
    <h3 class="h3-responsive">Coach George Khosi and Boxers</h3>
    <img src="{{ asset('public/lib/images/20140823_15.jpg')}}" alt="Coach George Khosi  nathalie andrew welcome">
  </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="section-bg">
       <h2>Our Commitment</h2>
       <p class="intro">Meeting the needs and wants of our clients is what we are committed about. Our end product results in positive outcomes that make a difference.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="section-bg">
       <h2>Our Vision</h2>
       <p class="intro">Our vision remains the same clients need and want first at all cost. In doing so, we realize that technology trends move fast and we need to keep up with the trends.
       </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="section-bg">
       <h2>Our Achievements</h2>
       <p class="intro">Our vision remains the same clients need and want first at all cost. In doing so, we realize that technology trends move fast and we need to keep up with the trends.
       </p>
      </div>
    </div>
  </div>
  </div>
</div><!--end of main tags-->
@endsection
