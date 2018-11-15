 
<!-- Modal Update User -->
    <div class="modal fade" id="ConatactdetailsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xs">
                <div class="modal-content">

<form class="update-form" method="POST" id="addnewForm" action="/contacts" enctype="multipart/form-data">

        {{ csrf_field() }}

        
                    <div class="modal-header">
                        <div class="col-md-6">
                            <div class="pull-center">Add New Contact</div>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right" data-dismiss="modal"><i class="fa fa-close"></i></div>
                        </div>
                    </div>
                   
                    <div class="modal-body">

                        <div class="container-fluid">
                            <div class="row">
                               @if( !$errors->isEmpty() )
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <ul>
                                        @foreach( $errors->all() as $error )
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                     <!-- INPUT GROUPS -->
                                           <div class="row">
                                                <div class="col-md-4">
                                                    <label>First name</label>
                                                     <input class="form-control" value="" placeholder="First Name" name="firstname" type="text" required="">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Last name</label>
                                                   <input class="form-control" value="" placeholder="Last name" name="lastname" type="text" required="">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Middle name</label>
                                                  <input class="form-control" value="" placeholder="Middle name" name="middlename" type="text">
                                                </div>
                                            </div>

                                            <br>


                                           <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email Address</label>
                                                    <input class="form-control" placeholder="Email Address" name="email" type="text" required="">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Phone number</label>
                                                    <input class="form-control" placeholder="Phone number" name="phonenumber" type="text" required="">
                                                </div>
                                            </div>

                                           

                                            <br>

                                    <!-- END INPUT GROUPS -->
                                </div>

                            </div>
                        </div>


                        
                        </div><!-- end modal body-->
                        
                        <div class="content-footer clearfix text-center">
                                    <button type="submit" class="btn btn-primary btn-md">&nbsp; &nbsp; &nbsp;SAVE CHANGES&nbsp;  &nbsp;</button>
                        </div>

                        
                    </form>

                            

                        <footer class="footer">
                            <div class="container">
                                <div class="content has-text-centered">
                                    <p>
                                        <strong></strong>  
                                    </p>
                        </footer>
                        </div><!-- end modal body-->
                        

            </div> <!-- end modal content-->

        </div> <!-- end modal dialog-->