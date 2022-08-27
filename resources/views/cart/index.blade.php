@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="card">
        <div class="card-header">
            Products in Cart
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData["products"] as $product)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getName() }}</td>
                            <td>{{ $product->getPrice() }}</td>
                            <td>{{ session('products')[$product->getId()] }}</td>
                            <td>{{ $product->getPrice()*session('products')[$product->getId()] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="text-end">
                    <a class="btn btn-outline-secondary mb-2"><b>Total do pay: $ {{ $viewData["total"] }}</b></a>
                    @if (count($viewData["products"]) > 0)
                        <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Purchase</a>
                        <a href="{{ route('cart.delete') }}">
                            <button class="btn btn-danger mb-2">
                                Remove all products from Cart
                            </button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection