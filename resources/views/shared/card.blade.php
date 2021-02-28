
<div data-aos="{{ $card["animation"]["effect"] }}" data-aos-delay="{{ $card["animation"]["delay"] }}">
    <div class="card border-0 shadow mb-5 tilt">
        <div class="card-body py-5 px-4">
            <div class="icon-box rounded-circle gradient gradient-primary-light text-contrast shadow icon-xl mb-3">
                <i class="icon m-0 pe pe-7s-{{ $card["icon"] }} pe-3x"></i>
            </div>

            <h4 class="bold mb-5">{{ $card["title"] }}</h4>

            <p class="text-muted lead">{{ $card["description"] }}</p>
        </div>
    </div>
</div>
