
<div clas="row">
<div class="col-sm-3">
<div class="form-group">
{!!Form::label('fechacita','Fecha cita.')!!}
{!!Form::date('fechacita',null,['class'=>'form-control','placeholder'=>'','required'=>'required'])!!} 
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
{!! Form::label('nomcliente','Nombre cliente')!!}
{!!Form::text('nomcliente',null,['class'=>'form-control',  'placeholder'=>''])!!}
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
{!! Form::label('nuip','Numero de cedula')!!}
{!!Form::text('nuip',null,['class'=>'form-control',  'placeholder'=>''])!!}
</div>
</div>

<div class="col-sm-3">
<div class="form-group">
{!!Form::label('ubicacion','Ubicacion')!!}
{!!Form::text('ubicacion',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
</div>
</div>


<div class="row">
<div class="col-sm-4">
<div class="form-group">
{!!Form::label('nomfinca','Nombre finca')!!}
{!!Form::text('nomfinca',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
{!!Form::label('email','Correo electronico')!!}
{!!Form::email('email',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
{!!Form::label('telefono','Telefono')!!}
{!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
</div>
</div>


<div class="col-sm-12">
<div class="form-group">
{!!Form::label('tipo','Tipo')!!}
{!!Form::text('tipo',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
</div>

<div class="col-sm-12">
<div class="form-group">
{!!Form::label('observacion','Observacion')!!}
{!!Form::textarea('observacion',null,['class'=>'form-control','placeholder'=>''])!!}
</div>
</div>

<div class="form-group text-center">
{!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div>