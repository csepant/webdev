<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\ContactForm;
use DB;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'first_name.required' => 'El campo "Nombre" es obligatorio.',
            'email.required'  => 'El campo "Email" es obligatorio.',
            'message.required' => 'El campo "Mensaje" es obligatorio.'
        ];

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ], $messages);

        if ($validator->fails()){
            return redirect('/#contact')->withErrors($validator);
        } else {
            $cf = new ContactForm;
            $cf->first_name = $request->input('first_name');
            $cf->last_name = $request->input('last_name');
            $cf->email = $request->input('email');
            $cf->message = $request->input('message');
            $cf->save();
            return redirect('/#contact')->with('success', 'Gracias por contactarnos!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
