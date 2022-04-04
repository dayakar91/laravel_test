<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

{{ Form::open(['route'=>['formedit',$edit->id]]) }}
{{ csrf_field() }}
{{Form::label('Title','Title')}}
{{Form::text('title',$edit->title,['class'=>'form-control','placeholder'=>'Title'])}}

{{Form::label('Description','Description')}}
{{Form::textarea('description',$edit->description,['class'=>'form-control','placeholder'=>'Description'])}}

{{Form::label('Location','Location')}}
{{Form::text('location',$edit->location,['class'=>'form-control','placeholder'=>'Location'])}}

{{Form::label('Active','Active')}}
@if($edit->active==1)
{{Form::radio('active',$edit->active,true)}} Yes
{{Form::radio('active',$edit->active,false)}} No
@elseif($edit->active==2)
{{Form::radio('active',$edit->active,false)}} Yes
{{Form::radio('active',$edit->active,true)}} No
@endif
{{Form::hidden('id',$edit->id,['class'=>'form-control','placeholder'=>'Location'])}}

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  
{{Form::close()}}

