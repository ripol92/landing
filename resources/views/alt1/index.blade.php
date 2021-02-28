@extends('layouts.main')

@section('content')
    @include('alt1.sections.heading', [
        "shapes" => [
            [ "aos" => "fade-down-left", "duration" => 1500, "delay" => 100 ],
            [ "aos" => "fade-down", "duration" => 1000, "delay" => 100 ],
            [ "aos" => "fade-up-right", "duration" => 1000, "delay" => 200 ],
            [ "aos" => "fade-up", "duration" => 1000, "delay" => 200 ],
            [ "aos" => "fade-down-left", "duration" => 1000, "delay" => 100 ],
            [ "aos" => "fade-down-left", "duration" => 1000, "delay" => 100 ],
            [ "aos" => "zoom-in", "duration" => 1000, "delay" => 300 ],
            [ "aos" => "fade-down-right", "duration" => 500, "delay" => 200 ],
            [ "aos" => "fade-down-right", "duration" => 500, "delay" => 100 ],
            [ "aos" => "zoom-out", "duration" => 2000, "delay" => 500 ],
            [ "aos" => "fade-up-right", "duration" => 500, "delay" => 200 ],
            [ "aos" => "fade-down-left", "duration" => 500, "delay" => 100 ],
            [ "aos" => "fade-up", "duration" => 500, "delay" => 0 ],
            [ "aos" => "fade-down", "duration" => 500, "delay" => 0 ],
            [ "aos" => "fade-up-right", "duration" => 500, "delay" => 100 ],
            [ "aos" => "fade-down-left", "duration" => 500, "delay" => 0 ]
        ]])
    @include('alt1.sections.features', [
        "features" => [
            [ "icon" => "paint-bucket", "title" => "Подберите инфлюенсера",  "description" => "С помощью нашего удобного поиска по контенту и графику публикации инфлюенсера, найдите подходящего представителя" ],
            [ "icon" => "diamond",      "title" => "Вас здесь быстро найдут",   "description" => "Если вы блоггер, у вас много контента, то вы очень быстро найдёте рекламодателя у нас" ],
            [ "icon" => "light",        "title" => "Хотите раскрутить свой бренд",  "description" => "Наши партнёры предлагают консультации по любым сферам маркетинга, именно они помогут вам быстро раскрутиться" ]
    ]])
    @include('alt1.sections.proposal')

    @include('shared.powerful-features', [
        "cards" => [
            [ "class" => "mt-6 mt-6 mx-lg-auto", "icon" => "paint-bucket", "title" => "Блогеры", "animation" => [ "effect" => "fade-down", "delay" => "0" ], "description" => "Удобный поиск блогеров" ],
            [ "class" => "mx-lg-auto", "icon" => "light", "title" => "Маркетинговое агентство", "animation" => [ "effect" => "fade-down", "delay" => "800" ], "description" => "Наши партнёры помогут вам с любыми видами маркетинговых услуг" ],
            [ "class" => "mr-lg-auto", "icon" => "diamond", "title" => "Фрилансеры", "animation" => [ "effect" => "fade-down", "delay" => "500" ], "description" => "Нужно написать статью или нарисовать дизайн сайта? У нас вы можете найти подходящего человека" ],
            [ "class" => "mt-6n mr-lg-auto", "icon" => "cash", "title" => "Полиграфическое агентство", "animation" => [ "effect" => "fade-down", "delay" => "1200" ], "description" => "Креативный дизайн по вашим предпочтениям" ]
        ]
    ])
    @include('shared.design-blocks')
    @include('shared.features-cant-miss')
    @include('shared.integration', [
        "bubbles" => [
            [ "icon" => "apx", "name" => "Autoprefixer" ],
            [ "icon" => "bs", "name" => "Bootstrap" ],
            [ "icon" => "cordova", "name" => "Cordova" ],
            [ "icon" => "css", "name" => "CSS" ],
            [ "icon" => "fa", "name" => "Fontawesome" ],
            [ "icon" => "html", "name" => "HTML" ],
            [ "icon" => "js", "name" => "Javascript" ],
            [ "icon" => "npm", "name" => "Npm" ],

            [ "icon" => "sass", "name" => "SASS" ],
            [ "icon" => "apx", "name" => "Autoprefixer" ],
            [ "icon" => "bs", "name" => "Bootstrap" ],
            [ "icon" => "cordova", "name" => "Cordova" ],
            [ "icon" => "css", "name" => "CSS" ],
            [ "icon" => "fa", "name" => "Fontawesome" ],
            [ "icon" => "html", "name" => "HTML" ],
            [ "icon" => "js", "name" => "Javascript" ]
        ]
    ])
    @include('shared.why-us', [
        "features" => [
            [ "name" => "Интеграции", "icon" => "plug", "description" => "Интеграции с многими социальными сетями" ],
            [ "name" => "Маркетинг", "icon" => "heart", "description" => "Широкий спектр услуг маркетинга" ],
            [ "name" => "Поддержка", "icon" => "headphones", "description" => "Связь с нашими партнёрами 24/7" ]
        ]
    ])
    @include('shared.faqs', [
        "faqs" => [
            [ "question" => "Какие социальные сети вы охватываете", "answer" => "Мы планируем включить большую часть самых известных социальных сетей, для подробной статистики каждой публикации блогеров" ],
            [ "question" => "Кто ваши партнёры?", "answer" => "Мы отбираем самых успешных партнёров и заключаем с ними договорённость о предоставлении качественных услуг" ],
        ]
    ])
    @include('shared.subscribe')
@endsection

@section('footer')
    @include('includes.footer')
@endsection
