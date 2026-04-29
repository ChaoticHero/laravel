<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
// use Illuminate\Database\Eloquent\Model->__get();

class ProfileController extends Controller
{
    public function index() {
    // Get the currently authenticated user
    $user = auth()->user(); 
    return view('dashboard', compact('user'));
}
    public function edit()
    {
        $profiles = Auth::user()->profile;


        $user = Auth::user();
        return view('profile.edit', compact('profiles', 'user'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'bio' => 'nullable|string',
            'avatar' => 'nullable|image'
        ]);

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        Auth::user()->profile()->updateOrCreate([], $data);

        return back()->with('success', 'Profile updated!');
    }
}
