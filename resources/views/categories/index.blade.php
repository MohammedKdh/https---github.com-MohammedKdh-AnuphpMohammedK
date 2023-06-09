@extends('admin.dashboard')
@section('DynamicContent')
<div class="card">
    <div class="card-header">
        <h3 class="text-dark">Categories Table</h3>
        <div class="row">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        </div>

    </div>
    <div class="card-body">
        <div class="row justify-content-center my-3">
            <a href="" class="btn btn-small btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add new Ctegory</a>
        </div>
        <div class="row">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category name</th>
                        <th>Category description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    ?>
                    @foreach ($categories as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td><a href="" class="btn btn-success"  data-bs-toggle="modal" data-bs-target=Edit-modal {{$item->id}}">edit</a>
                            <a href="" class="btn btn-danger">delete</a></td>
                        @include('categories.editmodel')
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add new Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('Category.store')}}" method="post">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <lable class="form-lable">Category Name</lable>
                        <input type="text" class="form-control" name="Catname">
                    </div>
                    <div class="col-6">
                        lable class="form-lable">Category Description</lable>
                        <textarea id="" cols="30" class="form-control" name="CatDesc"></textarea>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save Category</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection
