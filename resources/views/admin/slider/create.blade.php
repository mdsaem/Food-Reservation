@extends('layouts.app')

@section('title','Dashboard')

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
             <h4 class="title">Add New Slider</h4>
         </div>
        <div class="card-content">
         <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Title</label>
                  <input type="text" class="form-control" name="title">
                </div>
            </div>
          </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Sub Title</label>
                  <input type="text" class="form-control" name="sub_title">
                </div>
            </div>
          </div>

            <div class="row">
              <div class="col-md-12">
                <label class="bmd-label-floating">Slider Image</label>
                <input type="file" name="image">
            </div>
          </div>
          <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
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