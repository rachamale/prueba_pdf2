<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        font-family: Arial, sans-serif;
    }

    th, td {
        border: 1px solid #e0e0e0;
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
        color: #333;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:nth-child(odd) {
        background-color: #fff;
    }

    tbody tr:hover {
        background-color: #e0e0e0;
    }

    caption {
        font-size: 1.2em;
        margin-bottom: 10px;
    }
</style>

<table>
    <caption>Ventas</caption>
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Producto</th>
            <th>Cliente</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ventas as $venta) : ?>
            <tr>
                <td><?= $venta->fecha ?></td>
                <td><?= $venta->cantidad ?></td>
                <td><?= $venta->producto ?></td>
                <td><?= $venta->cliente ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
