<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Canvas
Route::post('/canvas', 'CanvasController@store')->name('canvas.store');
Route::get('/canvas', 'CanvasController@create')->name('canvas.create');
Route::get('/canvas/{canvas}/edit', 'CanvasController@edit')->name('canvas.edit');
Route::put('/canvas/{canvas}', 'CanvasController@update')->name('canvas.update');


//Tabla de idea
Route::post('/idea', 'IdeaController@store')->name('idea.store');
Route::get('/idea', 'IdeaController@create')->name('idea');
Route::get('/idea/tabla', 'IdeaController@index')->name('idea.tabla');
Route::get('/idea/{idea}/edit', 'IdeaController@edit')->name('idea.edit');
Route::put('/idea/{idea}', 'IdeaController@update')->name('idea.update');
Route::delete('/idea/{idea}', 'IdeaController@delete')->name('idea.delete');

//Tabla de criterios
Route::post('/idea/criterio', 'CriterioController@store')->name('idea.criterio.store');
Route::get('/idea/criterio', 'CriterioController@create')->name('idea.criterio');
Route::get('/criterio/{criterio}/edit', 'CriterioController@edit')->name('idea.criterio.edit');
Route::put('/criterio/{criterio}', 'CriterioController@update')->name('idea.criterio.update');
Route::delete('/criterio/{criterio}', 'CriterioController@delete')->name('idea.criterio.delete');

//Valoracion de criterios
Route::get('/criterio/{criterio}/editar', 'CriterioController@editar')->name('idea.valoracion.editar');
Route::put('/criterio/{criterio}/actualizar', 'CriterioController@actualizar')->name('idea.valoracion.actualizar');

//Antecedentes
Route::get('/antecedentes/tabla', 'AntecedentesController@index')->name('a.tabla');
Route::get('/antecedentes', 'AntecedentesController@create')->name('a.create');
Route::post('/antecedentes', 'AntecedentesController@store')->name('a.store');
Route::get('/antecedentes/{ante}/edit', 'AntecedentesController@edit')->name('a.edit');
Route::delete('/antecedentes/{ante}', 'AntecedentesController@delete')->name('a.delete');
Route::put('/antecedentesS/{ante}/update', 'AntecedentesController@update')->name('a.update');

//Interesados
Route::get('/interesados/tabla', 'InteresadosController@index')->name('interesados.tabla');
Route::get('/interesados', 'InteresadosController@create')->name('interesados.create');
Route::post('/interesados', 'InteresadosController@store')->name('interesados.store');
Route::get('/interesados/{inte}/edit', 'InteresadosController@edit')->name('interesados.edit');
Route::delete('/interesados/{inte}', 'InteresadosController@delete')->name('interesados.delete');
Route::put('/interesados/{inte}/a', 'InteresadosController@update')->name('interesados.update');
//Interesados-Contacto
Route::get('/interesados/contacto', 'InteresadosController@contacto_create')->name('contacto.create');
Route::get('/interesados/contacto/{inte}/edit', 'InteresadosController@contacto_edit')->name('contacto.edit');
Route::put('/interesados/contacto/{inte}/update', 'InteresadosController@update')->name('contacto.update');

//Contenedor del arbol del problema - objetivos - interesados
Route::get('/marcologico', 'ContenedorController@index')->name('contenedor.index');
//Arbol del problema
Route::get('/arbolproblema/tabla', 'Arbol_ProblemaController@index')->name('arbolprob.tabla');
Route::get('/arbolproblema', 'Arbol_ProblemaController@create')->name('arbolprob.create');
Route::post('/arbolproblema', 'Arbol_ProblemaController@store')->name('arbolprob.store');
Route::get('/arbolproblema/{ap}/edit', 'Arbol_ProblemaController@edit')->name('arbolprob.edit');
Route::delete('/arbolproblema/{ap}', 'Arbol_ProblemaController@delete')->name('arbolprob.delete');
Route::put('/arbolproblema/{ap}/a', 'Arbol_ProblemaController@update')->name('arbolprob.update');

//Arbol del problema/causasefectos
Route::get('/arbolproblema/causas', 'CausasEfectosController@create')->name('causas.create');
Route::get('/causas/{cf}/edit', 'CausasEfectosController@edit')->name('causas.edit');
Route::post('/causas', 'CausasEfectosController@store')->name('causas.store');
Route::delete('/causas/{cf}', 'CausasEfectosController@delete')->name('causas.delete');
Route::put('/causas/{cf}/a', 'CausasEfectosController@update')->name('causas.update');

//Arbol de Objetivos
Route::get('/arbolobjetivo/tabla', 'Arbol_ObjetivoController@index')->name('arbolobj.tabla');
Route::get('/arbolobjetivo', 'Arbol_ObjetivoController@create')->name('arbolobj.create');
Route::get('/arbolobjetivo/{ao}/edit', 'Arbol_ObjetivoController@edit')->name('arbolobj.edit');
Route::delete('/arbolobjetivo/{ao}', 'Arbol_ObjetivoController@delete')->name('arbolobj.delete');
Route::get('/arbolobjetivo', 'Arbol_ObjetivoController@create')->name('arbolobj.create');
Route::post('/arbolobjetivo', 'Arbol_ObjetivoController@store')->name('arbolobj.store');
Route::put('/arbolobjetivo/{ao}/a', 'Arbol_ObjetivoController@update')->name('arbolobj.update');

//Arbol de Objetivos/medios
Route::get('/arbolobjetivo/medios', 'MediosFinController@create')->name('medios.create');
Route::post('/medios', 'MediosFinController@store')->name('medios.store');
Route::get('/medios/{mf}/edit', 'MediosFinController@edit')->name('medios.edit');
Route::delete('/medios/{mf}', 'MediosFinController@delete')->name('medios.delete');
Route::put('/medios/{mf}/a', 'MediosFinController@update')->name('medios.update');

//FODA
Route::post('/foda', 'FodaController@store')->name('foda.store');
Route::get('/foda', 'FodaController@create')->name('foda.create');
Route::get('/foda/tabla', 'FodaController@index')->name('foda.tabla');
Route::delete('/foda/{foda}', 'FodaController@delete')->name('foda.delete');
Route::put('/foda/{foda}', 'FodaController@update')->name('foda.update');
//Foda-Fortaleza
Route::get('/foda/fortaleza', 'FodaController@fortaleza')->name('fortaleza.create');
Route::get('/foda/{foda}/editar_fortaleza', 'FodaController@editar_fortaleza')->name('fortaleza.edit');
//Foda-oportunidad
Route::get('/foda/oportunidad', 'FodaController@oportunidad')->name('oportunidad.create');
Route::get('/foda/{foda}/editar_oportunidad', 'FodaController@editar_oportunidad')->name('oportunidad.edit');
//Foda-debilidad
Route::get('/foda/debilidad', 'FodaController@debilidad')->name('debilidad.create');
Route::get('/foda/{foda}/editar_debilidad', 'FodaController@editar_debilidad')->name('debilidad.edit');
//Foda-Amenaza
Route::get('/foda/amenaza', 'FodaController@amenaza')->name('amenaza.create');
Route::get('/foda/{foda}/editar_amenaza', 'FodaController@editar_amenaza')->name('amenaza.edit');

//Contenedor Marketing Producto
Route::get('/contenedorproducto', 'ContenedorProductoController@index')->name('contenedorprod.index');
//Producto
Route::get('/producto', 'ProductoController@create')->name('producto.create');
Route::post('/producto', 'ProductoController@store')->name('producto.store');
Route::get('/producto/{prod}/edit', 'ProductoController@edit')->name('producto.edit');
Route::put('/producto/{prod}/update', 'ProductoController@update')->name('producto.update');
//Precio
Route::get('/precio', 'PrecioController@create')->name('precio.create');
Route::post('/precio', 'PrecioController@store')->name('precio.store');
Route::get('/precio/{prec}/edit', 'PrecioController@edit')->name('precio.edit');
Route::put('/precio/{prec}/update', 'PrecioController@update')->name('precio.update');

//Distribucion
Route::get('/distribucion', 'DistribucionController@create')->name('dis.create');
Route::post('/distribucion', 'DistribucionController@store')->name('dis.store');
Route::get('/distribucion/{dis}/edit', 'DistribucionController@edit')->name('dis.edit');
Route::put('/distribucion/{dis}/update', 'DistribucionController@update')->name('dis.update');
Route::delete('/distribucion/{dis}', 'DistribucionController@delete')->name('dis.delete');

//Distribucion-Bien
Route::get('/distribucion/bien', 'DistribucionController@bien')->name('bien.create');
Route::get('/distribucion/{dis}/editar_bien', 'DistribucionController@editar_bien')->name('bien.edit');

//Distribucion-Servicio
Route::get('/distribucion/servicio', 'DistribucionController@servicio')->name('servicio.create');
Route::get('/distribucion/{dis}/editar_servicio', 'DistribucionController@editar_servicio')->name('servicio.edit');

//Publicidad
Route::get('/publicidad', 'PublicidadController@create')->name('publicidad.create');
Route::post('/publicidad', 'PublicidadController@store')->name('publicidad.store');
Route::get('/publicidad/{pub}/edit', 'PublicidadController@edit')->name('publicidad.edit');
Route::put('/publicidad/{pub}/update', 'PublicidadController@update')->name('publicidad.update');


Route::get('/subiendo_magen', 'ImageController@resizeImage')->name('imagen.create');
Route::post('/cargar_imagen',['as'=>'cargar_imagen','uses'=>'ImageController@cargar_imagen']);


//GESTION DE USUARIOS
Route::resource('rol','RolController');
Route::put('rol/{rol}/a','RolController@active')->name('rol.active');

Route::resource('usuario', 'UserController');
Route::put('usuario/{usuario}/a','UserController@active')->name('user.active');

Route::resource('proyectos','ProjectController')->parameters(['proyectos' => 'project']);
Route::put('proyectos/{project}/a','ProjectController@active')->name('proyectos.active');

//ESTUDIO DE MERCADO
Route::resource('promotor','PromoterController')->parameters(['promotor' => 'promoter']);

Route::resource('pastel','PastelController')->parameters(['pastel'=>'pastel']);
Route::get('pastel/{pastel}/value','PastelController@value')->name('pastel.value');

Route::resource('industry','IndustryController');

Route::resource('criterionIndustry','CriterionIndustryController');

Route::resource('serietemporal','TimeSerieController')->parameters(['serietemporal'=>'timeSerie']);
Route::get('import', 'TimeSerieController@csv')->name('import.csv');
Route::post('import', 'TimeSerieController@import')->name('import');

Route::resource('regresion','RegressionController')->parameters(['regresion'=>'regression']);

Route::resource('proyeccion','ProjectionController')->parameters(['proyeccion'=>'projection']);

Route::get('brechaDeMercado', 'ProjectionController@marketGap')->name('marketGap');

Route::resource('investigation','InvestigationController');
Route::resource('population','PopulationController');
Route::resource('demand','DemandController');
Route::resource('offer','OfferController');
Route::resource('projectionInvestigation','ProjectionInvestigationController');
Route::get('marketGapInvestigation/{investigation}', 'ProjectionInvestigationController@marketGap')->name('marketGap.investigation');

//ESTUDIO TECNICO
