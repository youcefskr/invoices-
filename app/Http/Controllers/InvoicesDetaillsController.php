<?php

namespace App\Http\Controllers;
use App\Models\invoices;
use App\Models\invoice_attachments;
use App\Models\invoices_detaills;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use File;
class InvoicesDetaillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(invoices_detaills $invoices_detaills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)

    {
        $invoices = invoices::where('id',$id)->first();
        $details  = invoices_detaills::where('id_Invoice',$id)->get();
        $attachments  = invoice_attachments::where('invoice_id',$id)->get();

        return view('invoices.details_invoice',compact('invoices','details','attachments'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, invoices_detaills $invoices_detaills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $invoices = invoice_attachments::findOrFail($request->id_file);
        $invoices->delete();
        Storage::disk('public_uploads')->delete($request->invoice_number.'/'.$request->file_name);
        session()->flash('delete', 'تم حذف المرفق بنجاح');
        return back();
    }

    public function open_file($invoice_number, $file_name)
    {
        $path = $invoice_number . '/' . $file_name;

        // Generate the full path
        $fullPath = Storage::disk('public_uploads')->path($path);

        return response()->file($fullPath);
    }

    public function download_file($invoice_number, $file_name)
    {
        $path = $invoice_number . '/' . $file_name;

        // Generate the full path
        $fullPath = Storage::disk('public_uploads')->path($path);

        return response()->download($fullPath);
    }


}
