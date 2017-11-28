@extends('layouts.app')
@section('content')

<div class="col-md-10 col-md-offset-1 ">
<div class="panel  panel-success " >
      <div class="panel-heading"><strong>Crear una nueva cita.</strong>&nbsp;&nbsp;<a href="{{route('citas.index')}}" class="btn btn-default ">Nueva<i class="fa fa-list-alt" aria-hidden="true"></i></a>
      </div>
<div class="panel-body">
<div class="col-md-12">
{!!Form::open(['route'=>'citas.store'])!!}
<br>
<br>
@include('citas.fragment.form')
{!!Form::close()!!}

</div>
</div>
</div>
</div>

@endsection