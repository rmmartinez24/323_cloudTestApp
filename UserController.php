<?php

namespace App\Http\Controllers;

use App\Models\User; // Import your User model if you're interacting with the database
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Get all users from the database
        return view('users.index', compact('users')); // Return a view and pass the users data
    }

    public function create()
    {
        return view('users.create'); // Return a view with a form for creating a new user
    }

    public function store(Request $request)
    {
        $user = new User($request->all()); // Create a new user with request data
        $user->save(); // Save the user to the database
        return redirect()->route('users.index'); // Redirect to the list of users
    }

    public function show($id)
    {
        $user = User::findOrFail($id); // Find the user or fail
        return view('users.show', compact('user')); // Return a view with user data
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user')); // Return a view with a form to edit the user
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all()); // Update the user with new data
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        User::destroy($id); // Delete the user
        return redirect()->route('users.index'); // Redirect to the list of users
    }
}
