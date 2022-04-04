  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<table border="1px">  
<thead>  
<tr>  
<td>  
ID </td>  
<td>  
Title</td>  
<td>  
Description</td>  
<td>  
Location </td>  
<td>  
Active </td>  
</tr>  
</thead>  
<tbody>  
@foreach($tests as $crud)  
        <tr border="none">  
            <td>{{$crud->id}}</td>  
            <td>{{$crud->title}}</td> 
            <td>{{$crud->description}}</td>
			<td>{{$crud->location}}</td> 	
			@if($crud->active==1)		
            <td>Yes</td>  
			@else
		     <td>No</td>  
			@endif
			<td>
			<a href="{{route('editpage',$crud->id)}}">Edit</a>
			</td>
			<td>
			<a href="{{route('deletepage',$crud->id)}}">Delete</a>
			</td>
         </tr>  
@endforeach  
</tbody>  
</table> 
</div>

