<div class="container">
    <div class="row">

        @foreach($textImages as $textImage)

            @if($loop->even)

                <div class="col-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores eum fugiat nam nemo quidem sint voluptas. Amet, et ex exercitationem explicabo iste minus, porro quasi quod quos saepe temporibus.</p>
                </div>

                <div class="col-6">
                    <img class="w-100" src="{{$textImage}}" alt="">
                </div>


            @else

                <div class="col-6">
                    <img class="w-100" src="{{$textImage}}" alt="">
                </div>
                <div class="col-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores eum fugiat nam nemo quidem sint voluptas. Amet, et ex exercitationem explicabo iste minus, porro quasi quod quos saepe temporibus.</p>
                </div>

            @endif

        @endforeach

    </div>
</div>
