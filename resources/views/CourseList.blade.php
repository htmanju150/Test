


<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" type="text/css" />
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.1/css/jquery.dataTables.css" type="text/css" />
<link rel="stylesheet" href="http://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script src="http://cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js"></script>
<script src="http://cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.js"></script>
<table id="example" class="display" cellspacing="0" width="100%">
 @if(session()->has('message'))
    <div class="alert alert-success">
       {{ session()->get('message') }}
    </div>
    <script>
       $(".alert-success").fadeTo(5000, 500).slideUp(500, function(){
           $(".alert-success").slideUp(500);

       });

    </script>
    @endif
        <thead>
            <tr>
                <th>CourseId</th>
                <th>CourseName</th>
                <th>CourseType</th>
                <th>Slug</th>
                <th>Save</th>

            </tr>
        </thead>
 
        <tfoot>
            <tr>
               <th>CourseId</th>
               <th>CourseName</th>
               <th>CourseType</th>
               <th>Slug</th>
               <th>Save</th>
            </tr>
        </tfoot>
 
        <tbody>
        @foreach(json_decode($res,true)['elements'] as $res)

            <tr>
                <td>{{$res['id']}}</td>
                <td>{{$res['slug']}}</td>
                <td>{{$res['courseType']}}</td>
                <td>{{$res['name']}}</td>
              <td> <a  href="/save_course?course_details={{ json_encode($res) }}" ><button type="button" name="decline_order" class="btn btn-info btn-sm"  > <img src="images/Save.png" alt="Smiley face" height="30" width="30"></button> </a> </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <script>
    $(document).ready(function() {
        $('#example').DataTable( {
            responsive: true
        } );
    } );

    </script>


  <style>
  .alert{
        font-size: 20px;
        color: green;
        font-family: cursive;
        margin-left: 35%;
  }

  </style>