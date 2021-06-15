@extends('admin.layouts.master')

@section('title', 'Sliders')

@section('sub_title', 'Update Slider')

@section('content')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">@yield('title')</h3>
            <div class="row breadcrumbs-top d-inline-block">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{ route('slides.index') }}">@yield('title')</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
      </div>
      <div class="content-body">
        
        <!-- Grid With Label start -->
        <section class="grid-with-label" id="grid-with-label">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-content collapse show">
                  <div class="card-body">
                    <h2 class="text-center my-1">Update Slider</h2>
                    <form action="{{ route('slides.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                     @method('PUT')
                     <div class="form-body">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Entet Title</label>
                              <input type="text" name="title" class="form-control" value="{{ $slider->title }}" placeholder="Title">
                              @if ($errors->has('title'))
                                @foreach ($errors->get('title') as $error)
                                  <span class="text-danger">{{ $error }}</span>
                                @endforeach
                              @endif
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Enter Description</label>
                              <textarea type="text" rows="10" name="description" class="form-control" placeholder="Description...">{{ $slider->description }}</textarea>
                            </div>
                          </div>
                          <div class="col-md-12">
                              <img src="{{ asset($slider->image) ?? '' }}" alt="" width="150">
                          </div>
                          <div class="col-md-12">
                            <fieldset class="form-group">
                              <label>Choose Image</label>
                              <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                @if ($errors->has('image'))
                                  @foreach ($errors->get('image') as $error)
                                    <span class="text-danger">{{ $error }}</span>
                                  @endforeach
                                @endif
                              </div>
                            </fieldset>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <div class="text-left">
                          <button type="submit" class="btn btn-primary">Update <i class="ft-thumbs-up position-left"></i></button>
                          <button type="reset" class="btn btn-warning">Reset <i class="ft-refresh-cw position-left"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Grid With Label end -->
      </div>
    </div>
  </div>
@endsection
