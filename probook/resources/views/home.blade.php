@extends('layouts.app')

@section('content')
    <div class="h-20"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('widgets.sidebar')
            </div>
            <div class="col-md-6">
                @include('widgets.wall')
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script type="text/javascript">
        WALL_ACTIVE = true;
        fetchPost(0,0,0,10,-1,-1,'initialize');
    </script>
@endsection