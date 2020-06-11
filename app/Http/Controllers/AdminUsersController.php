<?php

namespace App\Http\Controllers;

use App\Foto;
use App\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    /*  User::create($request->all());

        return redirect('/admin/users');
    */


        $entrada = $request->all(); //se almacena en entrada el resultado de toda la consulta que hace

        //este if es para las imagenes de la bd. ruta_foto llamé al input que está en create.blade.php
        if($archivo=$request->file('foto_id')){
            /*esto va para la tabla foto*/
            $nombre = $archivo->getClientOriginalName();
            $archivo->move('images',$nombre); //moveme la imagen a public/images
            $entrada['ruta_foto']=$nombre; //la ruta_foto que es la columna en la bd debe ser igual a la variable nombre
            $foto=Foto::create($entrada); //Llamo al modelo FOTO y en el metodo create le paso la entrada

            //esto va a la tabla users, el id de la foto
            $entrada['foto_id']=$foto->id; //pasale el id a la ruta creada
        }
        $entrada['password']=bcrypt($request->password); //encriptamos la psw
        User::create($entrada);


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
