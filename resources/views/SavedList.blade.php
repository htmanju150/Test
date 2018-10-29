


<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" type="text/css" />
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.1/css/jquery.dataTables.css" type="text/css" />
<link rel="stylesheet" href="http://cdn.datatables.net/responsive/1.0.0/css/dataTables.responsive.css" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script src="http://cdn.datatables.net/1.10.1/js/jquery.dataTables.min.js"></script>
<script src="http://cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.js"></script>

<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>CourseId</th>
                <th>CourseName</th>
                <th>CourseType</th>
                <th>Slug</th>

            </tr>
        </thead>
 
        <tfoot>
            <tr>
               <th>CourseId</th>
               <th>CourseName</th>
               <th>CourseType</th>
               <th>Slug</th>
            </tr>
        </tfoot>
 
        <tbody>
        @foreach(json_decode($res,true) as $res)

            <tr>
                <td>{{$res['course_id']}}</td>
                <td>{{$res['course_slug']}}</td>
                <td>{{$res['course_type']}}</td>
                <td>{{$res['course_name']}}</td>
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

