<?php

namespace App\Http\Controllers;

use App\Models\Foo;
use Illuminate\Http\Request;

class FooController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foos = Foo::latest()->simplePaginate(15);
        return view('foo.index', compact('foos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('foo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $foo = Foo::create($this->validateFoo($request));
        $msg = "New foo creation successful! ";

        return redirect(route('foo.show', $foo))->with('msg', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(Foo $foo)
    {
        return view('foo.show', compact('foo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foo $foo)
    {
        return view('foo.edit', compact('foo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foo $foo)
    {
        $foo->update($this->validateFoo($request));

        $msg = "Foo update successful! ";

        return redirect(route('foo.show', $foo))->with('msg', $msg);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foo $foo)
    {
        Foo::find($foo)->each->delete();

        return redirect('/foo');
    }

    public function validateFoo(Request $request): array
    {
        return $request->validate([
            'name' => 'required',
            'thud' => 'required|numeric|min: 0',
            'wombat' => 'required'
        ]);
    }
}
