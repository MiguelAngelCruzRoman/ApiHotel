<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReservacionesModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\API\ResponseTrait;

class Reservaciones extends BaseController
{
    public function index()
    {
        $reservaciones = new ReservacionesModel();
        $allReservaciones = $reservaciones->index();

        $content = [
            'datos' => $allReservaciones,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }
    public function documentacionIndex()
    {
        return view('reservaciones/index');
    }

    public function getByEstatus($estatus)
    {
        $reservaciones = new ReservacionesModel();
        $allReservaciones = $reservaciones->getByEstatus($estatus);

        $content = [
            'datos' => $allReservaciones,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }

    public function getByRangoFechasEstadia($fechaInicio, $fechaFin)
    {
        $reservaciones = new ReservacionesModel();
        $allReservaciones = $reservaciones->getByRangoFechasEstadia($fechaInicio, $fechaFin);

        $content = [
            'datos' => $allReservaciones,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }

    public function getByCliente($nombreCliente)
    {
        $reservaciones = new ReservacionesModel();
        $allReservaciones = $reservaciones->getByCliente($nombreCliente);

        $content = [
            'datos' => $allReservaciones,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }

    public function getByTipoHabitacion($tipoHabitacion)
    {
        $reservaciones = new ReservacionesModel();
        $allReservaciones = $reservaciones->getByTipoHabitacion($tipoHabitacion);

        $content = [
            'datos' => $allReservaciones,
        ];

        $response = service('response');
        $response->setStatusCode(Response::HTTP_OK);
        $response->setJSON($content);
        return $response;
    }
}
