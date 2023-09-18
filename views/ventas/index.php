<h1 class="text-center">BÚSQUEDA DE VENTAS POR FECHAS</h1>
<div class="row justify-content-center mb-4">
    <form class="col-lg-8 border bg-light p-4" id="formularioVenta">
        <div class="row mb-3">
            <div class="col">
                <label for="fechaInicio">Fecha de Inicio</label>
                <input type="date" name="fechaInicio" id="fechaInicio" class="form-control">
            </div>
            <div class="col">
                <label for="fechaFin">Fecha de Fin</label>
                <input type="date" name="fechaFin" id="fechaFin" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar Ventas</button>
            </div>
        </div>
    </form>
</div>

<script src="build/js/ventas/index.js"></script>
