@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="header text-center">
        <h3 class="title">FullCalendar.io</h3>
    </div>
    <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                            <a href="./pacientes">
                               <i class="material-icons">pets</i>
                            </a>
                    </div>
                    <div class="card-content">
                        <a href="./pacientes">
                        <p class="category">Pacientes</p>
                        <h3 class="card-title" id="total_pacientes">{{$cantidad_pacientes}}</h3>
                        </a>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">pets</i>  <a href="./pacientes">Obtener mas información</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                
                    <div class="card-header" data-background-color="green">
                    <a href="./consultas">
                        <i class="material-icons">how_to_reg</i>
                    </a>
                    </div>
                    <div class="card-content">
                        <a href="./consultas">
                        <p class="category">Consultas Pendientes</p>
                        <h3 class="card-title" id="reserva">{{$reservas}}</h3>
                        </a>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">how_to_reg</i>  <a href="./consultas">Obtener mas información</a>
                        </div>
                    </div>
                
                </div>
            </div>
            <!--<div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">store</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Total Consultas</p>
                        <h3 class="card-title">$0</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <div class="card-content">
                        <p class="category">Citas del Día</p>
                        <h3 class="card-title">0</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-calendar">
                <div class="card-content" class="ps-child">
                    <div id="citas_medicas"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('citas_medicas.addModalCita')
@include('citas_medicas.upModalCita')

@endsection


