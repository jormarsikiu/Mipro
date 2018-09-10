@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('FODA') }}</div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-12">
							
							<!--Botones-->
							<link href="{{asset('css/bootstrap.css') }}" rel="stylesheet" media="screen">
							
							<p><h5 style="text-align:center">FODA</h5></p>
							<p>Introduzca los elementos FODA del proyecto </p>

                            <a href="{{ route('fortaleza.create') }}" type="button" class="btn btn-primary btn-lg btn-block" onClick="this.disabled='disabled'">Agregar Fortaleza</a>
                            <table class="table">
                                <thead class="thead-light">	
                                    <tr>
                                        <th scope="col">Fortalezas</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($foda as $key => $value)
									@if($value->fortaleza!=NULL)
                                    <tr>    
                                        <td>{!! $value->fortaleza !!}</td>
                                        <td>
                                            <a type="button" aria-label="Editar" class="btn btn-info" href="{{ route('fortaleza.edit', $value->id) }}">
                                            <span class="glyphicon glyphicon-pencil"></span></a>
                                         </td>
                                         <td>  
      
                                             <form method="POST" action="{{ route('foda.delete', $value->id) }}">
                                                @csrf
                                                    {{ method_field('DELETE') }}
                                                <button aria-label="Eliminar" type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar la fortaleza: {!! $value->fortaleza!!}?')">
                                                <span class="glyphicon glyphicon-trash"></span> </button>
                                                
                                            </form>  
                                        </td>                                         
                                    </tr>
									@endif
								@endforeach                                
                                </tbody>
                            </table>
                            
                            
							<br>
                            <br>
                             <a href="{{ route('oportunidad.create') }}" type="button" class="btn btn-primary btn-lg btn-block" onClick="this.disabled='disabled'">Agregar Oportunidades</a>
                            <table class="table">
                                <thead class="thead-light">	
                                    <tr>
                                        <th scope="col">Oportunidades</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
								
                                    @foreach($foda as $key => $value)
										@if($value->oportunidad!=NULL)
                                    <tr>    
                                        <td>{!! $value->oportunidad !!}</td>
                                        <td>
                                            <a type="button" aria-label="Editar" class="btn btn-info" href="{{ route('oportunidad.edit', $value->id) }}"> 
                                            <span class="glyphicon glyphicon-pencil"></span></a>
										</td>
										
										<td>
                                             <form method="POST" action="{{ route('foda.delete', $value->id) }}">
                                                @csrf
                                                    {{ method_field('DELETE') }}
                                                <button aria-label="Eliminar" type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar la oportunidad: {!! $value->oportunidad!!}?')">
                                                <span class="glyphicon glyphicon-trash"></span> </button>
                                                </button>
                                            </form>  
                                        </td>                                         
                                    </tr>
										@endif
                                    @endforeach                               
                                </tbody>
                            </table>

                            <br>
                             <a href="{{ route('debilidad.create') }}" type="button" class="btn btn-primary btn-lg btn-block" onClick="this.disabled='disabled'">Agregar Debilidades</a>
                            <table class="table">
                                <thead class="thead-light">	
                                    <tr>
                                        <th scope="col">Debilidades</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($foda as $key => $value)
										@if($value->debilidad!=NULL)
                                    <tr>    
                                        <td>{!! $value->debilidad !!}</td>
                                        <td>
                                            <a type="button" aria-label="Editar" class="btn btn-info" href="{{ route('debilidad.edit', $value->id) }}"> 
                                            <span class="glyphicon glyphicon-pencil"></span></a>
										</td>
										<td>
                                             <form method="POST" action="{{ route('foda.delete', $value->id) }}">
                                                @csrf
                                                    {{ method_field('DELETE') }}
                                                <button aria-label="Eliminar" type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar la debilidad: {!! $value->debilidad!!}?')">
                                                <span class="glyphicon glyphicon-trash"></span> </button>
                                                </button>
                                            </form>  
                                        </td>                                         
                                    </tr>
										@endif
                                    @endforeach
                                </tbody>
                            </table>


                            <br>
                             <a href="{{ route('amenaza.create') }}" type="button" class="btn btn-primary btn-lg btn-block" onClick="this.disabled='disabled'">Agregar Amenazas</a>
                            <table class="table">
                                <thead class="thead-light">	
                                    <tr>
                                        <th scope="col">Amenazas</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($foda as $key => $value)
										@if($value->amenaza!=NULL)
                                    <tr>    
                                        <td>{!! $value->amenaza !!}</td>
                                        <td>
                                            <a type="button" aria-label="Editar" class="btn btn-info" href="{{ route('amenaza.edit', $value->id) }}"> 
                                            <span class="glyphicon glyphicon-pencil"></span></a>
                                        </td>
                                        <td>
      
                                             <form method="POST" action="{{ route('foda.delete', $value->id) }}">
                                                @csrf
                                                    {{ method_field('DELETE') }}
                                                <button aria-label="Eliminar" type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar la amenaza: {!! $value->amenaza!!}?')">
                                                <span class="glyphicon glyphicon-trash"></span> </button>
                                                </button>
                                            </form>  
                                        </td>                                         
                                    </tr>
										@endif
                                    @endforeach
                                </tbody>
                            </table>
						     
						     <table align="center">
								<tr>
									<td>
										<a href="{{ route('pastel.index') }}"  type="button"  class="btn btn-primary">
										<span class="glyphicon glyphicon-triangle-left"></span></a>
									</td>
									<td>
										 <a href="{{ route('serietemporal.index') }}" type="button"  class="btn btn-primary">
										<span class="glyphicon glyphicon-triangle-right"></span></a>
									</td>
								</tr>
							</table>
						     
						     
						     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
