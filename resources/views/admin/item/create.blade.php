@extends('layouts.app')

@section('title','Item')

@push('css')


@endpush

@section('content')

<div class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
   @include('layouts.include.message')
    </div>
  
      <div class="card">
         <div class="card-header" data-background-color="purple">
             <h4 class="title">Add New Item</h4>
         </div>
        <div class="card-content">
         <form method="post" action="{{route('item.store')}}" enctype="multipart/form-data">
          @csrf
           <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Category Name</label>
                 <select class="form-control" name="category">
                   <?php foreach ($categories as  $category): ?>

                    <option value="{{$category->id}}">{{$category->name}}</option>
                     
                   <?php endforeach ?>
                 </select>
                </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Item Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
            </div>
          </div>

           <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Description</label>
                  <textarea class="form-control" name="description"></textarea>
                </div>
            </div>
          </div>

           <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Price</label>
                  <input type="number" class="form-control" name="price">
                </div>
            </div>
          </div>

           <div class="row">
              <div class="col-md-12">
                <label class="bmd-label-floating">Item Image</label>
                <input type="file" name="image">
            </div>
          </div>


          <a href="{{route('item.index')}}" class="btn btn-danger">Back</a>
           <button type="submite" class="btn btn-primary">Save</button>
         </form>
        </div>
      </div>
    </div>
   
  </div>
</div>
</div>


@endsection

@push('scripts')
    
@endpush