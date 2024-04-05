<?php

namespace App\Http\Controllers;
use App\Models\worker;
use App\Models\User;
use Illuminate\Http\Request;

class workerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
        // $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = worker::all();
        // $user = worker::where('is_admin',1)->get();
        // dd($user);
        return view('index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return $request;
        // dd($request);

        $request->validate([
              'name'        =>[],
              'email'       =>[],
              'password'    =>[],
              'is_admin'    =>[], 
        ]);

        $worker = new worker();

        $worker->name = $request->name;
        $worker->email = $request->email;
        $worker->password = $request->password;
        $worker->is_admin = $request->is_admin;

        $worker->save();

        return redirect()->route('index');

    }

    /**
     * Display the specified resource.
     */
    public function users(){
        $user = worker::where('is_admin','User')->get();
        return view('index',compact('user'));
    }

    public function admins(){
        $user = worker::where('is_admin','Admin')->get();
        return view('index',compact('user'));
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //dd($id);
        $user = worker::findOrFail($id);
        return view('edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'        =>[],
            'email'       =>[],
            'password'    =>[],
            'is_admin'    =>[],
      ]);


        $user = worker::findOrFail($id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin;

        $user->save();

        return redirect()->route('index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = worker::findOrFail($id);
        $user->delete();
        return redirect()->route('index');
    }
}
