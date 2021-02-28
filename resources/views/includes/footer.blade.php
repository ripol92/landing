<!-- Footer -->
<footer class="site-footer section bg-dark text-contrast edge top-left">
    <div class="container py-3">
        <div class="row gap-y text-center text-md-left">
            <div class="col-md-4 mr-auto">
                <img src="{{ asset("img/logo-light.png") }}" alt="" class="logo">

                <p>{{ config("app.name") }}, создан для удобства и связи рекламодателя и инфлюенсера</p>
            </div>

            <div class="col-md-2">
                <nav class="nav flex-column">
                    <a class="nav-item py-2 text-contrast" href="#">О нас</a>
                    <a class="nav-item py-2 text-contrast" href="#">Услуги</a>
                    <a class="nav-item py-2 text-contrast" href="#">Блогеры</a>
                </nav>
            </div>

            <div class="col-md-2">
                <nav class="nav flex-column">
                    <a class="nav-item py-2 text-contrast" href="#">Фичи</a>
                    <a class="nav-item py-2 text-contrast" href="#">API</a>
                    <a class="nav-item py-2 text-contrast" href="#">Клиенты</a>
                </nav>
            </div>

            <div class="col-md-2">
                <h6 class="py-2 small">Follow us</h6>

                <nav class="nav justify-content-around">
                    <a href="https://#" target="_blank" class="btn btn-circle btn-sm brand-facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="btn btn-circle btn-sm brand-twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-circle btn-sm brand-instagram"><i class="fab fa-instagram"></i></a>
                </nav>
            </div>
        </div>

        <hr class="mt-5 op-5" />
        <div class="row small">
            <div class="col-md-4">
                <p class="mt-2 mb-0 text-center text-md-left">© 2021 <a href="https://5studios.net">BlogRace</a></p>
            </div>
        </div>
    </div>
</footer>
