@section('title', 'Eventos')

@section('content')
    <section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url(images/bg_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
        <div class="overlay js-fullheight"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 mt-0 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Eventos</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-section-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="event-entry d-flex ftco-animate">
                        <div class="meta mr-4">
                            <p>
                                <span>07</span>
                                <span>Aug 2018</span>
                            </p>
                        </div>
                        <div class="text">
                            <h3 class="mb-2"><a href="events.html">Saturday's Bible Reading</a></h3>
                            <p class="mb-4"><span>9:00am at 456 NC USA</span></p>
                            <a href="events.html" class="img mb-4" style="background-image: url(images/event-1.jpg);"></a>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="event-entry d-flex ftco-animate">
                        <div class="meta mr-4">
                            <p>
                                <span>07</span>
                                <span>Aug 2018</span>
                            </p>
                        </div>
                        <div class="text">
                            <h3 class="mb-2"><a href="events.html">Saturday's Bible Reading</a></h3>
                            <p class="mb-4"><span>9:00am at 456 NC USA</span></p>
                            <a href="events.html" class="img mb-4" style="background-image: url(images/event-2.jpg);"></a>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="event-entry d-flex ftco-animate">
                        <div class="meta mr-4">
                            <p>
                                <span>07</span>
                                <span>Aug 2018</span>
                            </p>
                        </div>
                        <div class="text">
                            <h3 class="mb-2"><a href="events.html">Saturday's Bible Reading</a></h3>
                            <p class="mb-4"><span>9:00am at 456 NC USA</span></p>
                            <a href="events.html" class="img mb-4" style="background-image: url(images/event-3.jpg);"></a>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="event-entry d-flex ftco-animate">
                        <div class="meta mr-4">
                            <p>
                                <span>07</span>
                                <span>Aug 2018</span>
                            </p>
                        </div>
                        <div class="text">
                            <h3 class="mb-2"><a href="events.html">Saturday's Bible Reading</a></h3>
                            <p class="mb-4"><span>9:00am at 456 NC USA</span></p>
                            <a href="events.html" class="img mb-4" style="background-image: url(images/event-4.jpg);"></a>
                            A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')