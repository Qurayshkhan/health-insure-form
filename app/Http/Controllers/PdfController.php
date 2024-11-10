<?php

namespace App\Http\Controllers;

use App\Mail\SurveyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use PDF;

class PdfController extends Controller
{
    public function index()
    {
        return view('pages.form.form');
    }
    public function store(Request $request)
    {
        $this->sendAndGenerateMail($request);
        return redirect()->back()->with('success', "PDF erfolgreich generieren und E-Mail versenden");
    }

    public function sendAndGenerateMail($request)
    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.survay', compact('data'))->setPaper('A4', 'portrait');
        $pdfContent = $pdf->output();
        $pdf->getDomPDF()->set_option('isHtml5ParserEnabled', true);
        $pdf->getDomPDF()->set_option('isPhpEnabled', true);
        Mail::to($request->email)->send(new SurveyMail($pdfContent, $request->all()));
        $pdf->download('document.pdf');
    }
}
