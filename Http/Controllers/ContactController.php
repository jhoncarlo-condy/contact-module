<?php

namespace Modules\Contact\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Contact\Http\Requests\CreateContactRequest;

class ContactController extends Controller
{

    public function index()
    {
        return response()->json([
            'message' => 'index'
        ]);
    }

    public function store(CreateContactRequest $request)
    {
        dd('store');
    }

    public function show($id)
    {
        return response()->json([
            'message' => 'show'
        ]);
    }

    public function update(Request $request, $id)
    {
        dd('update');
    }

    public function destroy($id)
    {
        return response()->json([
            'message' => 'delete'
        ]);
    }
}
