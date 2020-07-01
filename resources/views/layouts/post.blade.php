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
                <form method="POST" action="{{ route('post') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id ="title"autocomplete="off">

                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                            @error('content') 
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
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

@if (count($errors) > 0)
    <script type="text/javascript">
        $( document ).ready(function() {
            
             $('#staticBackdrop').modal('show');
        });
    </script>
@endif

