@extends("layouts.frontend")

@section("title")
  {{ config("app.name")}} | Homepage
@endsection

@section("slider")
  @includeIf("layouts.slider")
@endsection

@section("main_content")
    <!-- about area end -->
    <div class="about-area pd-top-100 pd-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="section-title mb-lg-0">
                        <h2 class="title">Comfort and <br>Elegance</h2>
                        <p>Owning a property with us improves your quality of life and gives you peace of mind. Experience real comfort and safety in our fully furnished, roomy bungalows, keeping in mind that your perimeter and general areas of your interior are under 24/7 CCTV surveillance. Enjoy a treated water system, a central sewage system, and uninterrupted electricity. Get absorbed in the picturesque landscape as you drive through the boulevard or saunter along the paved walkways.</p>
                        <a class="btn-view-all-2" href="#">Learn More <i class="la la-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <a class="cat-single text-center" href="#">
                                <i class="fa fa-bed"></i>
                                <p>03 Bed</p>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <a class="cat-single text-center" href="#">
                                <i class="fa fa-bath"></i>
                                <p>03 Bathroom</p>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <a class="cat-single text-center" href="#">
                                <img src="assets/img/icons/14.png" alt="icons">
                                <p>01 Kitchen</p>
                            </a>
                        </div>
                        
                        <div class="col-md-4 col-sm-6">
                            <a class="cat-single text-center" href="#">
                                <img src="assets/img/icons/16.png" alt="icons">
                                <p>300 m2</p>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <a class="cat-single text-center" href="#">
                                <i class="fa fa-car"></i>
                                <p>01 Parking</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- apartments area start -->
    <div class="apartments-area bg-gray pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="apartments-slider-2">
                <div class="item">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="thumb">
                                <img src="/assets/img/hom.png" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-end">
                            <div class="details">
                                <span>01</span>
                                <h6>Special Features</h6>
                                <h2 class="title">Room Dimensions</h2>
                                <p> Each of our bungalows cover a total dimension of 300 square metres. With luxurious en-suite bedrooms and an airy living room and kitchen area, you are sure to maximise space and avoid clutter. </p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="rld-list-style mb-3 mb-sm-0">
                                            <li><i class="fa fa-check"></i> Full Furnished</li>
                                            <li><i class="fa fa-check"></i> 24/7 CCTV Surveillance</li>
                                            <li><i class="fa fa-check"></i> Uninterrupted power</li>
                                            <li><i class="fa fa-check"></i> Treated water system </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="rld-list-style">
                                            <li><i class="fa fa-check"></i>Central sewage system </li>
                                            <li><i class="fa fa-check"></i> Ease of access  </li>
                                            <li><i class="fa fa-check"></i> Defined drive </li>
                                            <li><i class="fa fa-check"></i> Paved sidewalks </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
               
            </div>
            <div class="ap2-slider-controls">
                <!--slider-nav-->
                <div class="rld-slider-extra slider-extra">
                    <div class="text">
                        <span class="first">01 </span>
                        <span class="last"></span>
                    </div>
                    <!--text-->
                    <div class="ap2-list-progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                        <span class="slider__label sr-only"></span>
                    </div>
                    <div class="slider-nav rld-control-nav"></div>
                </div>
                <!--slider-extra-->
            </div>
        </div>
    </div>
    <!-- apartments area end -->

    <!-- call to action area start -->
    <div class="call-to-action-area pd-top-100">
        <div class="container">
            <div class="call-to-action style-two" style="background-image: url(/assets/img/afford.png);">
                <div class="cta-content">
                    <h3 class="title">Contact With Our Property Agent</h3>
                    <a class="btn btn-white mb-2 mb-sm-0 mr-2" href="/contact-us">Make a Call</a>
                    <a class="btn btn-white mb-2 mb-sm-0 mr-xl-3 mr-0" href="/property">Get a Property</a>
                </div>
            </div>
        </div>
    </div>
    <!-- call to action area end -->

    <!-- gallery area start -->
    <div class="gallery-area pd-top-92">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Photo Gallery</h2>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="gallery-thumb">
                        <img src="/assets/img/gal1.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="gallery-thumb">
                        <img src="/assets/img/gal2.png" alt="img">
                    </div>
                    <div class="row">   
                        <div class="col-sm-7">  
                            <div class="gallery-thumb">
                                <img src="/assets/img/gal3.png" alt="img">
                            </div>    
                        </div>
                        <div class="col-sm-5">  
                            <div class="gallery-thumb">
                                <img src="/assets/img/gal4.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery area start -->

    <!-- floor-plan area start -->
    <div class="floor-plan-area pd-top-70 pd-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 align-self-center">
                    <div class="section-title mb-lg-0 mb-2">
                        <h2 class="title">Affordable Luxury</h2>
                        <p>With top-notch furnishing and finishing, each unit is superbly designed to accommodate your style. While luxurious homes are what we offer, acquiring one from us is far from a tall order. </p>
                        <div class="floor-list">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-floor-list media">
                                        <div class="media-left">
                                            <i class="fa fa-bed"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6>Living Room</h6>
                                            <p>20 x 16 sq feet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-floor-list media">
                                        <div class="media-left">
                                            <i class="fa fa-car"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6>Garage</h6>
                                            <p>20 x 16 sq feet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-floor-list media">
                                        <div class="media-left">
                                            <img src="assets/img/icons/7.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <h6>Dining Area</h6>
                                            <p>20 x 16 sq feet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-floor-list media">
                                        <div class="media-left">
                                            <i class="fa fa-bed"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6>Bedroom</h6>
                                            <p>20 x 16 sq feet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="single-floor-list media">
                                        <div class="media-left">
                                            <i class="fa fa-bath"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6>Bathroom</h6>
                                            <p>20 x 16 sq feet</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 align-self-center">
                    <img src="/assets/img/afford.png" alt="img">
                </div>
            </div>
        </div>
    </div>

    <!-- Properties area start -->
    <div class="properties-area pd-bottom-70">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Available Apartments</h2>
                <a class="btn-view-all" href="/property">View All</a>
            </div>
            <div class="row">
            @foreach($datas as $data)
                <div class="col-lg-3 col-sm-6">
                    <div class="single-feature">
                        <div class="thumb">
                            <img src="{{ $data->featured_thumbnail }}" alt="img">
                            <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                        <div class="details">
                            <a href="#" class="feature-logo">
                                <img src="/assets/img/icons/l3.png" alt="icons">
                            </a>
                            <h6 class="title"><a href="#">{{ $data->name }}</a></h6>
                            <h6 class="price"><span>&#8358;</span>{{ number_format($data->price) }}/unit</h6>
                            <ul class="info-list">
                                <li><i class="fa fa-bed"></i> {{ $data->keypoint->bedroom }} Bed</li>
                                <li><i class="fa fa-bath"></i> {{ $data->keypoint->bathroom }} Bath</li>
                                <li><img src="/assets/img/icons/7.png" alt="img"> {{ $data->keypoint->area }} sqm.</li>
                            </ul>
                            <ul class="contact-list">
                                <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                <li><a class="btn btn-yellow" href="#">View Details</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach


            </div>
        </div>
    </div>

    <div class="why-choose-us-area bg-gray pd-top-90 pd-bottom-60">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="title">Why Choose Us</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-intro text-lg-left text-center">
                        <div class="thumb">
                            <img src="assets/img/icons/12.png" alt="img">
                        </div>
                        <div class="details">
                            <h4 class="title"><a href="#">Affordability and Flexibility of Payment</a></h4>
                            <p>While we offer premium service, our properties are relatively affordable. Whether you subscribe to an instalment or mortgage, our payment plans are quite flexible and easy to fulfil.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 offset-xl-1">
                    <div class="single-intro text-lg-left text-center">
                        <div class="thumb">
                           <img src="assets/img/icons/11.png" alt="img">
                            
                        </div>
                        <div class="details">
                            <h4 class="title"><a href="#">Certificate of Occupancy</a></h4>
                            <p>Our estates have a certificate of occupancy and other cogent documents backed by the state’s authority. This eliminates concerns that border on government’s forceful reacquisition.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 offset-xl-1">
                    <div class="single-intro text-lg-left text-center">
                        <div class="thumb">
                            <img src="assets/img/icons/13.png" alt="img">
                        </div>
                        <div class="details">
                            <h4 class="title"><a href="#">Guaranteed Security</a></h4>
                            <p>Your safety is assured, each minute of each day. Our real-time monitored state-of-the-art security system provides surveillance for your perimeter and select areas of your interior.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- client area start -->
     <div class="client-area pd-top-92 pd-bottom-100">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="title">Our Partner</h2>
            </div>
            <div class="client-slider">
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/pat1.png" alt="client">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/pat2.png" alt="client">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client area end -->

@endsection