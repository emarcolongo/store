@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
    <div class="mb-4">
        <div class="card">
            <div class="card-header">
                Edit Product
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <ul class="alert alert-danger list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>-{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form action="{{ route('admin.product.update',['id'=>$viewData['product']->getId()]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input type="text" name="name" id="name" value="{{ $viewData['product']->getName() }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 row">
                                <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input type="text" name="price" id="price" value="{{ $viewData['product']->getPrice() }}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 row">
                                <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            &nbsp;
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="description" rows="3" class="form-control">{{ $viewData['product']->getDescription() }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="bi-save2"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection