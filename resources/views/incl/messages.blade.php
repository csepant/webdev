@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <i class="material-icons">error_outline</i><span>  {{$error}}</span>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        <i class="material-icons">check</i><span>{{session('success')}}</span>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif