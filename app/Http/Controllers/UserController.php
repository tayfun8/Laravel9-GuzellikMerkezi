<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();
        return view('home.user.index', [
            'setting' => $setting
        ]);
    }

    public function comment()
    {
        $setting = Setting::first();
        $comment = Comment::where('user_id', '=', Auth::id())->get();
        return view('home.user.comment',[
            'setting' => $setting,
            'comment' => $comment,
        ]);
    }

    public function myappointments()
    {
        $setting = Setting::first();
        $appointment = Appointment::where('user_id', '=', Auth::id())->get();
        return view('home.user.myappointments',[
            'setting' => $setting,
            'appointment' => $appointment,
        ]);
    }

    public function myappointmentsdestroy($id)
    {
        Appointment::destroy($id);
        return redirect('/userpanel/myappointments');
    }

    

    public function commentdestroy($id)
    {
        Comment::destroy($id);
        return redirect('/userpanel/comment');
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
        //
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
    public function myprofile(){
        echo "profil sayfası";
    }
}
