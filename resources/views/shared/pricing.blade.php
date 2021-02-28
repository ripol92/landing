<!-- Pricing -->
<section class="section pricing-plans" id="pricing">
    <div class="shapes-container overflow-clear">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="shape shape-4"></div>

        <i class="icon pe pe-7s-cash pe-3x" data-aos="fade-down"></i>
        <i class="icon fas fa-dollar-sign fa-3x" data-aos="fade-up"></i>
        <i class="icon pe pe-7s-piggy pe-3x" data-aos="fade-up"></i>
        <i class="icon pe pe-7s-cart pe-3x" data-aos="fade-left"></i>
        <i class="icon far fa-credit-card fa-3x" data-aos="fade-down"></i>
        <i class="icon far fa-money-bill-alt fa-3x" data-aos="fade-up"></i>
    </div>

    <div class="container">
        <div class="section-heading text-center">
            <span class="rounded-pill shadow-box bold py-2 px-4">
                <i class="far fa-lightbulb text-primary mr-2"></i>
                <span class="text-primary">Save more</span> with these awesome plans
            </span>
            <h2 class="mt-3 heading-line">Transparent pricing</h2>
            <p class="lead text-muted">Our plans have everything you need to take your app to the next level. <span class="highlight">No hidden fees.</span></p>

            <div id="pricing-basis-options" class="btn-group btn-group-toggle mt-5" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="pricing-basis" value="monthly" checked> Monthly
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="pricing-basis" value="yearly"> Yearly
                </label>
            </div>
        </div>

        <div class="row no-gutters align-items-center pricing-plans-options">
            @foreach ($plans as $plan)
                @php ($isBestPlan = isset($plan["best"]) && $plan["best"])
            <div class="col-lg-4 pricing-plan plan-{{ $plan["name"] }} {{ isset($plan["class"]) ? $plan["class"] : "" }} {{ $isBestPlan ? "best-value" : "" }}">
                <div class="p-5 {{ $isBestPlan ? "py-md-6" : "" }}">
                    <div class="text-center">
                        <h4 class="text-{{ $isBestPlan ? "primary" : "alternate" }} bold text-capitalize">{{ $plan["name"] }}</h4>
                        <p>{{ $plan["desc"] }}</p>

                        <div class="pricing-details"><span class="pricing-value"><span class="odometer price" data-monthly="{{ $plan["price"]["monthly"] }}" data-yearly="{{ $plan["price"]["yearly"] }}">{{ $plan["price"]["monthly"] }}</span></span></div>
                        <a href="#!" class="more-link btn btn-{{ $isBestPlan ? "alternate" :"outline-alternate" }} mb-3">I want this</a>
                    </div>

                    <hr>

                    {{-- Desktop View --}}
                    <div class="d-none d-md-flex">
                        <ul class="list-group list-group-flush list-group-no-border">
                            <li class="list-group-item">Lorem ipsum dolor sit amet</li>
                            <li class="list-group-item">Dicta doloremque</li>
                            <li class="list-group-item">Consectetur fuga inventore</li>
                            <li class="list-group-item">Alias animi, assumenda atque</li>
                            <li class="list-group-item">Accusamus adipisci aspernatur</li>
                        </ul>
                    </div>

                    {{-- Mobile View --}}
                    <div class="d-md-none">
                        <button type="button" class="more-link btn btn-link d-flex align-items-center mx-auto" data-toggle="modal" data-target="#basic-plan-modal-{{ $plan["name"] }}">
                            View plan details
                        </button>

                        <div class="modal" id="basic-plan-modal-{{ $plan["name"] }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title bold text-capitalize">{{ $plan["name"] }} plan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body plan-features">
                                        <ul class="list-group list-group-flush text-center">
                                            <li class="list-group-item border-top-0">Lorem ipsum dolor sit amet</li>
                                            <li class="list-group-item">Dicta doloremque</li>
                                            <li class="list-group-item">Consectetur fuga inventore</li>
                                            <li class="list-group-item">Alias animi, assumenda atque</li>
                                            <li class="list-group-item">Accusamus adipisci aspernatur</li>
                                            <li class="list-group-item">Delectus earum iste nobis</li>
                                            <li class="list-group-item">Accusamus alias amet at</li>
                                            <li class="list-group-item">Accusamus alias aliquid</li>
                                            <li class="list-group-item">Animi blanditiis eveniet</li>
                                            <li class="list-group-item">Ab aliquid amet consequatur</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container pt-0 border-bottom">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="text-center text-md-left">
                    <h4 class="bold accent">Not sure what's better for you?</h4>
                    <p class="mt-0">You can start for free, as long as you fell in love with our App you can decide what plan better suites your needs. <span class="italic dotted">By picking any of the pay plans you'll get 30 days free trial.</span></p>
                </div>
            </div>

            <div class="col-md-4 text-center text-md-right">
                <a href="#!" class="btn btn-primary btn-lg text-contrast p-4 more-link ml-md-auto">Try it now !</a>
            </div>
        </div>
    </div>
</section>
