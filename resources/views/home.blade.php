@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <p class="panel-heading">
                              Phonebook 
                              <button  class="button is-primary is-outlined" data-toggle="modal" data-target="#addnewModal">
                           
                                Add New
                              
                              </button> 
                </p> 

                    <!-- Main content -->
    <section class="content">

      <!-- Main row -->
      <div class="row">




        <section class="col-lg-12">

          <div class="row">
            <div class="col-md-12">
              @if( !$errors->isEmpty() )
                    <div class="alert alert-danger">
                        <ul>
                            @foreach( $errors->all() as $error )
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                     @if( !empty( $message ) )
                  <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i> {{ $message }}
                  </div>

                  @endif

               </div>
            </div>


            <div class="row">
              <div class="col-md-12">

                @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <i class="fa fa-check-circle"></i> {{ session()->get('message') }}
                        </div>
                        @endif

              </div>
            </div>


          <div class="row contact-container">

             <!--OVERVIEW-->
                  <div class="col-md-12 contact-list" id="contact-list">
                    
                    <!--Table hover-->
                    <div class="panel contact-panel" id="panel-scrolling-demo"> 
                        <!--Panel Body-->
                        <div class="panel-body">




                          <table id="contact-table" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email Address</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email Address</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                 

                                   @php ($count = 1)
                                   @foreach( $contacts as $user)

                                        <tr id="{{$user->id}}" class="data">
                                            <td>{{ $count++ }}</td>
                                            <td>{{ $user->firstname }}</td>
                                            <td>{{ $user->lastname }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>

                                                
                                            </td>

                                             <td>
                                               
                                              <div class="row actions">


                                               <div class="btn-group">

                                                
                                           
                                                
                                                <button type="button" id="{{ $user->id }}" class="btn btn-primary update-contact" data-toggle="modal" data-target="#UpdateContactsModal"><i class="fa fa-edit "></i></button> 

                                                 <button type="button" id="{{ $user->id }}" class="btn btn-primary view-contact" data-toggle="modal" data-target="#ConatactdetailsModal"><i class="fa fa-info-circle"></i></button> 

                                                 <button type="button" id="{{ $user->id }}" class="btn btn-danger delete-contact" data-toggle="modal" data-target="#DeleteContactModal"><i class="fa fa-ban"></i> </button>
                                               
                                              

                                                
                                            </div>

                                            </div>
                                            
                                             </td>    

                                          </tr>


                                    @endforeach
                                </tbody>
                            </table>  




                       </div>
                      </div>
                    </div>
                    


                           
                </div>

          </div>





        </section>
                </div>
  <!-- /.content-wrapper -->


                    
            </div>
        </div>
    </div>
</div>
@endsection
