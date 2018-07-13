<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => [
            'index', 'Contacto']]);
    }
    
    public function index() {
    	return view ('index');
    }
    public function ayuda() {
    	return view ('ayuda');
    }
    Public function Contacto() {
    	return view('Contacto');
    }
    Public function vista() {
    	return view('vista');
    }
    Public function ugandaknuckles(){
        return view('ugandaknuckles');
    }
}
