<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h3>Welcome</h3>
    @if(session('status'))
        {{session('status')}}
    @endif
    <br>
    <div>
        <a href="{{url('setSession')}}">
            <button class="btn btn-info btn-sm ">Set Session</button>
        </a>

        <a href="{{url('getSession')}}">
            <button class="btn btn-info btn-sm ">Get Session</button>
        </a>

        <a href="{{url('deleteSession')}}">
            <button class="btn btn-info btn-sm">Delete Session</button>
        </a>

        <a href="{{url('setMultiSession')}}">
            <button class="btn btn-info btn-sm">Set Multi Session</button>
        </a>

        <a href="{{url('getSingleSession')}}">
            <button class="btn btn-info btn-sm">Get Single Session</button>
        </a>
        
    </div>
    
    
    

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>