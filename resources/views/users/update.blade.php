<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

    <title>Update Form</title>
</head>
<body class="container">
{!! Form::open(array('action' => array('UserController@update', $user->id))) !!}

<div class="form-group">
    {!! Form::label('name') !!}
    {!! Form::text('name',$user->name,array('class'=>'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('email') !!}
    {!! Form::email('email',$user->email,array('class'=>'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('password') !!}
    {!! Form::password('password',array('class'=>'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::submit("Update",["class"=>"btn btn-lg btn-primary"]) !!}
</div>
{!! Form::close() !!}
</body>
</html>