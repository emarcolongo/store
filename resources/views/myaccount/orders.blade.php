@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    @forelse ($viewData["orders"] as $order)
        <div class="card mb-4">
            <div class="card-header">
                Order #{{ $order->getId() }}
            </div>
        </div>
        <div class="card-body">
            <b>Date:</b> {{ $order->getCreatedAt() }}</br>
            <b>Total:</b> $ {{ $order->getTotal()  }}</br>
            <table class="table table-bordered table-striped text-center mt-3">
                <thead>
                    <th scope="col">Item Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </thead>
                <tbody>
                    @foreach ($order->getItems() as $item)
                        <tr>
                            <td>{{ $item->getId() }}</td>
                            <td>
                                <a href="{{ route('product.show', ['id'=>$item->getProduct()->getId()]) }}" class="link-success">{{ $item->getProduct()->getName() }}</a>
                            </td>
                            <td>$ {{ $item->getPrice() }}</td>
                            <td>{{ $item->getQuantity() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @empty
        
        <div class="alert alert-danger" role="alert">
            Seems to be that you have not purchased anything in our store =(
        </div>
    @endforelse
@endsection