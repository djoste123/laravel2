<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Room;
use App\Reservation;

class RoomsController extends Controller
{
    //
    public function __construct( Reservation $reservation )
    {
        $this->reservation = $reservation;
    }
    public function checkAvailableRooms($client_id, Request $request)
    {
        $dateFrom = $request->input('dateFrom');
        $dateTo = $request->input('dateTo');
        $client = new Client();
        $room = new Room();

        $data = [];
        $data['dateFrom'] = $dateFrom;
        $data['dateTo'] = $dateTo;
        $data['rooms']= $room->getAvailableRooms($dateFrom, $dateTo);
        $data['client'] = $client->find($client_id);

        return view('rooms/checkAvailableRooms', $data);
    }
    public function index(){
        
        $data = [];
        $data['reservation'] = $this->reservation->all();
        
        return view('reservations/index', $data);
    }
}
