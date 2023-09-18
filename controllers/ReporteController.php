<?php

namespace Controllers;

use Mpdf\Mpdf;
use MVC\Router;
use Model\Venta;
use Exception;
class ReporteController
{
    public static function pdf(Router $router)
    {
        $fechaInicio = $_GET['fechaInicio'];
        $fechaFin = $_GET['fechaFin'];

    
        $ventas = VentaController::buscarAPI($fechaInicio, $fechaFin);


        $mpdf = new Mpdf([
            "orientation" => "P",
            "default_font_size" => 12,
            "default_font" => "arial",
            "format" => "Letter",
            "mode" => 'utf-8'
        ]);
        $mpdf->SetMargins(30, 35, 25);

        $html = $router->load('reporte/pdf', [
            'ventas' => $ventas
        ]);


        $htmlHeader = $router->load('reporte/header');
        $htmlFooter = $router->load('reporte/footer');
        $mpdf->SetHTMLHeader($htmlHeader);
        $mpdf->SetHTMLFooter($htmlFooter);
        $mpdf->WriteHTML($html);

        $mpdf->Output();
    }

    public static function generarPDF(Router $router)
    {
        $datos = json_decode(file_get_contents('php://input'));

        $html = $router->load('reporte/pdf', [
            'ventas' => $datos 
        ]);


        $mpdf = new Mpdf();

        $htmlHeader = $router->load('reporte/header');
        $htmlFooter = $router->load('reporte/footer');
        $mpdf->SetHTMLHeader($htmlHeader);
        $mpdf->SetHTMLFooter($htmlFooter);

    
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}