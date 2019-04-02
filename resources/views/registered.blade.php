<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<table border="1">
<tr> <th>name</th>
<th>address</th>
<th>rollno</th>
<th>age</th>
<th>email</th>
<th>comment</th>
<th>course</th>
<th>state</th>
<th>gender</th>
<th>phone</th>
<th>delete</th>
</tr>
@foreach ($st as $st)
<tr id="row_{{$st->id}}">
<td>{{$st->name}}</td>
<td>{{$st->address}}</td>
<td>{{$st->rollno}}</td>
<td>{{$st->age}}</td>
<td>{{$st->email}}</td>
<td>{{$st->comments}}</td>
<td>{{$st->course}}</td>
<td>{{$st->state}}</td>
<td>{{$st->gender}}</td>
<td>{{$st->phone}}</td>
<td>
<button class="deleteRecord" data-id="{{ $st->id }}" data-token="{{csrf_token()}}" >Delete Record</button>
<a href="/update/{{$st->id}}">edit</a>
</td>
</tr>

@endforeach


	

</table>


<script type="text/javascript">

$(".deleteRecord").click(function(){
    var id = $(this).data("id");
    var token = $(this).data("token");
   
    $.ajax(
    {
        url: "/registered/"+id,
        type: 'DELETE',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            console.log("it Works");
            $("#row_"+id).hide();
         }
    });
   
});
</script>
</body>
</html>