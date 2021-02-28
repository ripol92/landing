<!-- Stay Tunned -->
<section class="section stay-tunned">
    <div class="container bring-to-front">
        <div class="shadow rounded p-5 bg-contrast overflow-hidden">
            <div class="section-heading text-center">
                <h2 class="heading-line">Будьте в курсе</h2>
                <p class="lead text-alternate">Регистрация у нас даст вам полный спектр маркетинговых услуг и новостей о нашей платформе</p>
            </div>

            <div class="mx-auto position-relative form-wrapper">
                <form action="/register" class="form text-center" data-response-message-animation="slide-in-left" novalidate>
                    @csrf
                    <div class="form-group">
                        <input id="subscribe-email" type="email" name="email" class="form-control form-control-lg text-center" placeholder="Введите вашу почту" required>
                    </div>

                    <button type="submit" class="btn btn-lg btn-alternate">Регистрация</button>
                </form>

                <div class="response-message">
                    <div class="text-center">
                        <i class="fas fa-envelope fa-3x text-success"></i>
                        <p class="font-md m-0">Проверьте вашу почту</p>
                        <p class="response">Успешно зарегистрированы</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
