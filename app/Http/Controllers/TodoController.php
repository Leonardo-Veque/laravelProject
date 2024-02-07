<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Todo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('todo.todo');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        DB::beginTransaction();
        try {
            Todo::create([
                "title" => $request->title,
                "body" => $request->body,
            ]);
            // $data = $request->all();

            // Todo::create($data);

            DB::commit();
        } catch (Exception $ex) {
            DB::rollback();

            return Redirect::back()->withErrors($ex->getMessage())->withInput();
        }

        $todos = Todo::all();

        session(['todos' => $todos]);

        return Redirect::route('dashboard')->withSuccess("Notas salvada com Sucesso!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
