<!-- FAQs -->
<section class="section faqs-dd bg-light edge top-left">
    <div class="shapes-container">
        <div class="absolute icon" data-aos="fade-down-left">
            <i class="fas fa-question"></i>
        </div>
    </div>

    <div class="container">
        <div class="section-heading text-center">
            <h2 class="heading-line">Часто задаваемые вопросы</h2>
            <p class="lead">Хотите больше узнать о нашем сервисе?</p>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-lg-auto">
                @foreach ($faqs as $faq)
                <div data-aos="fade-up">
                    <div class="card shadow-box shadow-hover mb-3">
                        <div class="card-header py-3">
                            <a href="#" class="card-title collapsed" data-toggle="collapse" data-target="#v1-q{{ $loop->index }}">{{ $faq["question"] }}</a>
                        </div>

                        <div id="v1-q{{ $loop->index }}" class="collapse card-body">
                            {{ $faq["answer"] }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
