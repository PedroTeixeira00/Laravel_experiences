@extends('master.main')


@section('content')

    @component('components.carrousel.carrousel', [
        'carrouselImages' => $carrouselImages
    ])
    @endcomponent

    @component('components.cards.cards')

    @endcomponent

    @component('components.textImage.textImage', [
        'textImages' => $textImages
    ])
    @endcomponent


@endsection
