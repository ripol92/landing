<!-- Alternative 2 Heading -->
<header class="header alter2-header section" id="home">
    <div class="shapes-container">
        <!-- diagonal shapes -->
        @foreach ($shapes as $shape)
            <div class="shape shape-animated" data-aos="{{ $shape["aos"] }}" data-aos-duration="{{ $shape["duration"] }}" data-aos-delay="{{ $shape["delay"] }}"></div>
        @endforeach

        <!-- animated shapes -->
        <div class="animation-shape shape-ring animation--clockwise"></div>
        <div class="animation-shape shape-circle shape-circle-1 animation--anti-clockwise"></div>
        <div class="animation-shape shape-circle shape-circle-2 animation--clockwise"></div>
        <div class="animation-shape shape-heart animation--clockwise">
            <div class="animation--rotating"></div>
        </div>

        <div class="animation-shape shape-triangle animation--rotating-diagonal">
            <div class="animation--rotating"></div>
        </div>
        <div class="animation-shape shape-diamond animation--anti-clockwise">
            <div class="animation--rotating"></div>
        </div>

        <!-- static shapes -->
        <div class="static-shape shape-ring-1"></div>
        <div class="static-shape shape-ring-2"></div>

        <div class="static-shape shape-circle shape-circle-1">
            <div data-aos="fade-down-left"></div>
        </div>

        <div class="static-shape shape-circle shape-circle-2">
            <div data-aos="fade-down-left" data-aos-delay="500"></div>
        </div>

        <div class="static-shape pattern-dots-1"></div>
        <div class="static-shape pattern-dots-2"></div>

        <!-- main shape -->
        <div class="static-shape background-shape-main"></div>

        <!-- ghost shapes -->
        <div class="static-shape ghost-shape ghost-shape-1"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span class="rounded-pill shadow-box bg-contrast text-dark bold py-2 px-4">
                    <i class="far fa-lightbulb text-primary mr-2"></i>
                    <span class="text-primary">Awesome</span> Landing Page
                </span>

                <h1 class="display-4 display-md-2 mt-3"><span class="bold">{{ config('app.name') }}</span></h1>
                <p class="lead bold text-primary">Premium Startup & <span class="head-line-2">App Landing Page</span></p>

                <p class="lead">Besides its beautiful design. {{ config('app.name') }} is an incredibly rich core framework for you to showcase your App.</p>

                <nav class="nav my-5">
                    <a href="#!" class="btn btn-rounded btn-alternate mr-2 mr-md-5">Know more <i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                    <a href="#demos" class="btn btn-rounded btn-outline-alternate scrollto">Free trial</a>
                </nav>
            </div>

            <div class="col-md-6">
                <div class="iphone front mx-auto">
                    <div class="screen shadow-box">
                        <img src="{{ asset("img/screens/app/3.png") }}" alt="...">
                    </div>
                    <div class="notch"></div>
                </div>
            </div>
        </div>
    </div>
</header>
