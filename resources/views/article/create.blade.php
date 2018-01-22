@extends ('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @include('article.partials.errors')
            <div class="col-xs-12 panel">
                <div class="panel-heading" style="font-size: 25px;">Créer un nouvel article</div>
                @include('article.partials.form' ,['item' => $article])
            </div>
        </div>
    </div>
@endsection

