<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\updateAvatarRequest;


class AvatarController extends Controller
{
    public function update( updateAvatarRequest $request){
      // in this we show just whene avatars dirctoty gonna be storage
      //  $path= $request->file('avatar')->store('public/avatars');
      $path= $request->file('avatar')->store('avatars','public');
    
        auth()->user()->update(['avatar'=>'path']);
        
        // t===>this is for create a new dirctory in storage and create things inside it
        
        // dd($request->all());
  
    //  return response()->redirectTo(route('profile.edit'));
    // return back()->with('message','avatar is changed');

      return redirect(route('profile.edit'))->with('message','avatar is changed');
    }
}
