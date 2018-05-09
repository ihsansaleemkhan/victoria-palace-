@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.header')
<div class="wrapper">
    <!-- searchbar Start -->
    <!-- search bar End -->
    <!--About Section Title start-->
    <div class="about-section text-center ptb-80 white_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb-80">
                        <h2>About <span>Victoria Palace</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--About Section end-->
    <!--Our Room start-->
    <div class="our-room text-center ptb-80 white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb-75">
                        <h2>our <span>Rooms</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                    </div>
                </div>
            </div>
            <div class="our-room-show">
                <div class="row">
                    <div class="carousel-list">
                        <div class="col-md-4">
                            <div class="single-room">                                    <div class="room-img img-scale-room">
                                    <a href="#"><img src="{{asset('frontend/images/room/room1.jpg')}}" alt=""></a>
                                </div>
                                <div class="room-desc">
                                    <div class="room-name">
                                        <h3><a href="#">Delux room</a></h3>
                                    </div>
                                    <div class="room-rent">
                                        <h5>15,000 LKR / <span>Night</span></h5>
                                    </div>
                                    <div class="room-book">                                            <a href="booking-room.html">Book now</a>                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-room">                                    <div class="room-img img-scale-room">
                                    <a href="#"><img src="{{asset('frontend/images/room/room2.jpg')}}" alt=""></a>
                                </div>
                                <div class="room-desc">
                                    <div class="room-name">
                                        <h3><a href="#">Delux room</a></h3>
                                    </div>
                                    <div class="room-rent">
                                        <h5>15,000 LKR / <span>Night</span></h5>
                                    </div>
                                    <div class="room-book">                                            <a href="booking-room.html">Book now</a>                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-room">                                    <div class="room-img img-scale-room">
                                    <a href="#"><img src="{{asset('frontend/images/room/room3.jpg')}}" alt=""></a>
                                </div>
                                <div class="room-desc">
                                    <div class="room-name">
                                        <h3><a href="#">Delux room</a></h3>
                                    </div>
                                    <div class="room-rent">
                                        <h5>15,000 LKR / <span>Night</span></h5>
                                    </div>
                                    <div class="room-book">                                            <a href="booking-room.html">Book now</a>                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-room">                                    <div class="room-img img-scale-room">
                                    <a href="#"><img src="{{asset('frontend/images/room/room4.jpg')}}" alt=""></a>
                                </div>
                                <div class="room-desc">
                                    <div class="room-name">
                                        <h3><a href="#">Delux room</a></h3>
                                    </div>
                                    <div class="room-rent">
                                        <h5>15,000 LKR / <span>Night</span></h5>
                                    </div>
                                    <div class="room-book">                                            <a href="booking-room.html">Book now</a>                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single-room">                                    <div class="room-img img-scale-room">
                                    <a href="#"><img src="{{asset('frontend/images/room/room6.jpg')}}" alt=""></a>
                                </div>
                                <div class="room-desc">
                                    <div class="room-name">
                                        <h3><a href="#">Delux room</a></h3>
                                    </div>
                                    <div class="room-rent">
                                        <h5>15,000 LKR / <span>Night</span></h5>
                                    </div>
                                    <div class="room-book">                                            <a href="booking-room.html">Book now</a>                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-room">                                    <div class="room-img img-scale-room">
                                    <a href="#"><img src="{{asset('frontend/images/room/room7.jpg')}}" alt=""></a>
                                </div>
                                <div class="room-desc">
                                    <div class="room-name">
                                        <h3><a href="#">Delux room</a></h3>
                                    </div>
                                    <div class="room-rent">
                                        <h5>15,000 LKR / <span>Night</span></h5>
                                    </div>
                                    <div class="room-book">                                            <a href="booking-room.html">Book now</a>                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-room">                                    <div class="room-img img-scale-room">
                                    <a href="#"><img src="{{asset('frontend/images/room/room8.jpg')}}" alt=""></a>
                                </div>
                                <div class="room-desc">
                                    <div class="room-name">
                                        <h3><a href="#">Delux room</a></h3>
                                    </div>
                                    <div class="room-rent">
                                        <h5>15,000 LKR / <span>Night</span></h5>
                                    </div>
                                    <div class="room-book">                                            <a href="booking-room.html">Book now</a>                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Our room end-->
    <!--Our services start-->
    <div class="our-sevices text-center ptb-80 white_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb-80">
                        <h2>our <span>services</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-services-list">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <div class="services-img">
                                <img src="{{asset('frontend/images/services/services1.jpeg')}}" alt="">
                                <div class="services-title">
                                    <h2>Breakfast & Buffet</h2>
                                </div>
                                <div class="services-hover-desc">
                                    <div class="services-hover-inner">
                                        <div class="services-hover-table">
                                            <div class="services-hover-table-cell">
                                                <h2>Breakfast & Buffet</h2>
                                                <p>There are many variations of passages Loem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <div class="services-img">
                                <img src="{{asset('frontend/images/services/services2.jpg')}}" alt="">
                                <div class="services-title">
                                    <h2>Towels and bedding</h2>
                                </div>
                                <div class="services-hover-desc">
                                    <div class="services-hover-inner">
                                        <div class="services-hover-table">
                                            <div class="services-hover-table-cell">
                                                <h2>Breakfast & Buffet</h2>
                                                <p>There are many variations of passages Loem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <div class="services-img">
                                <img src="{{asset('frontend/images/services/services3.jpg')}}" alt="">
                                <div class="services-title">
                                    <h2>24/7 Reception</h2>
                                </div>
                                <div class="services-hover-desc">
                                    <div class="services-hover-inner">
                                        <div class="services-hover-table">
                                            <div class="services-hover-table-cell">
                                                <h2>24/7 Reception</h2>
                                                <p>There are many variations of passages Loem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <div class="services-img">
                                <img src="{{asset('frontend/images/services/services4.jpg')}}" alt="">
                                <div class="services-title">
                                    <h2>City Tours</h2>
                                </div>
                                <div class="services-hover-desc">
                                    <div class="services-hover-inner">
                                        <div class="services-hover-table">
                                            <div class="services-hover-table-cell">
                                                <h2>City Tourst</h2>
                                                <p>There are many variations of passages Loem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Our services end-->

    <!--Testimonial start-->
    <!--Testimonial end-->
    <!--Our gallery start-->
    <div class="our-gallery text-center ptb-80 white_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb-80">
                        <h2>our <span>Gallery</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-gallery-photo">
            <div class="single-gallery">
                <img src="{{asset('frontend/images/gallery/g-1.jpg')}}" alt="">
            </div>
            <div class="single-gallery">
                <img src="{{asset('frontend/images/gallery/g-2.jpg')}}" alt="">
            </div>
            <div class="single-gallery">
                <img src="{{asset('frontend/images/gallery/g-3.jpg')}}" alt="">
            </div>
            <div class="single-gallery">
                <img src="{{asset('frontend/images/gallery/g-4.jpg')}}" alt="">
            </div>
            <div class="single-gallery">
                <img src="{{asset('frontend/images/gallery/g-5.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <!--Our gallery end-->
</div>
    @include('frontend.layout.footer')
@endsection

