<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Article;
use Illuminate\Http\Request;

class PdfgeneratorController extends Controller
{
    public function generate_single_pdf( $article )
    {
      $single =Article::find($article);
      $pdf = PDF::loadView('pdf.single',['single' => $single]);
      return $pdf->stream('single.pdf');
    }


    public function generate_all()
    {
        $articles =Article::all();
        $pdf=PDF::loadView('pdf.all' , ['articles' => $articles]);
        return $pdf->stream('all.pdf');
    }
}
