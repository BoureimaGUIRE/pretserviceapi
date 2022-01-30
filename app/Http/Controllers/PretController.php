<?php

namespace App\Http\Controllers;

use App\Models\Pret;



class PretController extends Controller
{

    public function index()
    {
        $pointages = Pret::all();
        return $this->successResponse($pointages);
    }

    public function show($id)
    {
        $pointage = Pret::findOrFail($id);
        return $this->successResponse($pointage);
    }

}