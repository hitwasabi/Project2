@extends('layouts.admin_base')

@section('content')
    <h1 style="">Add product</h1>
    <form action="{{url('admin/product/index')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Product_Id</label>
            <input class="form-control" name="productId">
        </div>
        <div class="mb-3">
            <label class="form-label">Image_URL</label>
            <input class="form-control" name="url">
        </div>
        <div class="mb-3">
            <label class="form-label">Category_Name</label>
            <input class="form-control" name="cateName">
        </div>
        <div class="mb-3">
            <label class="form-label">Product_Name</label>
            <input class="form-control" name="productName">
        </div>
        <div class="mb-3">
            <label class="form-label">Product_Price</label>
            <input class="form-control" name="Prices">
        </div>
        <div class="mb-3">
            <label class="form-label">Product_Code</label>
            <input class="form-control" name="productCode">
        </div>
        <div class="mb-3">
            <label class="form-label">Product_Info</label>
            <input class="form-control" name="productInfo">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
