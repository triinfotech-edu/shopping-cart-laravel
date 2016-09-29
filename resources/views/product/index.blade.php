@extends('layouts.main')

@section('title')
	My Home Page
@endsection


@section('content')
  @foreach ($productsValues->chunk(4) as $productChunk)
    <div class="row">
    @foreach ($productChunk as $product)
      <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
          <img src="{{ $product->image_path }}" alt="...">
          <div class="caption clearfix">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}
            <p>
            	<div class="pull-left">
            		<i class="fa fa-rupee fa-2x"></i>
            		<span class="rupee">{{ $product->price }}</span>
            	</div>
            	<a href="#" class="btn btn-success pull-right" role="button">Button</a>
        	</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
  @endforeach
@endsection