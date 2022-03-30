<div class="container pt-5">
    <div class="row">
        <div class="col-4">
            @component('components.card.card',
                [
                    'image'       => 'https://images.unsplash.com/photo-1585684306031-83cefa838196?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
                    'title'       => 'Image 1',
                    'description' => 'desc1 ',
                ])
            @endcomponent
        </div>

        <div class="col-4">
            @component('components.card.card',
            [
            'image'       => 'https://images.unsplash.com/photo-1585684306031-83cefa838196?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
            'title'       => 'Image 2',
            'description' => 'Desc 2',
            ])
            @endcomponent
        </div>

        <div class="col-4">
            @component('components.card.card',
            [
            'image'       => 'https://images.unsplash.com/photo-1585684306031-83cefa838196?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
            'title'       => 'Image 3',
            'description' => 'Desc 3',
            ])
            @endcomponent
        </div>
    </div>
</div>
