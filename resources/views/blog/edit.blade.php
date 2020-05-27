
@extends('layout')

@section('dashboard-content')
<h1>Update Blog Post</h1>

@if(Session::get('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert" id="gone">
        <strong>{{Session::get('success')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

@endif

@if(Session::get('failed'))


    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
        <strong> {{Session::get('failed')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

@endif

    <form action="{{URL::to('update-blog-post')}}/{{$blogPost->id}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Blog Title</label>
  <input type="text" value="{{$blogPost->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Blog Title" name="blogTitle">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Blog Details</label>
    <textarea name="blogDetails" value="" class="form-control" id="editor1" cols="30" rows="10">{{$blogPost->details}}</textarea>
  </div>

  <div class="form-group">
    <label for="selCat">Select Category</label>
    <select class="form-control" name="category" id="selCat">

        @foreach ($categories as $category)
        <option value="{{$category->id}}" @if ($category->id==$blogPost->category_id) selected @endif>{{$category->name}}</option>
        @endforeach
    </select>
  </div>

  <div>
      <label for="">Select featured photo</label>
      <input type="file" name="featuredPhoto" class="form-control" onchange="loadPhoto(event)">
  </div>

  <div>
      <img src="" id="photo" height="100" alt="">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>

<script>
    function loadPhoto(event){
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('photo');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
@stop
