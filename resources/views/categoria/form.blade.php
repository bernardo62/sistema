
<h1>{{$modo}} categoria</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    
@endif

<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" 
    value="{{isset($categoria->Nombre)?$categoria->Nombre:old('Nombre')}}"  id="Nombre">

    <label for="Responsable" >Responsable</label>
    <input type="text" class="form-control" name="Responsable" 
    value="{{isset($categoria->Responsable)?$categoria->Responsable:old('Responsable')}}" id="Responsable">
</div> 

<br>

<input  class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary"  href="{{url('categoria/')}}">Regresar</a>
