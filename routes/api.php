<?php



use App\Models\Invoicestatus;
use App\Models\Sender;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/trackinvoice/{invoice}', function (string $invoice) {
    // $datas = Booking::where('booking_invoice', $invoice)
    // ->orWhere('manual_invoice',  $invoice)
    // ->get()->first();
    $datastatus = $datas = Invoicestatus::
    with('trackstatus')
    ->where('generated_invoice', $invoice)
    ->orWhere('manual_invoice',  $invoice)
    ->get();
    $data['status'] = $datastatus;

    // $data['sender'] = Sender::where('id', $datas->sender_id)->get()->first();
    // $data['invoicestatus'] = Invoicestatus::where('')
    // dd($datas->sender_id);
    return $data;

});