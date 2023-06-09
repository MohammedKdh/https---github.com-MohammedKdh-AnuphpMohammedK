<div class="modal fade" id="Edit-modal {{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('Category.update')}}" method="post">
            @csrf
            @method('put')
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <lable class="form-lable">Category Name</lable>
                        <input type="text" class="form-control" name="Catname" value="{{$item->name}}">
                    </div>
                    <div class="col-6">
                        lable class="form-lable">Category Description</lable>
                        <textarea id="" cols="30" class="form-control" name="CatDesc" >{{$item->name}}</textarea>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update Category</button>
            </div>
        </form>
      </div>
    </div>
  </div>
