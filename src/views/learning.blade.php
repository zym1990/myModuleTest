<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('learning/assets/bootstrap/core/dist/css/bootstrap.min.css')}}"/>
    <script src="{{url('learning/assets/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{url('learning/assets/bootstrap/core/dist/js/bootstrap.min.js')}}"></script>

    <title>Learning</title>
</head>
<body>
    <div style="padding: 100px 100px 10px;">
        <form class="bs-example bs-example-form" role="form">
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="name" value="{{ $name }}">
            </div><br>
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="module" value="{{ $module }}">
            </div>
        </form>
    </div>
</body>
</html>
