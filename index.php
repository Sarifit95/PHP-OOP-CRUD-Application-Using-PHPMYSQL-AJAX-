<!DOCTYPE html>
<html>
<head>
    <title>Server Side data table , Ajax CURD  with PHP & PDO | Server Side data table | Ajax CURD  with PHP & PDO |  Ajax CURD | PHP & PDO | data table PHP | Ajax CURD PHP | CORE PHP CURD</title>
    <meta name="description" content="Server Side data table , Ajax CURD  with PHP & PDO, INSERT  EDIT, UPDATE, DELETE ">
    <meta name="keywords" content="Server Side data table , Ajax CURD  with PHP & PDO, INSERT  EDIT, UPDATE, DELETE , Server Side data table , Ajax CURD  with PHP & PDO ,  Ajax CURD , PHP & PDO , data table PHP , Ajax CURD PHP, CORE PHP CURD" />
    <meta name="author" content="Sariful Islam">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- datatable lib -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .content{
    max-width: 800px;
            margin: auto;
        }

        h1{
    text-align: center;
            padding-bottom: 60px;
        }
    </style>
    <style>
        .faa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-google {
            background: #dd4b39;
            color: white;
        }

        .fa-linkedin {
            background: #007bb5;
            color: white;
        }


        .fa-instagram {
            background: #125688;
            color: white;
        }





        .fa-skype {
            background: #00aff0;
            color: white;
        }

        .fa-android {
            background: #a4c639;
            color: white;
        }





    </style>

</head>
<body>
<div class="content">
     <h3>PHP OOP CRUD Application Using PHPMYSQL AJAX  With Server Side Data tabel </h3>

    <div align="right">
        <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success">Add Course</button>
    </div>


               <table id="course_table" class="table table-striped">
                    <thead bgcolor="#6cd8dc">
                        <tr class="table-primary">


                            <th width="10%" >Id</th>
                            <th width="10%">Name</th>
                            <th width="10%">Email</th>
                            <th width="10%">Phone</th>
                            <th width="10%">Subject</th>
                            <th width="10%">Message</th>
                            <th width="10%">Created on</th>
                            <th width="10%">Update on</th>


                           <th scope="col" width="5%">Edit</th>
                           <th scope="col" width="5%">Delete</th>
                        </tr>
                    </thead>
                </table>
</div>


<div class="container">
    <div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
            <strong>CONTACT </strong>
        </h5>
        <ul class="list mbr-fonts-style display-4">
            <li style="font-family: 'Lato', 'sans-serif'; font-size: 15px" class="mbr-text item-wrap"><i style="color: red;" class="fa fa-map-marker"></i>  Mirpur-6, Dhaka-1216, Bangladesh </li>
            <li style="font-family: 'Lato', 'sans-serif'; font-size: 15px" class="mbr-text item-wrap"><i style="color: green;" class="fa fa-phone"></i> +880178 12 75612, +8809696475612</li>
            <li style="font-family: 'Lato', 'sans-serif'; font-size: 15px" class="mbr-text item-wrap"><i style="color: red;" class="fa fa-envelope"></i> <a href="mailto:sarifit95@gmail.com" rel="nofollow">sarifit95@gmail.com</a></li>
            <li style="font-family: 'Lato', 'sans-serif'; font-size: 15px" class="mbr-text item-wrap"><i style="color: green;" class="fa fa-whatsapp"></i> +880178 12 75612</li>
            <li style="font-family: 'Lato', 'sans-serif'; font-size: 15px" class="mbr-text item-wrap"><i class="fa fa-skype"></i> sarifit95</li>

        </ul>
    </div>
        <div class="col-12 col-md-6 col-lg-6">
            <a title="Facebook" href="https://www.facebook.com/sarifit95/" target="_blank" class="faa fa fa-facebook"></a>
            <a title="twitter" href="https://twitter.com/Sariful21221382" target="_blank" class="faa fa fa-twitter"></a>
            <a title="linkedin" href="https://www.linkedin.com/in/sariful-islam-22893b153/" target="_blank" class="faa fa fa-linkedin"></a>
            <a title="instagram" href="https://www.instagram.com/sariful_islamit/" target="_blank" class="faa fa fa-instagram"></a>
            <a title="Github" href="https://github.com/Sarifit95"  style="font-size:50px;color:red" target="_blank" class="faa fa fa-github"></a>


        </div>


    </div>


</div>

</body>
</html>

<div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="info_form" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Course</h4>
                </div>
                <div class="modal-body">

                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="register-form-name">Username:</label>
                        <input type="text" id="name" name="name" value="" class="form-control" / required>
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="register-form-name">Email:</label>
                        <input type="email" id="email" name="email" value="" class="form-control" / required>
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="register-form-name">Phone:</label>
                        <input type="text" id="phone" name="phone" value="" class="form-control" / required>
                    </div>
                    <div class="col-md-6 col-sm-12 form-group">
                        <label for="register-form-name">Subject:</label>
                        <input type="text" id="subject" name="subject" value="" class="form-control" / required>
                    </div>
                    <div class="col-md-12 col-sm-12 form-group">
                        <label for="register-form-name">Message:</label>
                        <textarea id="message" class="form-control" name="message" placeholder="Message..."></textarea>
                    </div>



                </div>
                <div class="modal-footer">
                    <input type="hidden" name="course_id" id="course_id"/>
                    <input type="hidden" name="operation" id="operation"/>
                    <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#add_button').click(function(){
            $('#info_form')[0].reset();
            $('.modal-title').text("Add Information ");
            $('#action').val("Add");
            $('#operation').val("Add")
        });

        var dataTable = $('#course_table').DataTable({
        "paging":true,
        "processing":true,
        "serverSide":true,
        "order": [],
        "info":true,
        "ajax":{
            url:"fetch.php",
            type:"POST"
        },
        "columnDefs":[
           {
               "target":[0,3,4],
            "orderable":false,
           },
        ],
     });






     $(document).on('submit', '#info_form', function(event){
         event.preventDefault();

         var id = $('#id').val();
         var course = $('#course').val();
         var students = $('#students').val();


         if(course != '' && students != '')
         {
             $.ajax({
                url:"insert.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    $('#info_form')[0].reset();
                    $('#userModal').modal('hide');
                    dataTable.ajax.reload();
                }
            });
        }
         else
         {
             alert("Course Name, Number of students Fields are Required");
         }
     });

    $(document).on('click', '.update', function(){
        var course_id = $(this).attr("id");
        $.ajax({
            url:"fetch_single.php",
            method:"POST",
            data:{course_id:course_id},
            dataType:"json",
            success:function(data)
            {
                $('#userModal').modal('show');
                $('#id').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#phone').val(data.phone);
                $('#subject').val(data.subject);
                $('#message').val(data.message);
                $('.modal-title').text("Edit Information Details");
                $('#course_id').val(course_id);
                $('#action').val("Save");
                $('#operation').val("Edit");
            }
        });
     });

    $(document).on('click','.delete', function(){

        var course_id = $(this).attr("id");
        if(confirm("Are you sure want to delete this user?"))
        {
            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{course_id:course_id},
                success:function(data)
                {
                    dataTable.ajax.reload();
                }
            });
        }
        else
        {
            return false;
        }
    });

    });
</script>
