<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

{{ Form::open(array('route'=>'formpost')) }}
{{ csrf_field() }}
{{Form::label('Title','Title')}}
{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}

{{Form::label('Description','Description')}}
{{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Description'])}}

{{Form::label('Location','Location')}}
{{Form::text('location','',['class'=>'form-control','placeholder'=>'Location'])}}

{{Form::label('Active','Active')}}
{{Form::radio('active','1',true)}} Yes
{{Form::radio('active','2',false)}} No

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}  
{{Form::close()}}

