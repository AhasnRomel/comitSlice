@extends('frontend.layouts.app')

@section('main-content')

@include('frontend.home.slider')

<section>
    <div class="container">
        <div class="row">

        @include('frontend.layouts.sidebar.productsidebar')

        @include('frontend.products.product')

    </div>
</div>
<!-- end of container-->
</section>
@endsection
