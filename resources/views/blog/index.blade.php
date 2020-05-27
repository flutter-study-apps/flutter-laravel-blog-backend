@extends('layout')

@section('dashboard-content')

@if(Session::get('deleted'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="gone">
        <strong>{{Session::get('deleted')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
@endif
@if(Session::get('delete-fail'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="gone">
        <strong>{{Session::get('delete-fail')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
@endif


<div class="card mb-4">
  <div class="card-header"><i class="fas fa-table mr-1"></i>All Blog</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Blog Title</th>
            <th>Details</th>
            <th>Featured Image</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Blog Title</th>
            <th>Details</th>
            <th>Featured Image</th>
            <th>Actions</th>
          </tr>
        </tfoot>
        <tbody>


          @foreach ($blogPosts as $blogPost)

          <tr>
            <td>{{ $blogPost->title}} </td>
            <td>{{ $blogPost->details}} </td>
            <td><img src="{{$blogPost->featured_image_url}}" height="50px" alt=""></td>
            <td>
                <a href="{{URL::to('edit-blogPost')}}/{{$blogPost->id}}" class="btn btn-outline-primary btn-sm">Edit</a>
                |
                <a href="{{URL::to('delete-blogPost')}}/{{$blogPost->id}}" class="btn btn-outline-danger btn-sm" onclick="checkDelete()">Delete</a>
            </td>

          </tr>
          @endforeach



        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
    function checkDelete(){
        var check = confirm('Are you sure you want to Delete this?');
        if(check){
            return true;
        }
        return false;
    }
</script>

<script>
    function checkDelete(){
        var check = confirm('Are you sure you want to Delete this?');
        if(check){
            return true;
        }
        return false;
    }
</script>

@endsection
