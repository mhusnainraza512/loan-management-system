@extends('admin.layouts.master')

@section('title', 'Pages')

@section('sub_title', 'All Pages')

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
                <li class="breadcrumb-item"><a href="{{ route('page.index') }}">@yield('title')</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="float-md-right">
            <a href="{{ route('page.create') }}" class="btn btn-primary round btn-glow px-2 text-white">Add Page</a>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Scroll - horizontal table -->
        <section id="horizontal">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">All Pages</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <table class="table display nowrap table-striped table-bordered w-100" id="dtTable">
                      <thead class="w-100" style="width: 100%">
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Slug</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Created At</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if (!empty($pages))
                        @foreach ($pages as $page)
                            <tr>
                              <td class="align-middle">{{ $page->id ?? ''}}</td>
                              <td class="align-middle">{{ $page->title ?? ''}}</td>
                              <td class="align-middle">{{ $page->slug ?? ''}}</td>
                              <td class="align-middle">{{ $page->description ?? ''}}</td>
                              <td class="align-middle">
                                <img src="{{ $page->image ? asset($page->image) : '' }}" alt="{{ $page->image ?? '' }}" width="50">
                              </td>
                              <td class="align-middle">{{ $page->created_at->format('d-M-y') ?? ''}}</td>
                              <td class="align-middle">
                                @if($page->status!=1)
                                  <a href="{{ route('page.status', $page->id) }}" onclick="return confirm('Are you sure');"
                                    class="btn btn-danger btn-block">
                                    Approve	
                                  </a>	
                                @endif
                                @if($page->status==1)
                                  <a href="{{ route('page.status', $page->id) }}" onclick="return confirm('Are you sure');"
                                    class="btn btn-success btn-block">
                                    Reject	
                                  </a>
                                @endif
                              </td>
                              <td class="align-middle d-flex">
                                <a href="{{ route('page.edit', $page->id) }}" class="btn btn-info mx-1"><i class="la la-edit"></i></a>
                                <form action="{{ route('page.destroy', $page->id) }}" method="post">
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger"><i class="la la-trash"></i></button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
</div>
    
@endsection

@section('scripts')

<script>
   $.fn.dataTableExt.sErrMode = 'none';
   $('#dtTable').DataTable({
      sorting:false,
   })
</script>
    
@endsection
