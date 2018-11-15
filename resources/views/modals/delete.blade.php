
<!-- Modal Delete User -->
<div class="modal fade" id="DeleteContactModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xs errror-modal">
        <div class="modal-content delete-modal">
            <div class="modal-header errror-header">
                     <div class="pull-left text-error">Delete</div>
                    <div class="pull-right text-error" data-dismiss="modal"><i class="fa fa-close"></i></div>
            </div>
            <div class="modal-body ">

                    <div class="row">

                         <p class="text-center disable-modal">Are you sure you want to delete this contact ?</p>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">CANCEL</button>
                <form method="POST" action="/delete/" id="deleteForm" class="pull-right">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-simple">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->