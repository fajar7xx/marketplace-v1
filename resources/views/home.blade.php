@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center row-cols-md-4">
        @foreach ($products as $product)
            <div class="col mb-4">
                <div class="card">
                    <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="#" class="btn btn-primary btn-sm float-right">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
