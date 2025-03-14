<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * List users
     */
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    /**
     * Create user
     */
    public function store(Request $request)
    {
        $body = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $user = User::create($body);

        return response()->json($user, 201);
    }

    /**
     * Update user
     */
    public function update(Request $request, User $user)
    {
        $body = $request->validate([
            'name' => ['required', 'string'],
        ]);

        $user->update($body);

        return response()->json($user);
    }

    /**
     * Delete user
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(null, 204);
    }
}
