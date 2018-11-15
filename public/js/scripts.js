
$(document).on('submit','#addnewForm', {} ,function(e){
                
             e.preventDefault()

            var formdata = $(this).serializeArray();
        
                 $.ajax({
                  url: $(this).attr('action'),
                  type:"POST",
                  data:formdata,
                  success: function(data)
                  {    

                      if($.isEmptyObject(data.error))
                      {   

                        $(".form-error").html("");
                        $("body #contact-List").html(data.content);
                        $("#contact-table").DataTable();
                        $("#successModal .feedback-message").html( data.success );
                        $("#successModal").modal("show");
                        $("#addnewModal").modal("hide"); 
                      }
                       else
                      {    

                           $(".form-error").html("");

                          $(".form-error.firstname").html(data.error['firstname']);
                          $(".form-error.lastname").html(data.error['lastname']);
                          $(".form-error.middlename").html(data.error['middlename']);
                          $(".form-error.phonenumber").html(data.error['phonenumber']);
                          $(".form-error.email").html(data.error['email']);
                      }




                      
                  },
                  error: function (data) 
                  {
                     alert(data.status);
                  }
                  });




        });





            $(document).on('click','#contact_DUPLICATE',{},function(e) {
                      e.preventDefault()

                      var formdata = $("#addnewForm").serializeArray();

                       $.ajax({
                        url: "/contact",
                        type:"GET",
                        data: formdata,
                        success: function(data)
                        {    
                           
                             $("body #contact-list .panel-body").html(data.content);
                             $("#contact-table").DataTable();

                        },
                        error: function (data) 
                        {
                           alert(data.status);
                        }
                        });
                   
                   

                });






            if( $('.dataTables_scrollBody').length > 0) {
                $('.dataTables_scrollBody').slimScroll({
                    height: '190px',
                    wheelStep: 2,
                });
            }





                $(document).on('click','.update-contact', {} ,function(e){

                                var contactid = $(this).attr('id');



                                 $.ajax({
                                url: "/contact/UpdateContact",
                                type:"GET", 
                                data: {"id":contactid}, 
                                success: function(result){
                                 alert();
                                    $("#UpdateContactsModal input[name='firstname']").val(result.firstname);
                                    $("#UpdateContactsModal input[name='lastname']").val(result.lastname);
                                    $("#UpdateContactsModal input[name='middlename']").val(result.middlename);
                                    $("#UpdateContactsModal input[name='email']").val(result.email);
                                    $("#UpdateContactsModal input[name='phonenumber']").val(result.phonenumber);
                                    $("#UpdateContactsModal").modal("show");     
                                    },
                                error: function (data) {
                                    alert(data.status);
                                    }
                                 });

                        });






$(document).on('click','.delete-contact', {} ,function(e){
            
            var id = $(this).attr('id');
            $("#DeleteContactModal #deleteForm").attr('action','/contact/' + id);
            $("#DeleteContactModal").modal("show");

    });
