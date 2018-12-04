<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Notifications\ReservationConfirmed;
use Illuminate\Support\Facades\Notification;
use App\Reservation;

class ReservationController extends Controller
{
    public function index()
	{
		 $reservations=Reservation::all();
	     return view('admin.reservation.index',compact('reservations'));
	}

	 public function status($id){
        $reservation = Reservation::find($id);
        $reservation->status = true;
        $reservation->save();
 
      return redirect()->route('reservation.index')->with('successMsg','Reservation Successfully Updated');
    }
    public function destory($id){
        Reservation::find($id)->delete();
       return redirect()->back()->with('successMsg','Reservation Successfully Deleted');
    }


}
