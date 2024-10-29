@extends('index')

@section('contenido')
    <section class="content-header">
    <h1 class="pull-left">Lista de Proveedores <br></h1>
    <h1 class="pull-right">
        <a class="btn btn-primary pull-right" style="margin-top">Agregar</a>
    </h1>
       
    </section>
    <div class="content">
        <h1><br></h1>
        <div class="box box-primary">
            <div class="box-body">
            <div class="table-responsive">
                <table class="table" border>
                <thead>
                    <tr>
                        <th> Id</th>
                        <th> Razon social</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 </td>
                        <td> Corcuera</td>
                        <td>
                            <a class="btn btn-default btn-xs">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>


@endsection
   