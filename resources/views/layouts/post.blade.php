<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Post a Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/post" method="POST">
                    {{-- <div class="form-group">
                        <label for="exampleFormControlInput1">Categories</label>
                    <select class="form-control">
                        <option>Categories</option>
                    </select>
                    </div> --}}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text" class="form-control" name="title" autocomplete="off">
                        @error('title') {{$message}}@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea class="form-control" name="content" rows="3"></textarea>
                        @error('content') {{$message}}@enderror
                    </div>
                    @csrf
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">POST</button>
                </div>
            </form>
        </div>
    </div>
</div>
