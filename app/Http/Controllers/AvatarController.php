<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    /**
     * Upload avatar file to the server.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
        // $request->session()->flush();
        return view('avatar.upload');
    }

    /**
     * Upload avatar file to the server.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();

            // $path = $file->storePublicly('avatars', 'public');
            $path = $request->file('image')->storeAs(
                'avatars',
                $name,
                'public'
            );

            $url = Storage::url($path);

            return view('avatar.preview', ['url' => $url, 'name' => $name]);
        }

        return redirect()->back();
    }
}
