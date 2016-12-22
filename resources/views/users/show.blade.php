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

    <title>Show Users</title>
</head>
<body class="container">

{!! Form::open(array('action'=>'UserController@insert')) !!}

<div class="form-group">
     {!! Form::label('name') !!}
    {!! Form::text('name',null,array('class'=>'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('email') !!}
    {!! Form::email('email',null,array('class'=>'form-control')) !!}
</div>
    <div class="form-group">
        {!! Form::label('password') !!}
        {!! Form::password('password',array('class'=>'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::submit("Insert",["class"=>"btn btn-lg btn-primary"]) !!}
    </div>
{!! Form::close() !!}

        <table class="table table-bordered table-hover">
        	<thead>
        		<tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
        		</tr>
        	</thead>
        	<tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{!! $user->name !!}</td>
                        <td>{!! $user->email !!}</td>
                        <td>{!! $user->password !!}</td>
                        <td>
                            {{--{!! Form::open(array('action'=>'UserController@insert')) !!}--}}
                            {{--{!! Form::close() !!}--}}
                            <a href="users/edit/{!! $user->id !!}" class="btn btn-primary">Update</a>
                        </td>
                    </tr>
                @endforeach
        	</tbody>
        </table>
</body>
</html>